<template>
    <editForm :resource="category" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                category: {},
            }
        },

        async created() {
            const { data } = await Admin.request('categories').edit(this.$route.params.id)
            this.category = data
        }
    }
</script>


