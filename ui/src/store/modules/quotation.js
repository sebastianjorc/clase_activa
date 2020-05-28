import ApiService from '@/common/api';
import {
  TOGGLE_ADD_QUOTATION,
  TOGGLE_EDIT_QUOTATION,
  SET_QUOTATIONS,
  SET_QUOTATION,
  SET_ERROR
} from '../mutations.type'

import { ADD_QUOTATION, GET_QUOTATIONS } from '../actions.type'

const state = {
  errors: null,
  showAddQuotation: false,
  showEditQuotation: false,
  all: []
}

const getters = {
  getQuotations(state) {
    return state.all
  }
}

const actions = {
  [ADD_QUOTATION](context, quotation) {
    return new Promise((resolve, reject) => {
      ApiService.post('quotations', quotation)
        .then(({ data }) => {
          context.commit(SET_QUOTATION, data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  },
  [GET_QUOTATIONS](context, params) {
    return new Promise((resolve, reject) => {
      ApiService.query('quotations', params)
        .then(({ data }) => {
          context.commmit(SET_QUOTATIONS, data);
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
  [TOGGLE_ADD_QUOTATION](state) {
    state.showEditQuotation = false;
    state.showAddQuotation = !state.showAddQuotation
  },
  [TOGGLE_EDIT_QUOTATION](state) {
    state.showAddQuotation = false;
    state.showEditQuotation = !state.showEditQuotation
  },
  [SET_QUOTATION](state, quotation) {
    state.all.data = [quotation].concat(state.all.data);
  },
  [SET_QUOTATIONS](state, quotations) {
    state.all = quotations;
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