<template>
    <SliderButton :class="{'carousel__prev--in-active': isFirst}" type="prev" @click="$parent.prev()"/>
    <SliderButton :class="{'carousel__next--in-active': isLast}" type="next" @click="$parent.next()"/>
</template>

<script>
import SliderButton from "./SliderButton";

export default {
    name: "SliderButtons",
    components: {
        SliderButton
    },
    props: {
        isFirst: Boolean,
        isLast: Boolean,
    }
}
</script>

<style scoped>

</style>
