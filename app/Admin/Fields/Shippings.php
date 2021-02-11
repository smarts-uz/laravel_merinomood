<?php


namespace App\Admin\Fields;


use App\State;
use App\Shipping;
use Arniro\Admin\Fields\Field;
use Arniro\Admin\Http\Requests\AdminRequest;
use Illuminate\Support\Arr;

class Shippings extends Field
{
    public function storeSavedShippings(AdminRequest $request, State $model)
    {
        $shippings = $request->getJson('shippings');

        $this->createNewShippings($model, $shippings);
    }

    public function updateShippings(AdminRequest $request, State $model)
    {
        $shippings = $request->getJson('shippings');

        $this->updateOldShippings($shippings)
            ->deleteShippings($model, $shippings)
            ->createNewShippings($model, $shippings);

    }

    public function createNewShippings(State $state, $shippings)
    {
        foreach ($this->newShippings($shippings) as $index => $shipping) {
            $state->shippings()
                ->create([
                    'type' => $shipping['type'],
                    'cost' => $shipping['cost'],
                    'duration' => $shipping['duration']
                ]);
        }

        return $this;
    }

    public function deleteShippings(State $state, $shippings)
    {
        $state->shippings()->whereNotIn(
            'id', array_column($shippings, 'id')
        )->delete();

        return $this;
    }

    public function updateOldShippings($shippings)
    {
        foreach ($this->oldShippings($shippings) as $index => $shipping) {

            Shipping::find($shipping['id'])->update([
                'type' => $shipping['type'],
                'cost' => $shipping['cost'],
                'duration' => $shipping['duration']
            ]);
        }

        return $this;
    }

    protected function oldShippings($shippings)
    {
        return array_filter($shippings, function ($shipping) {
            return Arr::get($shipping, 'id');
        });
    }

    protected function newShippings($shippings)
    {
        return array_filter($shippings, function ($shipping) {
            return !Arr::get($shipping, 'id');
        });
    }
}
