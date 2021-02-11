@props([
    'options' => '{}',
])
<template x-data x-init="() => {new Rater({element: $el, readOnly: true, ...{{$options}} })}">
</template>
