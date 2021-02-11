@props([
    'options' => '{}',
])
<select {{ $attributes }}>
    {{ $slot }}
    <template x-data x-init="() => {
                    new SlimSelect({
                        select: $el.parentElement,
                        showSearch: false,
                        onChange: function(item){$dispatch('change', item.value)},
                        ...{{ $options }},
                        })}">
    </template>
</select>
