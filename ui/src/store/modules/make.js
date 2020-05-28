import ApiService from '@/common/api';

import {
  TOGGLE_ADD_MAKE,
  TOGGLE_EDIT_MAKE,
  SET_MAKES,
  SET_MAKE,
  SET_ERROR
} from '../mutations.type'

import { ADD_MAKE, GET_MAKES } from '../actions.type';

const state = {
  errors: null,
  showAddMake: false,
  showEditMake: false,
  all: []
}

const getters = {
  getMakes(state) {
    return state.all
  }
}

const actions = {
  [ADD_MAKE](context, make) {
    return new Promise((resolve, reject) => {
      ApiService.post('makes', make)
        .then(({ data }) => {
          context.commit(SET_MAKE, data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  },
  [GET_MAKES](context, params) {
    return new Promise((resolve, reject) => {
      ApiService.query('makes', params)
        .then(({ data }) => {
          context.commit(SET_MAKES, data);
          resolve(data);
        })
        .then(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  }
}

const mutations = {
  [TOGGLE_ADD_MAKE](state) {
    state.showEditMake = false;
    state.showAddMake = !state.showAddMake;
  },
  [TOGGLE_EDIT_MAKE](state) {
    state.showAddMake = false;
    state.showEditMake = !state.showEditMake;
  },
  [SET_MAKE](state, make) {
    state.all.data = [make].concat(state.all.data);
  },
  [SET_MAKES](state, makes) {
    state.all = makes
  },
  [SET_ERROR](state, error) {
    state.errors = error;
  }
}

export default {
  state,
  getters,
  actions,
  mutations
}