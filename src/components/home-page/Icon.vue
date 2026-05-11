<template>
    <div class="skills-icon">
        <img :src="icon" :alt="name" />
        <p>{{ name }}</p>
    </div>
</template>

<script setup>
    defineProps({
        name: String,
        icon: String
    })
</script>

<style scoped lang="scss">
</style>