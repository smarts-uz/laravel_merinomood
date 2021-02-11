<?php


namespace App\Admin\Fields;


use App\Product;
use App\Specification;
use Arniro\Admin\Fields\Field;
use Arniro\Admin\Http\Requests\AdminRequest;
use Illuminate\Support\Arr;

class Specifications extends Field
{
    public function storeSavedSpecifications(AdminRequest $request, Product $model)
    {
        $specifications = $request->getJson('specifications');

        $this->createNewSpecifications($model, $specifications);
    }

    public function updateSpecifications(AdminRequest $request, Product $model)
    {
        $specifications = $request->getJson('specifications');

        $this->updateOldSpecifications($specifications)
            ->deleteSpecifications($model, $specifications)
            ->createNewSpecifications($model, $specifications);

    }

    public function createNewSpecifications(Product $product, $specifications)
    {
        foreach ($this->newSpecifications($specifications) as $index => $specification) {
            $product->specifications()
                ->create([
                    'index' => $index + 1,
                    'label' => $specification['label'],
                    'value' => $specification['value']
                ]);
        }

        return $this;
    }

    public function deleteSpecifications(Product $product, $specifications)
    {
        $product->specifications()->whereNotIn(
            'id', array_column($specifications, 'id')
        )->delete();

        return $this;
    }

    public function updateOldSpecifications($specifications)
    {
        foreach ($this->oldSpecifications($specifications) as $index => $specification) {

            Specification::find($specification['id'])->update([
                'index' => $index + 1,
                'label' => $specification['label'],
                'value' => $specification['value']
            ]);
        }

        return $this;
    }

    protected function oldSpecifications($specifications)
    {
        return array_filter($specifications, function ($specification) {
            return Arr::get($specification, 'id');
        });
    }

    protected function newSpecifications($specifications)
    {
        return array_filter($specifications, function ($specification) {
            return !Arr::get($specification, 'id');
        });
    }
}
