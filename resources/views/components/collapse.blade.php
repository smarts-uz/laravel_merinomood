@props([
'open' => false,
])
<div x-data="{expand: @json($open), height: 0}" class="collapse overflow-hidden" :class="{'is-active': expand}"
     x-init="() => { height = $refs.inner.scrollHeight }" {{ $attributes }}>
    <div class="toggle cursor-pointer" @click="expand = !expand">
        {{ $trigger }}
    </div>
    <div class="inner" :style="'height:' + (expand ? height : 0) + 'px'" x-ref="inner">
        {{ $slot }}
    </div>
</div>
