<template>
    <div>
        <h1>Case Studies Landing Page</h1>
    </div>
</template>

<script setup>
    import { ref } from 'vue'

    const caseStudies = ref([])

    const isLoading = ref(false)

    const error = ref('')
</script>

<style scoped lang="scss">
</style>