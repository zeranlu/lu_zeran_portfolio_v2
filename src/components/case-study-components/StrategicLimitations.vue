<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>

        <p> {{ caseStudyInfo.proj_problem }} </p>

        <div class="case-study-img-con">
            <img class="case-study-img" :src="caseStudyInfo.proj_image_link_2" :alt="`picture of ${caseStudyInfo.project_title} problem`">
        </div>
    </div>
</template>

<script setup>
    defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">
</style>