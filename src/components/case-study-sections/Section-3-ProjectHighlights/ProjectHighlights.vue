<template>
    <div class="project-highlights content-con">
        <h2>Project Highlights</h2>

        <VideoTimestamps :caseStudyInfo="caseStudyInfo" />
    </div>
</template>

<script setup>
    import VideoTimestamps from '@/components/case-study-sections/Section-3-ProjectHighlights/VideoTimestamps.vue'

    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>