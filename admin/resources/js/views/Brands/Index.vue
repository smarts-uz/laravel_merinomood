<template>
    <index :resources="brands" :via="via" :label="label"
        @update="brands = $event" />
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
                brands: {},
                route: 'brands'
            }
        }
    }
</script>
