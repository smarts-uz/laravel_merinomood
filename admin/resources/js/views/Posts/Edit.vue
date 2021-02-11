<template>
    <editForm :resource="post" />
</template>

<script>
    import editForm from 'Vendor/js/components/Templates/Edit'

    export default {
        components: {
            editForm
        },

        data() {
            return {
                post: {},
            }
        },

        async created() {
            const { data } = await Admin.request('posts').edit(this.$route.params.id)
            this.post = data
        }
    }
</script>


