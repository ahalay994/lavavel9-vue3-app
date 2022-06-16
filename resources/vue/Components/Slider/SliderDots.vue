<template>
    <ol class="carousel__pagination">
        <SliderDot
            v-for="i in slidesCount"
            :currentSlide="i"
            :is-active="currentSlide === i - 1"
            :key="i"
            @selectDot="this.$parent.slideTo(i - 1)"
        />
    </ol>
</template>

<script>
import SliderDot from "./SliderDot";

export default {
    name: "SliderDots",
    components: {SliderDot},
    props: {
        slidesCount: Number,
        currentSlide: Number,
    },
}
</script>

<style scoped>

</style>
