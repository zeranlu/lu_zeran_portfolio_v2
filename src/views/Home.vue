<template>
    <main>
        <h1 class="hidden">Home</h1>

        <HeroSection />
        <AboutSection />
        <FeaturedProjects />
    </main>
</template>

<script setup>
    import HeroSection from '@/components/home-page/HeroSection.vue'
    import AboutSection from '@/components/home-page/AboutSection.vue'
    import FeaturedProjects from '@/components/home-page/FeaturedProjects.vue'
</script>

<style scoped lang="scss">
</style>