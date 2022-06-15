<template>
    <li>
        <a
            :href="menuItem['link']"
            :class="[isActive ? 'md:text-blue-700' : 'md:text-green-700', classLink]"
            aria-current="page"
        >
            {{ menuItem['name'] }}
        </a>
    </li>
</template>

<script>
export default {
    name: "HeaderMenuItem",
    props: {
        menuItem: Object,
        classLink: Array|Object|String,
        isActive: {
            type: Boolean,
            default: false,
        },
    }
}
</script>

<style scoped>

</style>
