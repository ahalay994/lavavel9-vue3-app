<template>
<div :id="id">
    <ul :class="classList" :aria-labelledby="id">
        <v-header-menu-item
            :current-page="currentPage"
            v-for="menuItem in menu"
            :menu-item="menuItem"
            :class-link="classLink"
            :is-active="currentPage === menuItem['route']"
        />
    </ul>
</div>
</template>

<script>
export default {
    name: "HeaderMenu",
    props: {
        id: String,
        menu: Array|Object|String,
        currentPage: String,
        classList: Array|Object|String,
        classLink: Array|Object|String,
    },
}
</script>

<style scoped>

</style>
