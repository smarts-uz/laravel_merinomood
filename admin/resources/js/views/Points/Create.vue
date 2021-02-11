<template>
    <createForm :resource="point" />
</template>

<script>
    import CreateForm from 'Vendor/js/components/Templates/Create'

    export default {
        components: {
            CreateForm
        },

        data() {
            return {
                point: {}
            }
        },

        async created() {
            const { data } = await Admin.request('points').create()
            this.point = data;
        }
    }
</script>
