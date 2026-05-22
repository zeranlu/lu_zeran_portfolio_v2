import { onMounted, onUnmounted } from 'vue'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

export function useParallax() {
    
    // Waits for DOM to load
    const runParallax = () => {
        gsap.registerPlugin(ScrollTrigger)

        const sections = document.querySelectorAll('.parallax-con')
        console.log('sections found:', sections.length)

        document.querySelectorAll('.parallax-con').forEach((section) => {
            gsap.to(section, {
                scrollTrigger: {
                    trigger: section,
                    start: 'top top',
                    end: '+=500',
                    pin: true,
                    scrub: 2
                }
            })
        })
    }

    onUnmounted(() => {
        ScrollTrigger.getAll().forEach(trigger => trigger.kill())
    })

    return  { runParallax }
}