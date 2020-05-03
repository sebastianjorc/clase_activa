import { getUsers } from '@/api/user'

const state = {
  users: []
}

const mutations = {
  SET_USERS: (state, users) => {
    state.users = users
  }
}

const actions = {
  getUsers({ commit }) {
    return new Promise((resolve, reject) => {
      getUsers().then(response => {
        const data = response
        commit('SET_USERS', data)
        resolve()
      }).catch(error => {
        reject(error)
      })
    })
  }
}

export default {
  namespaced: true,
  state,
  mutations,
  actions
}
