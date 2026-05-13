<template>
    <main>
        <h1 class="hidden">Case Studies Landing Page</h1>
        
        <HeroSection />

        <section class="case-studies-section content-con">
            <h2>Case studies of my projects!</h2>

            
        </section>
    </main>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import HeroSection from '@/components/home-page/HeroSection.vue'

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

    onMounted(() => {
        fetchCaseStudies()
    })
</script>

<style scoped lang="scss">
</style>