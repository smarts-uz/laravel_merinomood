<template>
    <detail :resource="user"
            class="mb-10" >
        <template v-slot:address="{field}">
            <div v-if="field.value" class="w-full">
                <div><span class="w-1/4 inline-block font-bold">Phone:</span> {{ field.value.phone }}</div>
                <div><span class="w-1/4 inline-block font-bold">Country:</span> {{ field.value.country }}</div>
                <div><span class="w-1/4 inline-block font-bold">State:</span> {{ field.value.state.name }}</div>
                <div><span class="w-1/4 inline-block font-bold">City:</span> {{ field.value.city }}</div>
                <div><span class="w-1/4 inline-block font-bold">Address:</span> {{ field.value.address }}</div>
                <div><span class="w-1/4 inline-block font-bold">Postcode:</span> {{ field.value.postcode }}</div>
            </div>
            <div v-else>
                <i class="dripicons-minus text-gray-600" title="Значение отсутствует" />
            </div>
        </template>
    </detail>
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
                user: {},
                resource: 'user'
            }
        },
        async created() {
            const { data } = await Admin.request('users').detail(this.$route.params.id)

            this.user = data
        }
    }
</script>
