<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <a :href="caseStudyInfo.retrospective.proj_link_github"
            v-if="caseStudyInfo.retrospective.proj_link_github">
            View the GitHub Repo Here
        </a>

        <a :href="caseStudyInfo.retrospective.proj_link_live"
            v-if="caseStudyInfo.retrospective.proj_link_live">
            View the Live Link Here
        </a>

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