<template>
    
    <div class="youtube-embed-con">

        <div class="youtube-embed">

            <div ref="playerElement"></div>

        </div>

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

<style scoped lang="scss">

</style>