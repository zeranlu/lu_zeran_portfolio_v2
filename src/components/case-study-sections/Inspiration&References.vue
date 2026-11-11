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

        <div class="case-study-lists-con" id="references-lists-con">
            <div class="case-study-list-wrapper" id="references-list-wrapper">

                <h4 class="case-study-h4">Project Inspirations</h4>

                <ul class="case-study-list-ul" id="references-list-ul">
                    <li class="case-study-list-li" id="references-list-li"
                        v-for="reference in caseStudyInfo.references"
                        :key="reference.proj_reference_id">
                        <button class="case-study-button"
                            @click="reference.open = !reference.open">
                            {{ reference.proj_reference }}

                            <img :src="reference.proj_reference_thumbnail" :alt="`Reference image 1 for ${reference.proj_reference}`"> 

                            <span class="hidden-text"
                            v-for="detail in reference.details"
                            :key="detail.proj_reference_id"
                            v-show="reference.open">

                                {{ detail.
                                proj_reference_link }}

                                {{ detail.proj_reference_explanation }}

                                {{ detail.proj_reference_video_link }}
                            </span>

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

    #references-lists-con {
        grid-template-columns: repeat(1, 1fr);
    }

    #references-list-ul {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 5%;
        grid-column: 1 / -1;
    }

</style>