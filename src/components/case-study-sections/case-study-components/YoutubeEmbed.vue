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

    const playerElement = ref(null)

    let player = null

    let isPlayerReady = false

    let isUnmounted = false

    // Get the loading function from useYouTubeApi.js
    const { loadYouTubeApi } = useYouTubeApi()

    onMounted(async () => {

        // Waits for YouTube's API to be ready and then stores in variable YT
        const YT = await loadYouTubeApi()

        // Called a "Race condition". This is a failsafe in case a user leaves while the API is loading. Otherwise a player created now would never be destroyed.
        if (isUnmounted) return
</script>

<style scoped lang="scss">

</style>