<template>
    <div class="case-study-content-con grid-con">
        <div class="case-study-content-wrapper col-span-full m-col-span-3 l-col-span-6">
            <h4 class="case-study-h4">Project Specs</h4>

            <ul class="case-study-list-ul">
                <li class="case-study-list-li"
                    v-for="spec in caseStudyInfo.specs"
                    :key="spec.proj_spec_id">
                    <button class="case-study-button"
                        @click="spec.open = !spec.open">
                        {{ spec.proj_spec }}
                    </button>
                    
                    <span class="hidden-text"
                        v-show="spec.open">{{ spec.proj_spec_expanded }}
                    </span>
                </li>
            </ul>
        </div>

        <div class="case-study-content-wrapper col-span-full m-col-span-3 l-col-span-6">
            <h4 class="case-study-h4">Personal Goals</h4>

            <ul class="case-study-list-ul">
                <li class="case-study-list-li"
                    v-for="goal in caseStudyInfo.goals"
                    :key="goal.personal_goal_id">
                    <button class="case-study-button"
                        @click="goal.open = !goal.open">
                        {{ goal.personal_goal }}
                    </button>

                    <span class="hidden-text"
                        v-show="goal.open">{{ goal.personal_goal_expanded }}
                    </span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped>
</style>