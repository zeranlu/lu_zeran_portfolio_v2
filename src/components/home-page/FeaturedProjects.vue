<template>
    <section class="projects-section">

        <div class="content-con">
            <h2>Featured Section</h2>
            <p>Check out some of my featured projects! Each card redirects you to either a live link or it's GitHub repository!</p>
        </div>

        <div class="project-card-con">
            <div class="project-card" v-for="project in projects" :key="project.id">
                <a class="project-card-a" :href="project.url" target="_blank" rel="noopener noreferrer">
                    <h3>{{ project.title }}</h3>
                    <p>{{ project.cta }}</p>
                    <img
                        class="project-card-img"
                        :src="project.placeholder"
                        :alt="project.title"
                    />
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
</script>

<style scoped lang="scss">
    @use '@/styles/abstracts' as a;

    .projects-section {
        display: block;
        width: 100%;
    }

    .project-card-con {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 0;
    }

    .project-card {
        position: relative;
        overflow: hidden;
        flex: 0 0 50%;
        aspect-ratio: 1 / 1;

        h3, p {
            transition: all a.$transition;
        }

        img {
            transition: all a.$transition;
            transform: scale(100%);
            filter: brightness(25%);
        }
    }

    .project-card-a:hover {

        h3, p {
            transform: translateX(1rem);
            background-color: a.$color4;
        }

        img {
            filter: brightness(100%);
            transform: a.$scale-up;
        }
    }

    .project-card h3 {
        position: absolute;
        bottom: 20%;
        left: 5%;
        z-index: 2;
        width: 90%;
    }

    .project-card p {
        position: absolute;
        bottom: 10%;
        left: 5%;
        z-index: 2;
        width: 90%;
    }

    .project-card-img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        z-index: 1;
    }

    @media screen and (min-width: 768px) {
        .project-card-con {
            flex-wrap: nowrap;
        }

        .project-card {
            flex: 0 0 25%;
            aspect-ratio: unset;
        }
    }
</style>