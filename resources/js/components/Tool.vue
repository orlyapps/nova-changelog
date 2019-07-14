<template>
    <div>
        <heading class="mb-6">{{__('Changelog')}}</heading>
        <card class="p-6" style="min-height: 300px" v-html="changelog"></card>
    </div>
</template>

<script>
export default {
    data() {
        return {
            changelog: ""
        };
    },
    mounted() {
        this.fetch();
    },
    methods: {
        async fetch() {
            this.changelog = (await Nova.request().get("/nova-vendor/nova-changelog/changelog")).data;
        }
    }
};
</script>

<style>
h1,
h2,
h3,
h4,
p,
ul {
    margin-bottom: 15px;
}
</style>
