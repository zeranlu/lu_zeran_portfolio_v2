<template>
    <div class="project-highlights content-con">
        
        <h2>Project Highlights</h2>

        <div class="case-study-content-con project-highlights-con">
            <div class="case-study-content-wrapper project-highlights-wrapper">

                <YouTubeEmbed
                    class="youTubeEmbed-con"
                    ref="youTubeEmbedRef"
                    :youTubeVideoId="caseStudyInfo.proj_video_id"
                    :youTubeTitle="`Youtube video of ${caseStudyInfo.proj_name}`">
                </YouTubeEmbed>

                <div class="video-chapters-con">
                    <div class="video-chapters-wrapper">
                        <h5>Project Highlights for {{ caseStudyInfo.proj_name }}</h5>

                        <ul class="case-study-list-ul">
                            <li class="case-study-list-li"
                                v-for="highlight in caseStudyInfo.highlights"
                                :key="highlight.proj_highlight_id">
                                <button class="case-study-button"
                                    @click="highlight.open = !highlight.open; youTubeEmbedRef.seekTo(highlight.proj_highlight_start)">
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
        </div>
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import { useYouTubeApi } from '@/composables/useYouTubeApi'

    import YouTubeEmbed from '@/components/case-study-sections/case-study-components/YouTubeEmbed.vue'

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

.project-highlights-wrapper {
    display: grid;
    grid-template-columns: 1fr;
}

.video-chapters-con {
    background-color: purple;
    margin: 5%;
}

.video-chapters-wrapper {
    background-color: indigo;
    margin: 5%;
}

@media screen and (min-width: 768px) {
    .project-highlights-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media screen and (min-width: 1024px) {
    .project-highlights-wrapper {
        grid-template-columns: repeat(6, 1fr);
    }

    .youTubeEmbed-con {
        grid-column: span 4;
    }

    .video-chapters-con {
        grid-column: span 2;
    }
}
</style>