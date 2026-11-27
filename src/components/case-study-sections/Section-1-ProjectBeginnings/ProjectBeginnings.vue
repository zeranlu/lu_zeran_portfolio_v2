<template>
    <div class="project-beginning content-con">
        <h2>Project Beginnings</h2>

        <h3>{{ caseStudyInfo.proj_name }}</h3>

        <div class="project-beginning-img-con">
            <img :src="caseStudyInfo.proj_image_link_1" :alt="`Sketch images of ${caseStudyInfo.proj_name}`" class="hidden">
        </div>

        <SpecsGoalsLists :caseStudyInfo="caseStudyInfo" />
    </div>

</template>

<script setup>
    import SpecsGoalsLists from '@/components/case-study-sections/Section-1-ProjectBeginnings/SpecsGoalsLists.vue'

    defineProps({
        caseStudyInfo: Object
    })

</script>

<style scoped lang="scss">

</style>