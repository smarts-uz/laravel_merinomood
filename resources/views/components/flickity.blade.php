@props([
    'options' => '{}',
    'data' => ''
])

<div x-cloak x-data="{ flickity: null, {{ $data }} }"
     x-init="() => { flickity = new Flickity($el, {{ $options }}) }" {{ $attributes }} >
   {{ $slot }}
</div>
