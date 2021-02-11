<template>
    <index :resources="states" :via="via" :label="label"
        @update="states = $event" />
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
                states: {},
                route: 'states'
            }
        }
    }
</script>
