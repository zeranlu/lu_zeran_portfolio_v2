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
        YouTubeVideoId: String,
        YouTubeTitle: {
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

        player = new YT.Player(playerElement.value, {
            videoId: props.YouTubeVideoId,
            host: 'https://www.youtube-nocookie.com',
            playerVars: {
                rel: 0,
                // Lets videos play (on IOS) w/o needing to go full screen.
                playsinline: 1,
            },
            events: {
                onReady: () => {
                    isPlayerReady = true
                    player.getIframe().title = props.YouTubeTitle
                }
            }
        })
    })

    const seekTo = (seconds) => {

        if (!isPlayerReady) return

        player.seekTo(seconds, true)
        player.playVideo()

    }
</script>

<style scoped lang="scss">

</style>