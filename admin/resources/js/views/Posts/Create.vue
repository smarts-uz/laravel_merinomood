<template>
    <createForm :resource="post" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                post: {}
            }
        },

        async created() {
            const { data } = await Admin.request('posts').create()
            this.post = data;
        }
    }
</script>
