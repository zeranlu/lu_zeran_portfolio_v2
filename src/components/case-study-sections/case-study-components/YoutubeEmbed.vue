<template>
    
    <div class="youtube-embed-con">

        <iframe
            class="youtube-embed"
            :src="`https://www.youtube-nocookie.com/embed/${videoId}`"
            :title="title"
            loading="lazy"
            refererpolicy="strict-origin-when-cross-origin"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
        >
        </iframe>

    </div>

</template>

<script setup>

    defineProps({
        videoId: String,
        title: {
            type: String,
            default: 'Youtube Video Player'
        }
    })

</script>

<style scroped lang="scss">

</style>