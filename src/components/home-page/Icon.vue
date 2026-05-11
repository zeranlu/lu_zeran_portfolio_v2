<template>
    <div class="skills-item">
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
    .skills-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>