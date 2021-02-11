<template>
    <createForm :resource="question" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                question: {}
            }
        },

        async created() {
            const { data } = await Admin.request('questions').create()
            this.question = data;
        }
    }
</script>
