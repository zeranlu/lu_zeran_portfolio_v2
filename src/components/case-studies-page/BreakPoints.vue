<template>
    <div class="parallax-con">
        <h2>{{ breakPoint }}</h2>
    </div>
</template>

<script setup>
    const breakPointsProps = defineProps({
        breakPoint: String
    })
</script>

<style scoped lang="scss">
</style>