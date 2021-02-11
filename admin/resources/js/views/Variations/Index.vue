<template>
    <index :resources="variations" :via="via" :label="label"
        @update="variations = $event" />
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
                variations: {},
                route: 'variations'
            }
        }
    }
</script>
