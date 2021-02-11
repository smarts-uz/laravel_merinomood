<?php


namespace App\Admin\Fields;


use App\Variation;
use App\VariationItem;
use Arniro\Admin\Fields\Field;
use Arniro\Admin\Http\Requests\AdminRequest;
use Illuminate\Support\Arr;

class VariationItems extends Field
{
    public function storeSavedVariationItems(AdminRequest $request, Variation $model)
    {
        $variationItems = $request->getJson('variationItems');

        $this->createNewVariationItems($model, $variationItems);
    }

    public function updateVariationItems(AdminRequest $request, Variation $model)
    {
        $variationItems = $request->getJson('variationItems');

        $this->updateOldVariationItems($variationItems)
            ->deleteVariationItems($model, $variationItems)
            ->createNewVariationItems($model, $variationItems);

    }

    public function createNewVariationItems(Variation $variation, $variationItems)
    {
        foreach ($this->newVariationItems($variationItems) as $index => $variationItem) {
            $variation->variationItems()
                ->create([
                    'size' => $variationItem['size'],
                    'price' => $variationItem['price'],
                    'in_stock' => $variationItem['in_stock']
                ]);
        }

        return $this;
    }

    public function deleteVariationItems(Variation $variation, $variationItems)
    {
        $variation->variationItems()->whereNotIn(
            'id', array_column($variationItems, 'id')
        )->delete();

        return $this;
    }

    public function updateOldVariationItems($variationItems)
    {
        foreach ($this->oldVariationItems($variationItems) as $index => $variationItem) {

            VariationItem::find($variationItem['id'])->update([
                'size' => $variationItem['size'],
                'price' => $variationItem['price'],
                'in_stock' => $variationItem['in_stock']
            ]);
        }

        return $this;
    }

    protected function oldVariationItems($variationItems)
    {
        return array_filter($variationItems, function ($variationItem) {
            return Arr::get($variationItem, 'id');
        });
    }

    protected function newVariationItems($variationItems)
    {
        return array_filter($variationItems, function ($variationItem) {
            return !Arr::get($variationItem, 'id');
        });
    }
}
