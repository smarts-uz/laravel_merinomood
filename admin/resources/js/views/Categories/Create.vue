<template>
    <createForm :resource="category" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                category: {}
            }
        },

        async created() {
            const { data } = await Admin.request('categories').create()
            this.category = data;
        }
    }
</script>
