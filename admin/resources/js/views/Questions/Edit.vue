<template>
    <editForm :resource="question" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                question: {},
            }
        },

        async created() {
            const { data } = await Admin.request('questions').edit(this.$route.params.id)
            this.question = data
        }
    }
</script>


