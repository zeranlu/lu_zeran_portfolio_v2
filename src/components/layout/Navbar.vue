<template>
    <header :class="{ 'slideUp': headerHidden }">
        <!-- hamburger menu -->
        <button class="hamburger" :class="{ 'X': navOpen }" @click="toggleNav">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- navbar -->
        <nav class="navbar" :class="{ 'open': navOpen }">
            <ul class="nav-ul">
                <li class="nav-li">
                    <RouterLink class="nav-a" to="/">
                        Zeran Lu
                    </RouterLink>
                </li>

                <li class="nav-li">
                    <RouterLink class="nav-a" to="/">
                        Home
                    </RouterLink>
                </li>

                <li class="nav-li">
                    <RouterLink class="nav-a" to="/projects">
                        Projects
                    </RouterLink>
                </li>

                <li class="nav-li nav-dropdown">
                    <!-- nav dropdown -->

                    <RouterLink class="nav-a" to="/case-studies">
                        Case Studies
                    </RouterLink>

                    <ul class="dropdown-nav">

                        <li class="dropdown-li" v-for="caseStudy in caseStudies" :key="caseStudy.case_study_id">
                            <RouterLink class="dropdown-a" :to="`/case-studies/${caseStudy.case_study_id}`">
                                {{ caseStudy.project_title }}
                            </RouterLink>
                        </li>
                        
                    </ul>
                </li>
                
                <li class="nav-li">
                    <RouterLink class="nav-a" to="/contact">
                        Contact
                    </RouterLink>
                </li>
            </ul>
        </nav>
    </header>
</template>

<script setup>
    import { ref, watch, onMounted, onUnmounted } from 'vue'

    // Nav State
    const navOpen = ref(false)
    const headerHidden = ref(false)
    const caseStudies = ref([])

    // Scroll Tracking
    let lastScroll = 0

    // Toggle Hamburger Nav
    function toggleNav(e) {
        e.stopPropagation()
        if (navOpen.value === false) {
            navOpen.value = true
        } else {
            navOpen.value = false
        }
    }

    function closeNav() {
        navOpen.value = false
    }

    // Close Menu Clicking Outside
    function clickEvent(e) {
        const navbar = document.querySelector('.navbar')
        const hamburger = document.querySelector('.hamburger')

        if (!navbar.contains(e.target) && !hamburger.contains(e.target)) {
            closeNav()
        }
    }

    // Scroll Logic
    function handleScroll() {
        const currentScroll = window.scrollY

        if (currentScroll > lastScroll && currentScroll > 100 && navOpen.value === false) {
            headerHidden.value = true
        } else if (currentScroll < lastScroll) {
            headerHidden.value = false
        }

        lastScroll = currentScroll
    }

    // Mouse Proximity
    function mouseProximity(e) {
        if (e.clientY < 100) {
            headerHidden.value = false
        }
    }

    // Watching Nav States
    watch(navOpen, function(isOpen) {
        if (isOpen === true) {
            document.addEventListener('click', clickEvent)
        } else {
            document.removeEventListener('click', clickEvent)
        }
    })

    // Lifecycle Hooks
    onMounted(function() {
        window.addEventListener('scroll', handleScroll)
        document.addEventListener('mousemove', mouseProximity)

        // Fetch Case Study ID
        fetch('http://localhost/lu_zeran_portfolio_v2/public/case_studies.php')
        .then(res => res.json())
        .then(data => {
            caseStudies.value = data.case_studies
        })
        .catch(err => console.error('Error fetching this case study:', err, 'Please, try again later.'));
    })

    onUnmounted(function() {
        window.removeEventListener('scroll', handleScroll)
        document.removeEventListener('mousemove', mouseProximity)
        document.removeEventListener('click', clickEvent)
    })
</script>