<template>
    <index :resources="questions" :via="via" :label="label"
        @update="questions = $event" />
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
                questions: {},
                route: 'questions'
            }
        }
    }
</script>
