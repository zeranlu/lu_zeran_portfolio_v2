<template>
    <div class="transition-div">

    </div>
</template>

<script setup>
</script>

<style scoped lang="scss">
@use '@/styles/abstracts' as a;

.transition-div {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: pink;
    z-index: 1000;

    transition: $transition;
    will-change: transform;
}

.transition-div.animate-in {
    transform: translateX(100%)
}

.transition-div.animate-out {
    transform: translateX(200%)
}
</style>