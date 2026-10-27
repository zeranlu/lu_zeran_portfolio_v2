<template>
    <div class="project-beginning content-con">
        <h2>Project Beginnings</h2>

        <h3>{{ caseStudyInfo.proj_name }}</h3>

        <div class="project-beginning-imgcon">
            <img :src="caseStudyInfo.proj_image_link_1" :alt="`Sketch images of ${caseStudyInfo.proj_name}`" class="hidden">
        </div>

        <div class="project-beginning-list-con">

            <div class="project-specs">
                <h4>Project Specs</h4>

                <ul class="project-specs-list">

                    <li class="project-specs-li"
                        v-for="spec in caseStudyInfo.specs"
                        :key="spec.proj_spec_id">
                        {{ spec.proj_spec }}

                        <br>
                        <br>

                        {{ spec.proj_spec_expanded }}
                    </li>
                    
                </ul>
            </div>

            <div class="personal-goals">
                <h4>Personal Goals</h4>

                <ul class="personal-goals-list">
                    
                    <li class="personal-goals-li"
                        v-for="goal in caseStudyInfo.goals"
                        :key="goal.personal_goal_id">
                        {{ goal.personal_goal }}

                        <br>
                        <br>

                        {{ goal.personal_goal_expanded }}
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