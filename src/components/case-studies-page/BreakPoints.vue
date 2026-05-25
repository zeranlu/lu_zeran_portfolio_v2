<template>
    <div class="parallax-con">
        <h2>{{ breakPoint }}</h2>
    </div>
</template>

<script setup>
    const breakPointsProps = defineProps({
        breakPoint: String
    })

    const breakPoints = [
        'Project Beginnings',
        'Inspirational References',
        'The Problem',
        'The Solution',
        'The Final Product',
        'Project Retrospectives'
    ]
</script>

<style scoped lang="scss">
</style>