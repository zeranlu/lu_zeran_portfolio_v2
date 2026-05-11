<template>
    <section>
        <h2 class="hidden">Skills Section</h2>

        <div class="skills-con">
            <SkillIcon class="skills-item"
                v-for="skill in skillsIcons"
                :key="skill.name"
                :name="skill.name"
                :icon="skill.icon"
            />
        </div>
    </section>
</template>

<script setup>
    // Import Component
    import SkillIcon from '@/components/home-page/SkillIcon.vue'

    // Import Icon Paths
    import vscode from '@iconify-icons/logos/visual-studio-code'
    import html from '@iconify-icons/skill-icons/html'
    import css from '@iconify-icons/skill-icons/css'
    import sass from '@iconify-icons/skill-icons/sass'
    import javascript from '@iconify-icons/logos/javascript'
    import vue from '@iconify-icons/logos/vue'
    import greensock from '@iconify-icons/logos/greensock-icon'
    import figma from '@iconify-icons/logos/figma'
    import laravel from '@iconify-icons/skill-icons/laravel-light'
    import postman from '@iconify-icons/logos/postman-icon'
    import mysql from '@iconify-icons/skill-icons/mysql-light'
    import php from '@iconify-icons/logos/php'
    import git from '@iconify-icons/skill-icons/git'
    import github from '@iconify-icons/logos/github-icon'
    import photoshop from '@iconify-icons/logos/adobe-photoshop'
    import illustrator from '@iconify-icons/logos/adobe-illustrator'

    const skillsIcons = [
        { name: 'VS Code', icon: vscode },
        { name: 'HTML', icon: html },
        { name: 'CSS', icon: css },
        { name: 'JavaScript', icon: javascript },
        { name: 'Sass', icon: sass },
        { name: 'Vue', icon: vue },
        { name: 'GreenSock', icon: greensock },
        { name: 'Figma', icon: figma },
        { name: 'Laravel', icon: laravel },
        { name: 'Postman', icon: postman },
        { name: 'MySQL', icon: mysql },
        { name: 'PHP', icon: php },
        { name: 'Git', icon: git },
        { name: 'GitHub', icon: github },
        { name: 'Photoshop', icon: photoshop },
        { name: 'Illustrator', icon: illustrator }
    ]
</script>

<style scoped lang="scss">
    @use '@/styles/abstracts' as a;

    .skills-con {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .skills-item {
        flex: 0 0 33%;
    }

    @media screen and (min-width: 768px) {
        .skills-item {
            flex: 0 0 15%;
        }
    }
</style>