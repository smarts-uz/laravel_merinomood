<template>
    <createForm :resource="brand" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                brand: {}
            }
        },

        async created() {
            const { data } = await Admin.request('brands').create()
            this.brand = data;
        }
    }
</script>
