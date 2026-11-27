<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <LinkButtons :caseStudyInfo="caseStudyInfo" />

        <SuccessMetrics />
    </div>
</template>

<script setup>
    import LinkButtons from '@/components/case-study-sections/Section-5-ProjectRetrospective/LinkButtons.vue';
    import SuccessMetrics from '@/components/case-study-sections/Section-5-ProjectRetrospective/SuccessMetrics.vue';

    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>