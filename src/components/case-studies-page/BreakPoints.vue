<template>
    <div class="breakpoint-con">
        <div class="breakpoint-main">
            <h2>{{ breakPoint }}</h2>
        </div>
    </div>
</template>

<script setup>
    import { onMounted } from 'vue'
    import { useBreakPointAnimation } from '@/composables/useBreakPointAnimation'

    defineProps({
        breakPoint: String
    })

    const { runBreakPointAnimation } = useBreakPointAnimation()

    onMounted(() => {
        runBreakPointAnimation()
    })
</script>

<style scoped lang="scss">
    @use '../../styles/abstracts' as a;

    .breakpoint-main {
        width: 100%;
        height: 100vh;
        background-color: black;
    }
</style>