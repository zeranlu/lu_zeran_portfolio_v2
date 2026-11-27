<template>
    <div class="inspiration-references content-con">

        <h2>Inspirational References</h2>

        <div class="reference-counter-con">
            <ul class="reference-counter">
                <li class="reference-counter-li"
                    v-for="reference in caseStudyInfo.references"
                    :key="reference.proj_reference_id">
                    <button class="case-study-button">
                        {{ reference.proj_reference_id }}
                    </button>
                </li>
            </ul>
        </div>

        <ReferenceContainer :caseStudyInfo="caseStudyInfo" />
    </div>
</template>

<script setup>
    import ReferenceContainer from '@/components/case-study-sections/Section-2-Inspiration&References/ReferenceContainer.vue';

    defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

</style>