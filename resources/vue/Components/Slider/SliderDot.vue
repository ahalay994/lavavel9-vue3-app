<template>
    <li class="carousel__pagination-item">
        <button
            type="button"
            class="carousel__pagination-button"
            :class="{'carousel__pagination-button--active': isActive}"
            :aria-label="`Navigate to slide ${currentSlide}`"
            @click="$emit('select-dot')">
        </button>
    </li>
</template>

<script>
export default {
    name: "SliderDot",
    props: {
        currentSlide: Number,
        isActive: false,
        selectDot: Function,
    }
}
</script>

<style scoped>

</style>
