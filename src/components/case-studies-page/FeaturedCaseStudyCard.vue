<template>

    <div class="featured-case-study-card">
        <RouterLink :to="`/case-study/${id}`">
            <h3>{{ title }}</h3>
            <p>{{ desc }}</p>
            <p>{{ prob }}</p>

            <div class="featured-case-study-card-img-con">
                <img class="case-study-img-fg" :src="fgImg" :alt="title">
                <img class="case-study-img-bg" :src="bgImg" alt="">
            </div>

        </RouterLink>
    </div>

</template>

<script setup>

    defineProps({
        title: String,
        desc: String,
        prob: String,
        fgImg: String,
        bgImg: String,
        id: Number
    })
    
</script>
