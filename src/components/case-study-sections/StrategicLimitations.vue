<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>
        
        <div class="case-study-content-con grid-list-con grid-list-con-thirds">
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

            <div class="case-study-content-wrapper grid-list-wrapper">
                <h4 class="case-study-h4">Project Criticism</h4>
                
                <div>
                    <p>{{ caseStudyInfo.retrospective.proj_personal_review }}</p>
                </div>
                    
                <ul class="case-study-list-ul">
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
    import { computed } from 'vue'

    const props = defineProps({
        caseStudyInfo: Object
    })

    const goalsCompleted = computed(() => {
        return props.caseStudyInfo.goals.filter((goal) => Number(goal.personal_goal_completed) === 1).length
    })

    const totalGoals = computed(() => {
        return props.caseStudyInfo.goals.length
    })

    const specsCompleted = computed(() => {
        return props.caseStudyInfo.specs.filter((spec) => Number(spec.proj_spec_completed) === 1).length
    })

    const totalSpecs = computed(() => {
        return props.caseStudyInfo.specs.length
    })
</script>

<style scoped lang="scss">

    .grid-list-con-thirds {
        grid-template-columns: 1fr 1fr 1fr;
    }

</style>