<template>
    <div>
        <h1 class="hidden">Specific Case Study</h1>

        <HeroSection />

        <div v-if="isLoading">
            Loading this case study
        </div>

        <div v-if="error">{{ error }}</div>

        <section class="case-study-section" v-if="!isLoading && !error &&caseStudyInfo">

            <div class="content-con">
                <h2>This is a case study of {{ caseStudyInfo.project_title }}</h2>

                <p>{{ caseStudyInfo.project_desc }}</p>

                <img class="case-study-img" :src="caseStudyInfo.proj_image_link_1" :alt="`${caseStudyInfo.project_title} final result`">
            </div>

            <div class="content-con">
                <p>This project was inspired by: {{ caseStudyInfo.proj_reference_link }}</p>

                <p>{{ caseStudyInfo.proj_reference_explanation }}</p>
            </div>

            <div class="content-con">
                <p>{{ caseStudyInfo.proj_problem }}</p>
                
                <img class="case-study-img" :src="caseStudyInfo.proj_image_link_2" :alt="`picture of ${caseStudyInfo.project_title} problem`">
            </div>

            <div class="content-con">
                <p>{{ caseStudyInfo.proj_solution }}</p>

                <img class="case-study-img" :src="caseStudyInfo.proj_image_link_3" :alt="`picture of ${caseStudyInfo.project_title}'s solution`">
            </div>

            <div class="content-con">
                <p>{{ caseStudyInfo.proj_result }}</p>
            </div>
            
        </section>
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