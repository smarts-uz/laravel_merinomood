<template>
    <editForm :resource="faqCategory" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                faqCategory: {},
            }
        },

        async created() {
            const { data } = await Admin.request('faq-categories').edit(this.$route.params.id)
            this.faqCategory = data
        }
    }
</script>


