<template>
    <button type="button" :class="`carousel__${type}`" :aria-label="`Navigate to ${type} slide`">
        <svg class="carousel__icon" viewBox="0 0 24 24" role="img" :ariaLabel="`arrow${type === 'prev' ? 'Left' : 'Right'}`">
            <title>arrow{{ type === 'prev' ? 'Left' : 'Right' }}</title>
            <path v-if="type === 'prev'" d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"></path>
            <path v-else d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path>
        </svg>
    </button>
</template>

<script>
export default {
    name: "SliderButton",
    props: {
        type: String,
    }
}
</script>

<style scoped>

</style>
