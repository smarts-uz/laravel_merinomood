<template>
    <index :resources="categories" :via="via" :label="label"
        @update="categories = $event" />
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
                categories: {},
                route: 'categories'
            }
        }
    }
</script>
