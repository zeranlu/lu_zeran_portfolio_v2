<template>
    <div class="project-highlights content-con">
        <h2>Project Highlights</h2>

        <h3>{{ caseStudyInfo.project_title }}</h3>

        <YoutubeEmbed
            videoId="2o1rfo1XedA"
            :title="`Youtube video of ${caseStudyInfo.project_title}`">
        </YoutubeEmbed>

    </div>

</template>

<script setup>

    import YoutubeEmbed from '@/components/case-study-sections/case-study-components/YoutubeEmbed.vue'

    defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">
</style>