<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>

        <p> {{ caseStudyInfo.proj_problem }} </p>

        <ul class="limitation-list">

            <h3>Isolated Problems</h3>

            <li>
                <h4> {{ caseStudyInfo.proj_problem }} </h4>

                <div class="case-study-img-con">
                    <img class="case-study-img" :src="caseStudyInfo.proj_image_link_2" :alt="`picture of ${caseStudyInfo.project_title} problem`">
                </div>

                <p>{{ caseStudyInfo.proj_solution }}</p>

                <div class="case-study-img-con">
                    <img class="case-study-img" :src="caseStudyInfo.proj_image_link_3" :alt="`picture of ${caseStudyInfo.project_title}'s solution`">
                </div>
            </li>

            <li>
                <h4> {{ caseStudyInfo.proj_problem }} </h4>

                <div class="case-study-img-con">
                    <img class="case-study-img" :src="caseStudyInfo.proj_image_link_2" :alt="`picture of ${caseStudyInfo.project_title} problem`">
                </div>

                <p>{{ caseStudyInfo.proj_solution }}</p>

                <div class="case-study-img-con">
                    <img class="case-study-img" :src="caseStudyInfo.proj_image_link_3" :alt="`picture of ${caseStudyInfo.project_title}'s solution`">
                </div>
            </li>

            <li>
                <h4> {{ caseStudyInfo.proj_problem }} </h4>

                <div class="case-study-img-con">
                    <img class="case-study-img" :src="caseStudyInfo.proj_image_link_2" :alt="`picture of ${caseStudyInfo.project_title} problem`">
                </div>

                <p>{{ caseStudyInfo.proj_solution }}</p>

                <div class="case-study-img-con">
                    <img class="case-study-img" :src="caseStudyInfo.proj_image_link_3" :alt="`picture of ${caseStudyInfo.project_title}'s solution`">
                </div>
            </li>

        </ul>

    </div>
</template>

<script setup>
    defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">
</style>