<template>
    
    <div class="youtube-embed-con">

        <div class="youtube-embed">

            <div ref="playerElement"></div>

        </div>

    </div>

</template>

<script setup>

    import { ref, onMounted, onBeforeUnmount, watch } from 'vue'
    import { useYoutubeApi } from '@/composables/useYouTubeApi'

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