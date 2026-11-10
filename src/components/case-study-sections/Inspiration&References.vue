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

        <div class="reference-cards-con">
            <ul class="reference-card-list">
                <li class="reference-card-li"
                    v-for="reference in caseStudyInfo.references"
                    :key="reference.proj_reference_id">
                    <button class="reference-card-a case-study-button">
                        {{ reference.proj_reference }}

                        <img :src="reference.proj_reference_thumbnail" :alt="`Reference image 1 for ${reference.proj_reference}`">
                    </button>

                    <div
                        v-for="detail in reference.details"
                        :key="detail.proj_reference_id">
                        {{ detail.proj_reference_link }}

                        {{ detail.proj_reference_explanation }}

                        {{ detail.proj_reference_video_link }}
                    </div>
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