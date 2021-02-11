@props([
    'options' => '{}',
])
<div x-data x-init="() => {new Rater({element: $el, readOnly: true, ...{{$options}} })}">
</div>

