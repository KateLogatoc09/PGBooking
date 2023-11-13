import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import Homepage from '../views/Homepage.vue'
import Contact from '../views/Contact.vue'
import About from '../views/About.vue'
import Services from '../views/Services.vue'
import Hotels from '../views/Hotels.vue'
import Register from '../views/Register.vue'
import Login from '../views/Login.vue'
import Admin from '../views/Admin.vue'

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
  {
    path: '/Admin',
    name: Admin,
    component: Admin
  },

  {
    path: '/contact',
    name: Contact,
    component: Contact
  },

  {
    path: '/about',
    name: About,
    component: About
  },

  {
    path: '/services',
    name: Services,
    component: Services
  },

  {
    path: '/hotels',
    name: Hotels,
    component: Hotels
  },

  {
    path: '/register',
    name: Register,
    component: Register
  },

  {
    path: '/login',
    name: Login,
    component: Login
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  linkExactActiveClass: "active",
  routes
})

export default router
