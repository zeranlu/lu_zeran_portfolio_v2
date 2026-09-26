<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <p>{{ caseStudyInfo.proj_result }}</p>

        <div class="project-retrospective-list-con">

            <div class="project-specs-retro">
                
                <h4>Project Specs</h4>

                <p>5/5</p>

                <h4>Success Metrics</h4>
                
                <ul>

                    <li>
                        <a>Metric #1</a>

                        <p class="metric-explanation hidden">Description for Metric #1, expanded information upon clicking on the metric. Highlight the whole text box and contrast the text colours with the background.</p>
                    </li>
                     <li>
                        <a>Metric #2</a>

                        <p class="metric-explanation hidden">Description for Metric #2, expanded information upon clicking on the metric. Highlight the whole text box and contrast the text colours with the background.</p>
                    </li>
                     <li>
                        <a>Metric #3</a>

                        <p class="metric-explanation hidden">Description for Metric #3, expanded information upon clicking on the metric. Highlight the whole text box and contrast the text colours with the background.</p>
                    </li>
                    
                </ul>

                <p>Summary of project success and triumphs. Overall satisfaction with the project and general reflection.</p>

            </div>

            <div class="personal-goals-retro">

                <h4>Personal Goals</h4>

                <p>5/5</p>

                <h4>Success Metrics</h4>

                <ul>

                    <li>
                        <a>Metric #1</a>

                        <p class="metric-explanation hidden">Description for Metric #1, expanded information upon clicking on the metric. Highlight the whole text box and contrast the text colours with the background.</p>
                    </li>
                     <li>
                        <a>Metric #2</a>

                        <p class="metric-explanation hidden">Description for Metric #2, expanded information upon clicking on the metric. Highlight the whole text box and contrast the text colours with the background.</p>
                    </li>
                     <li>
                        <a>Metric #3</a>

                        <p class="metric-explanation hidden">Description for Metric #3, expanded information upon clicking on the metric. Highlight the whole text box and contrast the text colours with the background.</p>
                    </li>
                    
                </ul>

                <p>Summary of project success and triumphs. Overall satisfaction with the project and general reflection.</p>

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