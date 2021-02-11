<template>
    <createForm :resource="banner" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                banner: {}
            }
        },

        async created() {
            const { data } = await Admin.request('banners').create()
            this.banner = data;
        }
    }
</script>
