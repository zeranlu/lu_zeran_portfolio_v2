<template>
    <div class="inspiration&references content-con">
        <h2>Inspirational References</h2>

        <ul class="reference-counter">

            <li class="project-reference-li"
                v-for="reference in caseStudyInfo.references"
                :key="reference.case_study_id">
                
                {{ reference.proj_reference }}

                <br>
                <br>

            </li>

        </ul>

        <p> {{ caseStudyInfo.proj_inspiration }} </p>

        <div class="reference-cards-con">
            
            <div class="reference-card">
                <h4>Reference 1</h4>

                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>

                <img :src="caseStudyInfo.proj_inspiration_img_1" :alt="`Reference image 1 for ${caseStudyInfo.proj_name}`">
            </div>

            <div class="reference-card">
                <h4>Reference 2</h4>

                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>

                <img :src="caseStudyInfo.proj_inspiration_img_1" :alt="`Reference image 1 for ${caseStudyInfo.proj_name}`">
            </div>

            <div class="reference-card">
                <h4>Reference 3</h4>
                
                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>

                <img :src="caseStudyInfo.proj_inspiration_img_1" :alt="`Reference image 1 for ${caseStudyInfo.proj_name}`">
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