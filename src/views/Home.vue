<template>
    <main>
        <h1>Home</h1>

        <HeroSection />
        <AboutSection />
        <FeaturedProjects />
        <ContactMini />
    </main>
</template>

<script setup>
    import HeroSection from '@/components/home-page/HeroSection.vue'
    import AboutSection from '@/components/home-page/AboutSection.vue'
    import SkillsSection from '@/components/home-page/SkillsSection.vue'
    import FeaturedProjects from '@/components/home-page/FeaturedProjects.vue'
    import ContactMini from '@/components/home-page/ContactMini.vue'
</script>

<style scoped lang="scss">
</style>