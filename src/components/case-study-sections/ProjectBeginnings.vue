<template>
    <div class="project-beginning content-con">
        <h2>Project Beginnings</h2>

        <h3>{{ caseStudyInfo.proj_name }}</h3>

        <div class="project-beginning-img-con">
            <img :src="caseStudyInfo.proj_image_link_1" :alt="`Sketch images of ${caseStudyInfo.proj_name}`" class="hidden">
        </div>

        <div class="case-study-lists-con">
            <div class="case-study-list-wrapper" id="project-specs">
                <h4 class="case-study-h4">Project Specs</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="spec in caseStudyInfo.specs"
                        :key="spec.proj_spec_id">
                        <button class="case-study-button"
                            @click="spec.open = !spec.open">
                            {{ spec.proj_spec }}
                            <span class="hidden-text"
                                v-show="spec.open">{{ spec.proj_spec_expanded }}</span>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="case-study-list-wrapper" id="personal-goals">
                <h4 class="case-study-h4">Personal Goals</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="goal in caseStudyInfo.goals"
                        :key="goal.personal_goal_id">
                        <button class="case-study-button"
                            @click="goal.open = !goal.open">
                            {{ goal.personal_goal }}
                            <span class="hidden-text"
                                v-show="goal.open">{{ goal.personal_goal_expanded }}
                            </span>
                        </button>
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