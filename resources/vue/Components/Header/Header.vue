<template>
    <nav class="flex flex-wrap justify-between items-center py-2.5">
        <v-header-logo :logo="logo" :title="appName" />

        <div class="flex items-center md:order-2">
            <v-header-user :user="user" />
            <!-- Dropdown menu -->
            <v-header-menu
                :menu="menu"
                type="mobile"
                :currentPage="currentPage"
                class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown"
                class-list="py-1"
                class-link="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200"
            />

            <v-header-menu-button-toggle @click="toggleMobileMenu" class="md:hidden block" />
        </div>

        <v-header-menu
            :menu="menu"
            type="desktop"
            :currentPage="currentPage"
            :class="{'hidden': !toggleMobileMenuState}"
            class="justify-between items-center w-full md:flex md:w-auto md:order-1"
            id="desktop-menu"
            class-list="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
            class-link="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0"
        />
    </nav>
</template>

<script>
export default {
    name: "Header",
    props: {
        menu: Array,
        logo: String,
        currentPage: String,
        user: Object,
        appName: String,
    },
    data() {
        return {
            toggleMobileMenuState: false,
        }
    },
    methods: {
        toggleMobileMenu() {
            this.toggleMobileMenuState = !this.toggleMobileMenuState;
        },
    }
}
</script>

<style scoped>

</style>
