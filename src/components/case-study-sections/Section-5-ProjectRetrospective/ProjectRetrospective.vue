<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <LinkButtons />
        <div class="case-study-content-con grid-con">
            <div class="case-study-content-wrapper col-span-full">
                <h4 class="case-study-h4">Success Metrics</h4>
                
                <p>{{ caseStudyInfo.retrospective.proj_retro_summary }}</p>

                <ul class="case-study-list-ul grid-con">
                    <li class="case-study-list-li s-col-span-4 m-col-span-2 l-col-span-4"
                        v-for="metric in caseStudyInfo.metrics"
                        :key="metric.success_metric_id">
                        <a>
                            <span v-html="metric.proj_metric"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
    import LinkButtons from '@/components/case-study-sections/Section-5-ProjectRetrospective/LinkButtons.vue';
    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>