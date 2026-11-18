<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <div class="case-study-content-con">
            <div class="case-study-content-wrapper">
                <h4 class="case-study-h4">Project Review</h4>
                
                <p>{{ caseStudyInfo.retrospective.proj_retro_summary }}</p>

                <a :href="caseStudyInfo.retrospective.proj_link_github">View the GitHub Repo Here</a>
                <a :href="caseStudyInfo.retrospective.proj_link_github"
                    v-if="caseStudyInfo.retrospective.proj_link_github">
                    View the GitHub Repo Here
                </a>

                <ul class="case-study-list-ul">
                    <h4 class="case-study-h4">Project Specs</h4>

                    <li class="case-study-list-li"
                        v-for="spec in caseStudyInfo.specs"
                        :key="spec.proj_spec_id">
                        <button class="case-study-button">
                            {{ spec.proj_spec }}
                        </button>
                    </li>

                    <h4 class="case-study-h4">Personal Goals</h4>

                    <li class="case-study-list-li"
                        v-for="goal in caseStudyInfo.goals"
                        :key="goal.personal_goal_id">
                        <button class="case-study-button">
                            {{ goal.personal_goal }}
                        </button>
                    </li>
                    
                    <h4 class="case-study-h4">Success Metrics</h4>
                    
                    <li class="case-study-list-li"
                        v-for="metric in caseStudyInfo.metrics"
                        :key="metric.success_metric_id">
                        <a>
                            <span v-html="metric.proj_metric"></span>
                        </a>
                    </li>

                    <div>
                        <p>{{ goalsCompleted }} / {{ totalGoals }}</p>

                        <p>{{ specsCompleted }} / {{ totalSpecs }}</p>
                    </div>
                </ul>
            </div>

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