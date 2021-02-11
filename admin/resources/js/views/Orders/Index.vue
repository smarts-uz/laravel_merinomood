<template>
    <index :resources="orders" :via="via" :label="label"
        @update="orders = $event" />
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
                orders: {},
                route: 'orders'
            }
        }
    }
</script>
