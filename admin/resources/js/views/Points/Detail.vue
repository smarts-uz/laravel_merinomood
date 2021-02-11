<template>
    <detail :resource="point"
        class="mb-10" />
</template>

<script>
    import Detail from 'Vendor/js/components/Templates/Detail'
    import {Index} from 'Vendor/js/components/Templates/Index'
    import ResourceDetail from 'Vendor/js/Mixins/ResourceDetail'

    export default {
        components: {
            Detail,
            Index
        },
        mixins: [ResourceDetail],
        data() {
            return {
                point: {},
                resource: 'point'
            }
        },
        async created() {
            const { data } = await Admin.request('points').detail(this.$route.params.id)

            this.point = data
        }
    }
</script>
