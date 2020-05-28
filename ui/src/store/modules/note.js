import ApiService from '@/common/api';
import {
  TOGGLE_ADD_NOTE,
  TOGGLE_EDIT_NOTE,
  SET_NOTES,
  SET_NOTE,
  SET_ERROR
} from '../mutations.type'

import { ADD_NOTE, GET_NOTES } from '../actions.type'

const state = {
  errors: null,
  showAddNote: false,
  showEditNote: false,
  all: []
}

const getters = {
  getNotes(state) {
    return state.all;
  }
}

const actions = {
  [ADD_NOTE](context, note) {
    return new Promise((resolve, reject) => {
      ApiService.post('notes', note)
        .then(({ data }) => {
          context.commit(SET_NOTE, data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  },
  [GET_NOTES](context, params) {
    return new Promise((resolve, reject) => {
      ApiService.query('notes', params)
        .then(({ data }) => {
          context.commit(SET_NOTES, data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  }
}

const mutations = {
  [TOGGLE_ADD_NOTE](state) {
    state.showEditNote = false;
    state.showAddNote = !state.showAddNote;
  },
  [TOGGLE_EDIT_NOTE](state) {
    state.showAddNote = false;
    state.showEditNote = !state.showEditNote;
  },
  [SET_NOTE](state, note) {
    state.all.data = [note].concat(state.all.data);
  },
  [SET_NOTES](state, notes) {
    state.all = notes
  }
}

export default {
  state,
  getters,
  actions,
  mutations
}