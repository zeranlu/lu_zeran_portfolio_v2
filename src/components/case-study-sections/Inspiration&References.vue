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

        <div class="case-study-content-con" id="references-lists-con">
            <div class="case-study-content-wrapper" id="references-list-wrapper">

                <h4 class="case-study-h4">Project Inspirations</h4>

                <ul class="case-study-list-ul" id="references-list-ul">
                    <li class="case-study-list-li" id="references-list-li"
                        v-for="reference in caseStudyInfo.references"
                        :key="reference.proj_reference_id">
                        <button class="case-study-button"
                            @click="reference.open = !reference.open">
                            {{ reference.proj_reference }}

                            <img :src="reference.proj_reference_thumbnail" :alt="`Reference image 1 for ${reference.proj_reference}`"> 

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
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 5%;
        grid-column: 1 / -1;
    }

    .reference-card-con {
        background-color: magenta;
        margin: 5%;
    }

    .reference-card-box {
        background-color: pink;
        margin: 5%;
        display: flex;
    }

    @media (min-width: 768px) {
        #references-list-ul {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (min-width: 1024px) {
        #references-list-ul {
            grid-template-columns: repeat(4, 1fr);
        }
    }

</style>