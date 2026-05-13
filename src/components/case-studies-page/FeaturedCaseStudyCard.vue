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

<style scoped lang="scss">

    @use '../../styles/abstracts' as a;
    
    .featured-case-study-card {
        flex: 0 0 33%;
        width: 20vw;
    }

    .featured-case-study-card-img-con {
        position: relative;

        img {
            width: 80%;
            transition: transform a.$transition;
        }

        .case-study-img-fg {
            position: absolute;
            top: 0;
            left: 0;
        }

        .case-study-img-bg {
            position: relative;
            bottom: 0;
            right: 0;
        }
    }

    
    .featured-case-study-card:hover {
        .case-study-img-fg {
            transform: translate(-1%, -1%);
        }

        .case-study-img-bg {
            transform: translate(1%, 1%);
        }
    }
</style>