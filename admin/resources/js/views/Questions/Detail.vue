<template>
    <detail :resource="question"
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
                question: {},
                resource: 'question'
            }
        },
        async created() {
            const { data } = await Admin.request('questions').detail(this.$route.params.id)

            this.question = data
        }
    }
</script>
