<template>
    <detail :resource="brand"
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
                brand: {},
                resource: 'brand'
            }
        },
        async created() {
            const { data } = await Admin.request('brands').detail(this.$route.params.id)

            this.brand = data
        }
    }
</script>
