<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>
        
        <div class="case-study-content-con grid-list-con">
            <div class="case-study-content-wrapper grid-list-wrapper">
                <h4 class="case-study-h4">Project Specs</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="spec in caseStudyInfo.specs"
                        :key="spec.proj_spec_id">
                        <button class="case-study-button">
                            {{ spec.proj_spec }}
                        </button>
                    </li>

                    <span class="completion-box">
                        <p>{{ specsCompleted }} / {{ totalSpecs }}</p>
                    </span>
                </ul>
            </div>

            <div class="case-study-content-wrapper grid-list-wrapper">
                <h4 class="case-study-h4">Personal Goals</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="goal in caseStudyInfo.goals"
                        :key="goal.personal_goal_id">
                        <button class="case-study-button">
                            {{ goal.personal_goal }}
                        </button>
                    </li>
                    
                    <span class="completion-box">
                        <p>{{ goalsCompleted }} / {{ totalGoals }}</p>
                    </span>
                </ul>
            </div>
        </div>

        <div class="case-study-content-con">
            <div class="case-study-content-wrapper">
                <h4 class="case-study-h4">Project Criticism</h4>

                <ul class="case-study-list-ul">
                    <div>
                        <p>{{ caseStudyInfo.retrospective.proj_personal_review }}</p>
                    </div>

                    <li class="case-study-list-li"
                        v-for="criticism in caseStudyInfo.criticisms"
                        :key="criticism.proj_criticism_id">
                        <button class="case-study-button"
                            @click="criticism.open = !criticism.open">
                            {{ criticism.proj_criticism }}
                        </button>

                        <span class="hidden-text"
                            v-show="criticism.open">
                            {{ criticism.proj_criticism_expanded }}
                        </span>
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