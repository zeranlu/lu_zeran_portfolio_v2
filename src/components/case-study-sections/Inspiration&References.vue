<template>
    <div class="inspiration&references content-con">
        <h2>Inspirational References</h2>

        <ul class="reference-counter">
            <li>
                &#9679
            </li>
            <li>
                &#9679
            </li>
            <li>
                &#9679
            </li>
        </ul>

        <p> {{ caseStudyInfo.proj_inspiration }} </p>

        <div class="reference-cards-con">
            
            <div class="reference-card">
                <h4>Reference 1</h4>

                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>

                <img :src="caseStudyInfo.proj_inspiration_img_1" :alt="`Reference image 1 for ${caseStudyInfo.project_title}`">
            </div>

            <div class="reference-card">
                <h4>Reference 2</h4>

                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>

                <img :src="caseStudyInfo.proj_inspiration_img_1" :alt="`Reference image 1 for ${caseStudyInfo.project_title}`">
            </div>

            <div class="reference-card">
                <h4>Reference 3</h4>
                
                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>

                <img :src="caseStudyInfo.proj_inspiration_img_1" :alt="`Reference image 1 for ${caseStudyInfo.project_title}`">
            </div>

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