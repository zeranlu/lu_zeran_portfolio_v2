<template>
    <div class="project-beginning content-con">
        <h2>Project Beginnings</h2>

        <h3>{{ caseStudyInfo.project_title }}</h3>

        <div class="project-beginning-imgcon">
            <img :src="caseStudyInfo.proj_image_link_1" :alt="`Sketch images of ${caseStudyInfo.project_title}`">
        </div>

        <div class="project-beginning-list-con">

            <div class="project-specs">
                <ul class="project-specs-list">
                    <li class="project-specs-li">
                        {{ caseStudyInfo.project_desc }}
                    </li>
                    <li class="project-specs-li">
                        {{ caseStudyInfo.project_desc }}
                    </li>
                    <li class="project-specs-li">
                        {{ caseStudyInfo.project_desc }}
                    </li>
                </ul>
            </div>

            <div class="personal-goals">
                <ul class="personal-goals-list">
                    <li class="personal-goals-li">
                        {{ caseStudyInfo.project_desc }}
                    </li>
                    <li class="personal-goals-li">
                        {{ caseStudyInfo.project_desc }}
                    </li>
                    <li class="personal-goals-li">
                        {{ caseStudyInfo.project_desc }}
                    </li>
                </ul>
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