<template>

    <div class="case-study-card">
        <RouterLink :to="`/case-studies/${id}`">
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
        flex: 0 0 30%;

        img {
            object-fit: contain;
            width: 100%;
        }
    }

    @media screen and (min-width: 768px) {
        .case-study-card {
            flex: 0 0 22.5%;
        }
    }

    @media screen and (min-width: 1024px) {
        .case-study-card {
            flex: 0 0 17.5%;
        }
    }
</style>