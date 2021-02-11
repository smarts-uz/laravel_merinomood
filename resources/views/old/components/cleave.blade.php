<input {{ $attributes }} type="text" x-data x-init="() => {
    new Cleave($el, {
        ...{{ $options }},
    });
}">
