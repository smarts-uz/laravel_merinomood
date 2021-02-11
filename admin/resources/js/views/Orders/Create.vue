<template>
    <createForm :resource="order" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                order: {}
            }
        },

        async created() {
            const { data } = await Admin.request('orders').create()
            this.order = data;
        }
    }
</script>
