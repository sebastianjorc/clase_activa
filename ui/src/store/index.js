import Vue from 'vue'
import Vuex from 'vuex'

import navbar from './modules/navbar'
import sidebar from './modules/sidebar'
import toolbar from './modules/toolbar'
import table from './modules/table'
<<<<<<< HEAD

import auth from './modules/auth'
=======
>>>>>>> maintpro
import part from './modules/part'
import note from './modules/note'
<<<<<<< HEAD
import nivel from './modules/nivel'
=======
import quotation from './modules/quotation'
import company from './modules/company'
>>>>>>> maintpro


Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    navbar,
<<<<<<< HEAD
    sidebar,
    toolbar,
    table,
    auth,
    part,
    note,
    nivel
=======
    toolbar,
    sidebar,
    table,
    part,
    vehicle,
    make,
    note,
    quotation,
    company
>>>>>>> maintpro
  }
})
