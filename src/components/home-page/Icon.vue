<template>
    <div class="skills-icon">
        <img :src="iconPath" :alt="skillName" />
        <p>{{ skillName }}</p>
    </div>
</template>

<script setup>
    defineProps({
        skillName: String,
        iconPath: String
    })
</script>

<style scoped lang="scss">
</style>