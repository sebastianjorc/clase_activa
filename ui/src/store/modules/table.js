import {
<<<<<<< HEAD
  SET_SELECTED_ROW
=======
  SET_SELECTED_ROW,
  CLEAR_SELECTED_ROW
>>>>>>> maintpro
} from '../mutations.type'

const state = {
  selectedRow: null
}

const getters = {
  getSelectedRow(state) {
    return state.selectedRow
  }
}

const mutations = {
  [SET_SELECTED_ROW](state, selected) {
    state.selectedRow = selected
<<<<<<< HEAD
=======
  },
  [CLEAR_SELECTED_ROW](state) {
    state.selectedRow = null;
>>>>>>> maintpro
  }
}

export default {
  state,
  getters,
  mutations
}