<template>
    <section class="hero-section">
        <h2 class="hidden">Skills Section</h2>

        <div class="skills-con">
            <Icon />
        </div>
    </section>
</template>

<script setup>
    // Import Component
    import '@/components/home-page/Icon.vue'

    // Import Icon Paths
    import vscodeIcon from '@/assets/icons/vscode-logo.svg'
    import htmlIcon from ''
    import cssIcon from '@/assets/icons/css-logo.svg'
    import jsIcon from '@/assets/icons/js-logo.svg'
    import vueIcon from '@/assets/icons/vue-logo.svg'
    import gsapIcon from '@/assets/icons/gsap-logo.svg'
    import figmaIcon from '@/assets/icons/figma-logo.svg'
    import mysqlIcon from '@/assets/icons/mysql-logo.svg'
    import phpIcon from '@/assets/icons/php-logo.svg'
    import githubIcon from '@/assets/icons/github-logo.svg'
    import photoshopIcon from '@/assets/icons/photoshop-logo.svg'
    import illustratorIcon from '@/assets/icons/illustrator-logo.svg'

    const skillsIcons = [
        { name: 'VS Code', icon: 'vscodeIcon'},
        { name: 'HTML', icon: 'htmlIcon'},
        { name: 'CSS', icon: 'cssIcon'},
        { name: 'JavaScript', icon: 'jsIcon'},
        { name: 'Vue', icon: 'vueIcon'},
        { name: 'GreenSock', icon: 'gsapIcon'},
        { name: 'Figma', icon: 'figmaIcon'},
        { name: 'MySQL', icon: 'mysqlIcon'},
        { name: 'PHP', icon: 'phpIcon'},
        { name: 'GitHub', icon: 'githubIcon'},
        { name: 'Photoshop', icon: 'photoshopIcon'},
        { name: 'Illustrator', icon: 'illustratorIcon'}
    ]
</script>

<style scoped lang="scss">
</style>