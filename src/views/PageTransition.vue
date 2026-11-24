<template>
    <div ref="panel" class="transition-div">

    </div>
</template>

<script setup>
import { useTemplateRef, nextTick } from 'vue';
import { useRouter } from 'vue-router';

const panel = useTemplateRef('panel');
const router = useRouter();

router.beforeEach((to, from) => {
    if (from.matched.length === 0) return;

    return new Promise((resolve) => {
        panel.value.addEventListener('transitionend', resolve, {once: true});
        panel.value.classList.add('animate-center');
    });
});

router.afterEach((to, from) => {
    if (from.matched.length === 0) return;

    nextTick(() => {
    })
})
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
    z-index: 10;

    transition: a.$transition;
    will-change: transform;

    transform: translateX(-100%);
}

.transition-div.animate-center {
    transform: translateX(0);
}

.transition-div.animate-out {
    transform: translateX(100%)
}
</style>