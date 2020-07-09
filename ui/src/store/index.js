import Vue from 'vue'
import Vuex from 'vuex'

import navbar from './modules/navbar'
import sidebar from './modules/sidebar'
import toolbar from './modules/toolbar'
import table from './modules/table'

import auth from './modules/auth'
import part from './modules/part'
import note from './modules/note'
import nivel from './modules/nivel'


Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    navbar,
    sidebar,
    toolbar,
    table,
    auth,
    part,
    note
  }
})
