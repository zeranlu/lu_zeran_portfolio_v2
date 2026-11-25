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

        <div class="case-study-content-con grid-con">
            <div class="case-study-content-wrapper col-span-full">

                <h4 class="case-study-h4">Project Inspirations</h4>

                <ul class="case-study-list-ul grid-con">
                    <li class="case-study-list-li col-span-1 m-col-span-2 l-col-span-3"
                        v-for="reference in caseStudyInfo.references"
                        :key="reference.proj_reference_id">
                        <button class="case-study-button"
                            @click="reference.open = !reference.open">
                            {{ reference.proj_reference }}

                            <img :src="reference.proj_reference_thumbnail" :alt="`Reference image 1 for ${reference.proj_reference}`"> 
                        </button>

                        <span class="reference-card-con hidden-text"
                        v-for="detail in reference.details"
                        :key="detail.proj_reference_id"
                        v-show="reference.open">
                            <div class="reference-card-box">
                                {{ detail.proj_reference_link }}
                                
                                {{ detail.proj_reference_explanation }}

                                {{ detail.proj_reference_video_link }}
                            </div>
                        </span>

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