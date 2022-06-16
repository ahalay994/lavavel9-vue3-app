<template>
    <picture>
        <source v-if="imageMin" :srcset="`${fileName}.webp`" media="(max-width: 560px)" type="image/webp">
        <source v-if="imageMin" :srcset="image" media="(max-width: 560px)">
        <source :srcset="`${fileName}.webp`" type="image/webp">
        <img :src="image" :alt="alt" :title="title" />
    </picture>
</template>

<script>
export default {
    name: "Image",
    props: {
        image: String,
        imageMin: String,
        title: String,
        alt: String,
    },
    computed: {
        fileName() {
            return this.image.replace(/\.[^/.]+$/, "");
        },
    }
}
</script>
