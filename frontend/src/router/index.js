import { createRouter, createWebHistory } from 'vue-router'
import IndexPage from '../views/IndexPage.vue'
import Homepage from '../views/Homepage.vue'
import Contact from '../views/Contact.vue'
import About from '../views/About.vue'
import Services from '../views/Services.vue'
import Hotels from '../views/Hotels.vue'
import Registerhotel from '../views/Registerhotel.vue'
import Register from '../views/Register.vue'
import Login from '../views/Login.vue'
import Admin from '../views/Admin.vue'
import Tourist from '../views/Tourist.vue'
import HotelAcc from '../views/HotelAcc.vue'
import Verify from '../views/Verify.vue'

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
    path: '/hotelacc',
    name: HotelAcc,
    component: HotelAcc
  },

  {
    path: '/Registerhotel',
    name: Registerhotel,
    component: Registerhotel
  },

  {
    path: '/verify',
    name: Verify,
    component: Verify
  },

  {
    path: '/register',
    name: Register,
    component: Register,
    meta: {requiresAuth: false}
  },

  {
    path: '/login',
    name: Login,
    component: Login,
    meta: {requiresAuth: false}
  },
  
  {
    path: '/tourist_account',
    component: Tourist,
    meta: {requiresAuth: true}
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  linkExactActiveClass: "active",
  routes
})

router.beforeEach((to, from, next) => {
  const isLoggedin = checkUserLogin();
  //const eligibility = checkUserAccess();
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    if(!isLoggedin ) {
      next("/login");
    } else {
      next();
    }
  } else {
    next();
  }
}); 

function checkUserLogin() {
  const userToken = sessionStorage.getItem('jwt');
  return !!userToken;
}

/*function checkUserAccess() {
  const userToken = sessionStorage.getItem('jwt');
  return !!userToken;
} */



export default router
