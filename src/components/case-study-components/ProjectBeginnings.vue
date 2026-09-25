<template>
    <div class="project-beginning">
        <h2>Project Beginnings</h2>

        <h3>{{ caseStudyInfo.project_title }}</h3>

        <div class="project-beginning-imgcon">
            <p>images goes here</p>
        </div>

        <div class="project-beginning-list-con">

            <div class="project-specs">
                <ul class="project-specs-list">
                    <li class="project-specs-li">
                        Project Spec 1
                    </li>
                    <li class="project-specs-li">
                        Project Spec 2
                    </li>
                    <li class="project-specs-li">
                        Project Spec 3
                    </li>
                </ul>
            </div>

            <div class="personal-goals">
                <ul class="personal-goals-list">
                    <li class="personal-goals-li">
                        Personal Goal 1
                    </li>
                    <li class="personal-goals-li">
                        Personal Goal 2
                    </li>
                    <li class="personal-goals-li">
                        Personal Goal 3
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