<template>

    <div class="case-study-card">
        <RouterLink :to="`/case-study/${id}`">
            <h3>{{ title }}</h3>
            <p>{{ desc }}</p>
            <img :src="thumbnail" :alt="title">
        </RouterLink>
    </div>

</template>

<script setup>

    defineProps({
        title: String,
        desc: String,
        thumbnail: String,
        id: Number
    })
    
</script>

<style scoped lang="scss">
    @use '../../styles/abstracts' as a;

    
    .case-study-card {
        flex: 0 0 15%;
        max-width: 20vw;
        padding: 1rem;

        img {
            object-fit: contain;
            width: 100%;
        }
    }
</style>