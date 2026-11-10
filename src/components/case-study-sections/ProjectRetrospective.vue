<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <p>{{ caseStudyInfo.retrospective.proj_retro_summary }}</p>

        <div class="case-study-lists-con">
            <div class="case-study-list-wrapper">
                <h4 class="case-study-h4">Success Metrics</h4>
                
                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="metric in caseStudyInfo.metrics"
                        :key="metric.success_metric_id">
                        <a>
                            <span v-html="metric.proj_metric"></span>
                            <p class="hidden-text">{{ metric.proj_metric_expanded }}</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="case-study-list-wrapper">
                <h4 class="case-study-h4">Project Criticism</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="criticism in caseStudyInfo.criticisms"
                        :key="criticism.proj_criticism_id">
                        <button class="case-study-button">
                            {{ criticism.proj_criticism }}
                            <p class="hidden-text">{{ criticism.proj_criticism_expanded }}</p>
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