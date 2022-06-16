<template>
    <carousel :items-to-show="1" :settings="settings" :breakpoints="breakpoints" ref="carousel">
        <slide v-for="slide in 3" :key="slide">
            <Image
                :class="[isSmall ? 'carousel__image--small' : 'carousel__image--big', 'flex items-center justify-center']"
                image="/images/background.jpg"
            />
        </slide>

        <template #addons="{ slidesCount, currentSlide }">
            <SliderButtons v-if="slidesCount > 1" :is-first="currentSlide === 0" :is-last="currentSlide === slidesCount - 1"  />
            <SliderDots :slidesCount="slidesCount" :currentSlide="currentSlide" />
        </template>
    </carousel>
</template>

<script>
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import Image from "../Image";
import SliderButton from "./SliderButton";
import SliderButtons from "./SliderButtons";
import SliderDots from "./SliderDots";

export default {
    name: "Slider",
    components: {
        SliderDots,
        SliderButtons,
        SliderButton,
        Carousel,
        Slide,
        Pagination,
        Navigation,
        Image
    },
    props: {
        isSmall: {
            type: Boolean,
            default: false,
        },
    },
    data() {
        return {
            settings: {
                itemsToShow: 1,
                snapAlign: 'center',
                // autoplay: 2000,
            },
            breakpoints: {
                700: {
                    itemsToShow: this.isSmall ? 3 : 1,
                    snapAlign: 'center',
                },
                // 1024 and up
                1024: {
                    itemsToShow: this.isSmall ? 5 : 1,
                    snapAlign: 'start',
                },
            },
        };
    },
}
</script>

<style lang="scss">
.carousel {
    &__prev, &__next {
        &--in-active {
            display: none;
        }
    }

    &__image {
        &--big {
            height: 500px;
        }
        &--small {
            height: 50px;
        }
    }
}
</style>
