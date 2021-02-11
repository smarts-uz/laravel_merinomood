<template>
    <createForm :resource="faqCategory" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                faqCategory: {}
            }
        },

        async created() {
            const { data } = await Admin.request('faq-categories').create()
            this.faqCategory = data;
        }
    }
</script>
