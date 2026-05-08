<template>
    <header>
        <!-- hamburger menu -->
        <button class="hamburger" @click="toggleMenu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>

        <!-- navbar -->
        <nav class="navbar" :class="{ 'navbar--open': menuOpen }">
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

                    <RouterLink class="nav-a" to="/case-study">
                        Case Studies
                    </RouterLink>

                    <ul class="dropdown-nav">
                        <li class="dropdown-li">
                            <RouterLink class="dropdown-a" to="/case-studies/interactive-map">
                                Interactive Map
                            </RouterLink>
                        </li>

                        <li class="dropdown-li">
                            <RouterLink class="dropdown-a" to="/case-studies/parallax-timeline">
                                Parallax Timeline
                            </RouterLink>
                        </li>

                        <li class="dropdown-li">
                            <RouterLink class="dropdown-a" to="/case-studies/hero-selection">
                                Hero Selection
                            </RouterLink>
                        </li>

                        <li class="dropdown-li">
                            <RouterLink class="dropdown-a" to="/case-studies/scrolling-sequence">
                                Scrolling Sequence
                            </RouterLink>
                        </li>

                        <li class="dropdown-li">
                            <RouterLink class="dropdown-a" to="/case-studies/clickable-cards">
                                Clickable Cards
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

    // Scroll Tracking
    let lastScroll = 0
</script>