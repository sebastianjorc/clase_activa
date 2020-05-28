// import '@/scss/main.scss'

import Vue from 'vue'
import VueMeta from 'vue-meta'
import App from './App.vue'
import router from './router'
import store from './store'

import Buefy from 'buefy'
import 'buefy/dist/buefy.css'

import { CHECK_AUTH, LOGOUT } from "./store/actions.type";
import ApiService from "./common/api";
import JwtService from './common/jwt';

Vue.config.productionTip = false

Vue.use(VueMeta)
Vue.use(Buefy)

ApiService.init();

const whiteList = ['/login'] // no redirect whitelist

router.beforeEach(async(to, from, next) => {
  // determine whether the user has logged in
  const hasToken = JwtService.getToken()

  if (hasToken) {
    if (to.path === '/login') {
      next({ path: '/' })
    } else {
      try {
        await store.dispatch(CHECK_AUTH)
        next()
      } catch (error) {
        await store.dispatch(LOGOUT)
        next({ path: '/login' })
      }
    }
  } else {
    if (whiteList.indexOf(to.path) !== -1) {
      next()
    } else {
      next({ path: '/login' })
    }
  }
})


new Vue({
  router,
  store,
  render: h => h(App),
}).$mount('#app')
