import Vue from 'vue'
import Vuex from 'vuex'

import auth from './modules/auth'
import navbar from './modules/navbar'
import sidebar from './modules/sidebar'
import part from './modules/part'
import vehicle from './modules/vehicle'
import make from './modules/make'
import note from './modules/note'
import quotation from './modules/quotation'

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    auth,
    navbar,
    part,
    vehicle,
    sidebar,
    make,
    note,
    quotation
  }
})
