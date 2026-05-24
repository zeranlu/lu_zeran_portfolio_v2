import { onMounted, onUnmounted } from 'vue'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

export function useParallax() {
    
    // Waits for DOM to load
    const runParallax = () => {
        gsap.registerPlugin(ScrollTrigger)

        document.querySelectorAll('.parallax-con').forEach((section) => {
            gsap.fromTo(section, 
                { scale: 0.8 },
                {
                    scale: 1,
                    scrollTrigger: {
                        trigger: section,
                        start: 'top bottom',
                        end: 'bottom center',
                        scrub: 1
                    }
                })
        })
    }

    onUnmounted(() => {
        ScrollTrigger.getAll().forEach(trigger => trigger.kill())
    })

    return  { runParallax }
}