<template>
    <index :resources="banners" :via="via" :label="label"
        @update="banners = $event" />
</template>

<script>
    import { Index, Actions, Fetch } from 'Vendor/js/components/Templates/Index'

    export default {
        components: {
            Index,
            Actions
        },
        mixins: [Fetch],
        data() {
            return {
                banners: {},
                route: 'banners'
            }
        }
    }
</script>
