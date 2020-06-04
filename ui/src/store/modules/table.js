import {
  SET_SELECTED_ROW
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
  }
}

export default {
  state,
  getters,
  mutations
}