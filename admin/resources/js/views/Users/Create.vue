<template>
    <createForm :resource="user" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                user: {}
            }
        },

        async created() {
            const { data } = await Admin.request('users').create()
            this.user = data;
        }
    }
</script>
