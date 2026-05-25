<template>
    <div class="breakpoint-con">
        <div class="breakpoint-main">
            <h2>{{ breakPoint }}</h2>
        </div>
        <div class="breakpoint-anim">
            <div class="red-square">

            </div>
            
            <div class="blue-square">

            </div>
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

    .breakpoint-con {
        width: 100%;
        height: 100vh;
        background-color: a.$color1;
    }

    .red-square {
        will-change: transform;
        width: 20vw;
        height: 20vw;
        background-color: red;
    }

    .blue-square {
        will-change: transform;
        width: 10vw;
        height: 10vw;
        background-color: blue;
    }
</style>