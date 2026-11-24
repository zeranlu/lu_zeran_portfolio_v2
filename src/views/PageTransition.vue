<template>
    <div ref="panel" class="transition-div">

    </div>
</template>

<script setup>
import { useTemplateRef } from 'vue';
import { START_LOCATION, useRouter } from 'vue-router';

const panel = useTemplateRef('panel');
const router = useRouter();

router.beforeEach((to, from) => {
    if (from === START_LOCATION) return;
    return new Promise((resolve) => {
    });
});
// const main = document.querySelector('main');
// const links = [...document.querySelectorAll('a')];
// const transitionDiv = document.querySelector('.transition-div');

// links.forEach(link => {
//     link.addEventListener('click', async e => {
//         e.preventDefault();
//         const url = e.target.href;

//         startTransition(url);
//     })
// })

// const startTransition = async (url) => {
//     const html = await fetch(url);
//     const htmlString = await html.text();
//     const parser = new DOMParser();
//     const parsedHTML = parser.parseFromString(htmlString, 'text/html').querySelector('main');

//     main.classList.add('transition-hidden');

//     main.addEventListener('transitionend', () => {
//         main.innerHTML = parsedHTML.innerHTML;

//         main.classList.remove('transition-hidden');
//     }, {once: true});
// }
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