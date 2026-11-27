<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <LinkButtons :caseStudyInfo="caseStudyInfo" />


    </div>
</template>

<script setup>
    import LinkButtons from '@/components/case-study-sections/Section-5-ProjectRetrospective/LinkButtons.vue';
    
    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>