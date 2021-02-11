<template>
    <editForm :resource="order" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                order: {},
            }
        },

        async created() {
            const { data } = await Admin.request('orders').edit(this.$route.params.id)
            this.order = data
        }
    }
</script>


