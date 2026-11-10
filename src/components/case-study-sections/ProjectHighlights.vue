<template>
    <div class="project-highlights content-con">
        
        <h2>Project Highlights</h2>

        <h3>{{ caseStudyInfo.proj_name }}</h3>

        <YouTubeEmbed
            :youTubeVideoId="caseStudyInfo.proj_video_id"
            :youTubeTitle="`Youtube video of ${caseStudyInfo.proj_name}`">
        </YouTubeEmbed>

        <div class="proj_highlights-con">
            <ul class="proj_highlights-ul">
                <li class="proj-highlights-li"
                    v-for="highlight in caseStudyInfo.highlights"
                    :key="highlight.proj_highlight_id">
                    <button class="proj-highlights-a case-study-button">
                        {{ highlight.proj_highlight }}

                        <p class="hidden-text">
                            {{ highlight.proj_highlight_summary }}
                        </p>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
    import { onMounted } from 'vue'
    import { useYouTubeApi } from '@/composables/useYouTubeApi'

    import YouTubeEmbed from '@/components/case-study-sections/case-study-components/YouTubeEmbed.vue'

    const props = defineProps({
        caseStudyInfo: Object
    })

    const { loadYouTubeApi } = useYouTubeApi()

    onMounted(async () => {
        const YT = await loadYouTubeApi()
        console.log('YouTube Api ready:', YT)
    })
</script>

<style scoped lang="scss">
</style>