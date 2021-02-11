<template>
    <editForm :resource="brand" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                brand: {},
            }
        },

        async created() {
            const { data } = await Admin.request('brands').edit(this.$route.params.id)
            this.brand = data
        }
    }
</script>


