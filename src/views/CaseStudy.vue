<template>
    <div>
        <h1 class="hidden">Specific Case Study</h1>

        <HeroSection />
    </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import HeroSection from '@/components/home-page/HeroSection.vue'

    const caseStudyInfo = ref(null)

    const caseStudyId = route.params.id

    const isLoading = ref (false)

    const error = ref('')
</script>

<style scoped lang="scss">
</style>