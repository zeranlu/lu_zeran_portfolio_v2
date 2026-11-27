<template>
    <div class="strategic-limitations content-con">

        <h2>Strategic Limitations</h2>
        
        <div class="case-study-content-con grid-con">
            <CompactLists :caseStudyInfo="caseStudyInfo" />

            <CriticismsList />
        </div>
    </div>
</template>

<script setup>
    import CompactLists from '@/components/case-study-sections/Section-4-StrategicLimitations/CompactLists.vue';
    import CriticismsList from '@/components/case-study-sections/Section-4-StrategicLimitations/CriticismsList.vue';

    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>