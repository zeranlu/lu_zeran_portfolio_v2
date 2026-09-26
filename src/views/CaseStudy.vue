<template>
    <div>
        <h1 class="hidden">Specific Case Study</h1>

        <div v-if="isLoading">
            Loading this case study
        </div>

        <div v-if="error">{{ error }}</div>

        <section class="case-study-section" v-if="!isLoading && !error &&caseStudyInfo">

            <BreakPoints :breakPoint="breakPoints[0]" />

            <div class="parallax-con">
                <ProjectBeginnings :caseStudyInfo="caseStudyInfo" />
            </div>

            <BreakPoints :breakPoint="breakPoints[1]" />

            <div class="parallax-con">
                <InspirationAndReferences :caseStudyInfo="caseStudyInfo" />
            </div>

            <BreakPoints :breakPoint="breakPoints[2]" />
            
            <div class="parallax-con">
                <StrategicLimitations :caseStudyInfo="caseStudyInfo" />
            </div>

            <BreakPoints :breakPoint="breakPoints[3]" />

            <div class="parallax-con">
                <ProjectRetrospective :caseStudyInfo="caseStudyInfo" />
            </div>

            <BreakPoints :breakPoint="breakPoints[5]" />

        </section>
    </div>
</template>

<script setup>
    import { ref, onMounted, nextTick, watch, computed } from 'vue'
    import { useRoute } from 'vue-router'
    import BreakPoints from '@/components/case-studies-page/BreakPoints.vue'
    import { useParallax } from '@/composables/useParallax'

    // IMPORTING CASE STUDY COMPONENTS
    import ProjectBeginnings from '@/components/case-study-components/ProjectBeginnings.vue'
    import InspirationAndReferences from '@/components/case-study-components/Inspiration&References.vue'
    import StrategicLimitations from '@/components/case-study-components/StrategicLimitations.vue'
    import ProjectRetrospective from '@/components/case-study-components/ProjectRetrospective.vue'


    const caseStudyInfo = ref(null)

    const caseStudyRoute = useRoute()

    const caseStudyId = computed(() => caseStudyRoute.params.id)

    watch(caseStudyId, async () => {
        await getCaseStudyInfo()
    })

    const isLoading = ref (false)

    const error = ref('')

    const { runParallax } = useParallax()

    const breakPoints = [
        'Project Beginnings',
        'Inspirational References',
        'The Problem',
        'The Solution',
        'The Final Product',
        'Project Retrospectives'
    ]

    const getCaseStudyInfo = async () => {

        isLoading.value = true
        
        try {
            // LIVE VERSION
            // const caseStudyInfoResponse = await fetch(`case_study.php?id=${caseStudyId.value}`)

            // LOCAL VERSION
            const caseStudyInfoResponse = await fetch(`http://localhost/lu_zeran_portfolio_v2/public/case_study.php?id=${caseStudyId.value}`)

            const caseStudyInfoJSON = await caseStudyInfoResponse.json()

            caseStudyInfo.value = caseStudyInfoJSON.case_study

            isLoading.value = false

            await nextTick()
            runParallax()

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

<style lang="scss">
    @use "../styles/abstracts" as a;

    .parallax-con {
        will-change: transform;
    }
    
    .case-study-img-con {
        width: 80%;
        margin: auto;
    }

    .case-study-img {
        object-fit: contain;
        width: 100%;
    }
</style>