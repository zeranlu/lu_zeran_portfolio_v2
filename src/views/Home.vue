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
    import HeroSection from '@/components/HeroSection.vue'
    import AboutSection from '@/components/AboutSection.vue'
    import SkillsSection from '@/components/SkillsSection.vue'
    import FeaturedProjects from '@/components/FeaturedProjects.vue'
    import ContactMini from '@/components/ContactMini.vue'
</script>

<style scoped lang="scss">
</style>