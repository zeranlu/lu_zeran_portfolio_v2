<template>
    <section class="hero-section content-con">
        <h2 class="hidden">Hero Section</h2>
        
        <div class="hero-section-flex-item">
            <h3>Hello! My name is Zeran Lu</h3>
            <p>I am a front-end developer</p>
        </div>

        <div class="hero-section-flex-item">
            <img src="@/assets/images/me.svg" alt="illustration of me" />
        </div>
    </section>
</template>

<script setup>
</script>

<style scoped lang="scss">

    @use '@/styles/abstracts/' as a;

    .hero-section {
        display: flex;
        flex-direction: column;
    }

    @media screen and (min-width: 768px) {
        .hero-section {
            flex-direction: row;
        }

        .hero-section-flex-item {
            flex: 1;
        }
    }

</style>