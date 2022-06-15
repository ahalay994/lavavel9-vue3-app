<template>
    <a href="/" class="flex items-center">
        <img :src="logo" class="mr-3 h-6 sm:h-9" :alt="title"/>
        <span class="self-center text-xl font-semibold whitespace-nowrap">{{ title }}</span>
    </a>
</template>

<script>
export default {
    name: "HeaderLogo",
    props: {
        logo: {
            type: String,
            default: '',
        },
        title: {
            type: String,
            default: '',
        },
    }
}
</script>

<style scoped>

</style>
