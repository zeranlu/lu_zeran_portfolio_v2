<template>
    <div class="skills-item">
        <Icon :icon="icon" width="60" height="60" />
        <p>{{ name }}</p>
    </div>
</template>

<script setup>
    import { Icon } from '@iconify/vue'

    defineProps({
        name: String,
        icon: Object
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