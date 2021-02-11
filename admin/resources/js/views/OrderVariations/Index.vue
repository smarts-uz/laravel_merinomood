<template>
    <index :resources="orderVariations" :via="via" :label="label"
        @update="orderVariations = $event" />
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
                orderVariations: {},
                route: 'order-variations'
            }
        }
    }
</script>
