import ApiService from '@/common/api';
import { 
  SET_PARTS,
  SET_PART, 
  SET_ERROR 
} from '../mutations.type';
import { ADD_PART, GET_PARTS } from '../actions.type';

const state = {
  errors: null,
  showAddPart: false,
  showEditPart: false,
  all: []
}

const actions = {
  [ADD_PART](context, part) {
    return new Promise((resolve, reject) => {
      ApiService.post('parts', part)
        .then(({ data }) => {
          context.commit(SET_PART, data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  },
  [GET_PARTS](context, params) {
    return new Promise((resolve, reject) => {
      ApiService.query('parts', params)
        .then(({ data }) => {
          context.commit(SET_PARTS, data);
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
  [SET_PART](state, part) {
    state.all.data = [part].concat(state.all.data);
  },
  [SET_PARTS](state, parts) {
    state.all = parts
  },
  [SET_ERROR](state, error) {
    state.errors = error;
  }
}

export default {
  state,
  actions,
  mutations
}