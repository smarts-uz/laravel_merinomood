<template>
    <detail :resource="banner"
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
                banner: {},
                resource: 'banner'
            }
        },
        async created() {
            const { data } = await Admin.request('banners').detail(this.$route.params.id)

            this.banner = data
        }
    }
</script>
