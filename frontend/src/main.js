import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'
import axios from 'axios'
import Swal from 'sweetalert2'

axios.defaults.baseURL="http://backend.test/"

createApp(App).use(router).mount('#app')
