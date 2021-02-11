<template>
    <editForm :resource="orderVariation" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                orderVariation: {},
            }
        },

        async created() {
            const { data } = await Admin.request('order-variations').edit(this.$route.params.id)
            this.orderVariation = data
        }
    }
</script>


