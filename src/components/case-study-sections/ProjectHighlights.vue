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

                    <a class="proj-highlights-a">

                        {{ highlight.proj_highlight }}

                        <div>

                            {{ highlight.proj_highlight_summary }}

                            <br>
                            <br>

                            {{ highlight.proj_highlight_start }}

                            <br>
                            <br>

                            {{ highlight.proj_highlight_end }}

                        </div>

                    </a>

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