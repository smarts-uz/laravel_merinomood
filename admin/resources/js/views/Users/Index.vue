<template>
    <index :resources="users" :via="via" :label="label"
        @update="users = $event" />
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
                users: {},
                route: 'users'
            }
        }
    }
</script>
