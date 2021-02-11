<template>
    <createForm :resource="orderVariation" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                orderVariation: {}
            }
        },

        async created() {
            const { data } = await Admin.request('order-variations').create()
            this.orderVariation = data;
        }
    }
</script>
