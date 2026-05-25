import { onUnmounted } from 'vue'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

export function useBreakPointAnimation() {

    const runBreakPointAnimation = () => {
        gsap.registerPlugin(ScrollTrigger)

        document.querySelectorAll('.breakpoint-section').forEach((section) => {
            gsap.fromTo(section.querySelector('h2'),
                {opacity: 0},
                {
                    opacity: 1,
                    scrollTrigger: {
                        trigger: section,
                        start: 'top center',
                        end: 'bottom center',
                        scrub: 2
                    }
                })
        })
    }

    onUnmounted(() => {
        ScrollTrigger.getAll().forEach(trigger => trigger.kill())
    })

    return { runBreakPointAnimation }
}
