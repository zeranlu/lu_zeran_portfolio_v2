<template>
    <div>
        <PageTransition />
        <Navbar />
        <RouterView />
    </div>
</template>

<script setup>
    import PageTransition from '@/views/PageTransition.vue';
    import Navbar from '@/components/layout/Navbar.vue'
</script>

<style lang="scss">
</style>
