<template>
    <div class="case-study-content-wrapper s-col-span-4 m-col-span-3 l-col-span-4">
        <div class="video-chapters-con">
            <div class="video-chapters-wrapper">
                <h5>Project Highlights for {{ caseStudyInfo.proj_name }}</h5>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="highlight in caseStudyInfo.highlights"
                        :key="highlight.proj_highlight_id">
                        <button class="case-study-button"
                            @click="highlight.open = !highlight.open; youTubeEmbedRef.seekTo(highlight.proj_highlight_start)">
                            {{ highlight.proj_highlight }}
                        </button>
                        
                        <span class="hidden-text"
                            v-show="highlight.open">
                            {{ highlight.proj_highlight_summary }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">
</style>