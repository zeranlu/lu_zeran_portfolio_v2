import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: () => import('@/views/Home.vue')
        },
        {
            path: '/projects',
            component: () => import('@/views/Projects.vue')
        },
        {
            path: '/contact',
            component: () => import('@/views/Contact.vue')
        },
        {
            path: '/case-studies',
            component: () => import('@/views/CaseStudies.vue')
        },
        {
            path: '/case-studies/:id',
            component: () => import('@/views/CaseStudy.vue')
        }
    ]
})

export default router