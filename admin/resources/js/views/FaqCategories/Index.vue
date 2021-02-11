<template>
    <index :resources="faqCategories" :via="via" :label="label"
        @update="faqCategories = $event" />
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
                faqCategories: {},
                route: 'faq-categories'
            }
        }
    }
</script>
