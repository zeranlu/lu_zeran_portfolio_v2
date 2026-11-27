<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>
        
        <div class="case-study-content-con grid-con">
            <CompactLists />

            <div class="case-study-content-wrapper s-col-span-4 m-col-span-3 l-col-span-6">
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
    import CompactLists from '@/components/case-study-sections/Section-4-StrategicLimitations/CompactLists.vue';

    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>