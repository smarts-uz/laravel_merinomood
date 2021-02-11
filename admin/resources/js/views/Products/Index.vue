<template>
    <index :resources="products" :via="via" :label="label"
        @update="products = $event" />
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
                products: {},
                route: 'products'
            }
        }
    }
</script>
