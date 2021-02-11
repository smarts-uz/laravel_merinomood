<template>
    <editForm :resource="banner" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                banner: {},
            }
        },

        async created() {
            const { data } = await Admin.request('banners').edit(this.$route.params.id)
            this.banner = data
        }
    }
</script>


