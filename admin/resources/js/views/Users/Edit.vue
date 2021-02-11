<template>
    <editForm :resource="user" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                user: {},
            }
        },

        async created() {
            const { data } = await Admin.request('users').edit(this.$route.params.id)
            this.user = data
        }
    }
</script>


