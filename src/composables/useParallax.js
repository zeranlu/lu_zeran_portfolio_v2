import { onMounted, onUnmounted } from 'vue'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

export function useParallax() {
    
    // Waits for DOM to load
    const runParallax = () => {
        gsap.registerPlugin(ScrollTrigger)

        document.querySelectorAll('.parallax-section').forEach((section) => {
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
}