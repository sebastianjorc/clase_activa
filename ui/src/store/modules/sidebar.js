import { TOGGLE_SIDEBAR } from '../mutations.type'

const state = {
  isHidden: true
}

const getters = {
  isHidden(state) {
    return state.isHidden
  }
}

const actions = {

}

const mutations = {
  [TOGGLE_SIDEBAR](state){
    const htmlClassName = 'has-aside-mobile-expanded'
    state.isHidden = !state.isHidden
    if (state.isHidden){
      document.documentElement.classList.remove(htmlClassName)
    }else{
      document.documentElement.classList.add(htmlClassName)
    }
  }

}

export default {
  state,
  getters,
  actions,
  mutations
}

