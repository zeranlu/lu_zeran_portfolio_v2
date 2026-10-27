<template>
    
    <div class="project-highlights content-con">
        <h2>Project Highlights</h2>

        <h3>{{ caseStudyInfo.project_name }}</h3>

        <YouTubeEmbed
            youTubeVideoId="2o1rfo1XedA"
            :youTubeTitle="`Youtube video of ${caseStudyInfo.project_name}`">
        </YouTubeEmbed>

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