<template>
    <div class="project-highlights content-con">
        
        <h2>Project Highlights</h2>

        <div class="case-study-content-con grid-con">
            <div class="case-study-content-wrapper s-col-span-4 m-col-span-3 l-col-span-8">
                <YouTubeEmbed
                    class="youTubeEmbed-con"
                    ref="youTubeEmbedRef"
                    :youTubeVideoId="caseStudyInfo.proj_video_id"
                    :youTubeTitle="`Youtube video of ${caseStudyInfo.proj_name}`">
                </YouTubeEmbed>
            </div>

            <VideoTimestamps />
        </div>
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import { useYouTubeApi } from '@/composables/useYouTubeApi'

    import YouTubeEmbed from '@/components/case-study-sections/Section-3-ProjectHighlights/YouTubeEmbed.vue'
    import VideoTimestamps from '@/components/case-study-sections/Section-3-ProjectHighlights/VideoTimestamps.vue'

    const props = defineProps({
        caseStudyInfo: Object
    })

    const youTubeEmbedRef = ref(null);

    const { loadYouTubeApi } = useYouTubeApi()

    onMounted(async () => {
        const YT = await loadYouTubeApi()
        console.log('YouTube Api ready:', YT)
    })

</script>

<style scoped lang="scss">

</style>