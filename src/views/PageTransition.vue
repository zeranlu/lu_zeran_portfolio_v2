<template>
    <div class="transition-div">

    </div>
</template>

<script setup>
const main = document.querySelector('main');
const links = [...document.querySelectorAll('a')];
const transitionDiv = document.querySelector('transition-div');

links.forEach(link => {
    link.addEventListener('click', async e => {
        e.preventDefault();
        const url = e.target.href;

        startTransition(url);
    })
})

const startTransition = async (url) => {
    const html = await fetch(url);
    const htmlString = await html.text();
    const parser = new DOMParser();
    const parsedHTML = parser.parseFromString(htmlString, 'text/html').querySelector('main');

    main.classList.add('transition-hidden');

    main.addEventListener('transitionend', () => {
        main.innerHTML = parsedHTML.innerHTML;

        main.classList.remove('transition-hidden');
    }, {once: true});
}
</script>

<style scoped lang="scss">
@use '@/styles/abstracts' as a;

.transition-hidden {
    opacity: 0;
}

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
}

.transition-div.animate-in {
    transform: translateX(100%)
}

.transition-div.animate-out {
    transform: translateX(200%)
}
</style>