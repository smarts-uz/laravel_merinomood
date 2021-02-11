<template>
    <detail :resource="faqCategory"
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
                faqCategory: {},
                resource: 'faqCategory'
            }
        },
        async created() {
            const { data } = await Admin.request('faq-categories').detail(this.$route.params.id)

            this.faqCategory = data
        }
    }
</script>
