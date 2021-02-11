<template>
    <detail :resource="category"
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
                category: {},
                resource: 'category'
            }
        },
        methods: {
            async fetch() {
                const { data } = await Admin.request('categories').detail(this.$route.params.id)

                this.category = data
            }
        },
        watch: {
            $route() {
                this.fetch()
            }
        },
        created() {
            this.fetch()
        }
    }
</script>
