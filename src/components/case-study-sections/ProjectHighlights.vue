<template>
    <div class="project-highlights content-con">
        
        <h2>Project Highlights</h2>

        <div class="case-study-content-con">
            <div class="case-study-content-wrapper">
                <h4 class="case-study-h4">Scroll Through Video of {{ caseStudyInfo.proj_name }}</h4>

                <YouTubeEmbed
                    :youTubeVideoId="caseStudyInfo.proj_video_id"
                    :youTubeTitle="`Youtube video of ${caseStudyInfo.proj_name}`">
                </YouTubeEmbed>
            </div>
        </div>

        <div class="case-study-content-con">
            <div class="case-study-content-wrapper">
                <h4 class="case-study-h4">Project Highlights</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="highlight in caseStudyInfo.highlights"
                        :key="highlight.proj_highlight_id">
                        <button class="case-study-button"
                            @click="highlight.open = !highlight.open">
                            {{ highlight.proj_highlight }}
                        </button>
                        
                        <span class="hidden-text"
                            v-show="highlight.open">
                            {{ highlight.proj_highlight_summary }}
                        </span>
                    </li>
                </ul>
            </div>
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