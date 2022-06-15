<template>
    <button type="button" class="flex rounded-full md:mr-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
        <img class="w-8 h-8 rounded-full" :src="user.logo" :alt="user.name" :title="user.name">
    </button>
</template>

<script>
export default {
    name: "HeaderUser",
    props: {
        user: Object,
    },
}
</script>

<style scoped>

</style>
