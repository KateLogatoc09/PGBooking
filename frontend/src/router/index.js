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
import Account from '../views/Account.vue'
import HotelAcc from '../views/HotelAcc.vue'
import Verify from '../views/Verify.vue'
import Forgot from '../views/Forgot.vue'
import Forms from '../views/Forms.vue'
import Tables from '../views/Tables.vue'

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
    path: '/admin',
    name: Admin,
    component: Admin,
    meta: {requiresAuth: true},
  },

  {
    path: '/form',
    name: Forms,
    component: Forms
  },

  {
    path: '/table',
    name: Tables,
    component: Tables
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
    component: HotelAcc,
    meta: {requiresAuth: true},
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
    path: '/forgot',
    name: Forgot,
    component: Forgot,
  },

  {
    path: '/register',
    name: Register,
    component: Register,
  },

  {
    path: '/login',
    name: Login,
    component: Login,
  },
  
  {
    path: '/account',
    component: Account,
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
  const TypeofUser = checkUserRole();
  //const eligibility = checkUserAccess();
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    if(!isLoggedin ) {
      next("/login");
    } else {
      if((TypeofUser === 'ADMIN' && to.path === "/account") || (TypeofUser === 'ADMIN' && to.path === "/hotelacc")) {
        next("/");
      } else if(((TypeofUser === 'HOTEL' || TypeofUser === 'TOURIST') && to.path === "/admin") || ((TypeofUser === 'HOTEL' || TypeofUser === 'TOURIST') && to.path === "/form")){
        next("/");
      } else{
        next();
      }
    }
  } else {
    next();
  }
}); 

function checkUserLogin() {
  const userToken = sessionStorage.getItem('jwt');
  return !!userToken;
}

function checkUserRole() {
  const role = sessionStorage.getItem('role');
  return role;
}



export default router
