import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import Homepage from '../views/Homepage.vue'

const routes = [
  {
    path: '/index',
    component: IndexPage
  },

  {
    path: '/',
    name: Homepage,
    component: Homepage
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
