<template>
    <div class="case-study-content-wrapper s-col-span-4 m-col-span-3 l-col-span-6 grid-con">
        <div class="limitations-specs-wrapper s-col-span-2 m-col-span-3 l-col-span-6">
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

        <div class="limitations-goals-wrapper s-col-span-2 m-col-span-3 l-col-span-6">
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
</style>