<template>
    <div class="project-retrospective content-con">

        <h2>Project Retrospective</h2>

        <p>{{ caseStudyInfo.retrospective.proj_retro_summary }}</p>

        <div class="project-retrospective-lists">

            <div class="project-retro-list-con">
                
                <h3>Success Metrics</h3>
                
                <ul class="project-retro-list-ul">

                    <li class="project-retro-list-li"
                        v-for="metric in caseStudyInfo.metrics"
                        :key="metric.success_metric_id">

                        <a>
                            
                            {{ metric.proj_metric }}
                            
                        </a>

                    </li>
                    
                </ul>

            </div>

            <div class="project-retro-list-con">
                
                <h3>Project Criticism</h3>
                
                <ul class="project-retro-list-ul">

                    <li class="project-retro-list-li"
                        v-for="criticism in caseStudyInfo.criticisms"
                        :key="criticism.proj_criticism_id">

                        <a>
                            
                            {{ criticism.proj_criticism }}
                            
                        </a>

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