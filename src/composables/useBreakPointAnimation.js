import { onUnmounted } from 'vue'
import { gsap } from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

export function useBreakPointAnimation() {

    const runBreakPointAnimation = () => {
        gsap.registerPlugin(ScrollTrigger)

        document.querySelectorAll('.breakpoint-con').forEach((section) => {
            gsap.fromTo(section.querySelector('.red-square'),
                { x: '0vw' },
                {
                    x: '100vw',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 3
                    }
                })

            gsap.fromTo(section.querySelector('.blue-square'),
                { x: '0vw' },
                {
                    x: '80vw',
                    scrollTrigger: {
                        trigger: section,
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 2
                    }
                })

            gsap.fromTo(section.querySelector('h2'),
                { opacity: 0 },
                {
                    opacity: 1,
                    scrollTrigger: {
                        trigger: section,
                        start: 'top center',
                        end: 'bottom center',
                        scrub: 1
                    }
                })
        })
    }

    onUnmounted(() => {
        ScrollTrigger.getAll().forEach(trigger => trigger.kill())
    })

    return { runBreakPointAnimation }
}
