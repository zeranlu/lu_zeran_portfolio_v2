<template>
    <main>
        <h1 class="hidden">Case Studies Landing Page</h1>
        
        <HeroSection />

        <div v-if="isLoading">
            Loading case studies
        </div>

        <div v-if="error">{{ error }}</div>
        
        <section class="case-studies-section content-con" v-if="!isLoading && !error">
            <h2>Case studies of my projects!</h2>

            <div class="featured-case-studies">
                <FeaturedCaseStudyCard
                    v-for="caseStudy in caseStudies.filter(s => s.proj_featured == 1)"
                    :key="caseStudy.case_study_id"
                    :id="caseStudy.case_study_id"
                    :title="caseStudy.project_title"
                    :desc="caseStudy.project_desc"
                    :prob="caseStudy.proj_problem"
                    :fgImg="caseStudy.proj_image_link_1"
                    :bgImg="caseStudy.proj_image_link_2"
                />
            </div>

            <div class="all-case-studies">
                <CaseStudyCard
                    v-for="caseStudy in caseStudies"
                    :key="caseStudy.case_study_id"
                    :id="caseStudy.case_study_id"
                    :title="caseStudy.project_title"
                    :desc="caseStudy.project_desc"
                    :thumbnail="caseStudy.proj_image_link_1"
                />
            </div>
        </section>
    </main>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import HeroSection from '@/components/home-page/HeroSection.vue'
    import FeaturedCaseStudyCard from '@/components/case-studies-page/FeaturedCaseStudyCard.vue'
    import CaseStudyCard from '@/components/case-studies-page/CaseStudyCard.vue'

    const caseStudies = ref([])

    const isLoading = ref(false)

    const error = ref('')

    const fetchCaseStudies = async () => {

        isLoading.value = true

        try {
            // LIVE VERSION
            // const caseStudyList = await fetch('case_studies.php')

            // LOCAL VERSION
            const caseStudyList = await fetch('http://localhost/lu_zeran_portfolio_v2/public/case_studies.php')

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
    @use '../styles/abstracts' as a;

    .featured-case-studies, .all-case-studies {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }
    
</style>