<template>
    <editForm :resource="point" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                point: {},
            }
        },

        async created() {
            const { data } = await Admin.request('points').edit(this.$route.params.id)
            this.point = data
        }
    }
</script>


