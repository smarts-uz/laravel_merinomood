<template>
    <index :resources="posts" :via="via" :label="label"
        @update="posts = $event" />
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
                posts: {},
                route: 'posts'
            }
        }
    }
</script>
