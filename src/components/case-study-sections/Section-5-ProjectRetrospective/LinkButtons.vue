<template>
    <div class="case-study-content-con">
        <div class="case-study-content-wrapper">
            <div class="retro-button-con">
                <a :href="caseStudyInfo.retrospective.proj_link_github"
                    v-if="caseStudyInfo.retrospective.proj_link_github">
                    View the GitHub Repo Here
                </a>

                <a :href="caseStudyInfo.retrospective.proj_link_live"
                    v-if="caseStudyInfo.retrospective.proj_link_live">
                    View the Live Link Here
                </a>
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