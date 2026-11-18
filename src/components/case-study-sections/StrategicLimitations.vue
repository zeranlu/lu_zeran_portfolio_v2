<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>

        <p>{{ caseStudyInfo.retrospective.proj_retro_summary }}</p>
        
        <div class="case-study-content-wrapper">
            <h4 class="case-study-h4">Success Metrics</h4>

            <ul class="case-study-list-ul">
                <li class="case-study-list-li"
                    v-for="metric in caseStudyInfo.metrics"
                    :key="metric.success_metric_id">
                    <a>
                        <span v-html="metric.proj_metric"></span>
                    </a>
                </li>
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
</template>

<script setup>

    defineProps({
        caseStudyInfo: Object
    })

</script>

<style scoped lang="scss">
</style>