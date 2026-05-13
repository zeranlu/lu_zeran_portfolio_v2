<template>
    <div>
        <h1 class="hidden">Case Studies Landing Page</h1>
    </div>
</template>

<script setup>
    import { ref } from 'vue'

    const caseStudies = ref([])

    const isLoading = ref(false)

    const error = ref('')

    const fetchCaseStudies = async () => {

        isLoading.value = true

        try {
            const caseStudyList = await fetch('case_studies.php')

            const caseStudyListJSON = await caseStudyList.json()

            caseStudies.value = caseStudyListJSON.case_studies
        } catch (err) {
            console.error('Error during fetch:', err)
            error.value = 'Sorry, something went wrong. Please try again later.'
        } finally {
            isLoading.value = false
        }
    }
</script>

<style scoped lang="scss">
</style>