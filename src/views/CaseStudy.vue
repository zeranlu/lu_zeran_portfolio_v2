<template>
    <div>
        <h1 class="hidden">Specific Case Study</h1>

        <HeroSection />

        <div v-if="isLoading">
            Loading this case study
        </div>

        <div v-if="error">{{ error }}</div>
        <section class="case-study-section content-con" v-if="!isLoading && !error &&caseStudyInfo">
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import { useRoute } from 'vue-router'
    import HeroSection from '@/components/home-page/HeroSection.vue'

    const caseStudyInfo = ref(null)

    const caseStudyRoute = useRoute()

    const caseStudyId = caseStudyRoute.params.id

    const isLoading = ref (false)

    const error = ref('')

    const getCaseStudyInfo = async () => {

        isLoading.value = true
        
        try {
            // LIVE VERSION
            // const caseStudyInfoResponse = await fetch(`case_study.php?id=${caseStudyId}`)

            // LOCAL VERSION
            const caseStudyInfoResponse = await fetch(`http://localhost/lu_zeran_portfolio_v2/public/case_study.php?id=${caseStudyId}`)

            const caseStudyInfoJSON = await caseStudyInfoResponse.json()

            caseStudyInfo.value = caseStudyInfoJSON.case_study

        } catch (err) {
            console.error('Error during fetch:', err)

            error.value = 'Sorry, could not connect to this case study. Please try again later.'
        } finally {
            isLoading.value = false
        }
    }

    onMounted(() => {
        getCaseStudyInfo()
    })
</script>

<style scoped lang="scss">
</style>