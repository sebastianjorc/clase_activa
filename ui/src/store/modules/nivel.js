import ApiService from '@/common/api';
import { 
  SET_NIVELS,
  SET_NIVEL, 
  SET_ERROR 
} from '../mutations.type';
import { ADD_NIVEL, GET_NIVELS } from '../actions.type';

const state = {
  errors: null,
  showAddnivel: false,
  showEditnivel: false,
  all: []
}

const actions = {
  [ADD_NIVEL](context, nivel) {
    return new Promise((resolve, reject) => {
      ApiService.post('nivels', nivel)
        .then(({ data }) => {
          context.commit(SET_NIVEL, data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  },
  [GET_NIVELS](context, params) {
    return new Promise((resolve, reject) => {
      ApiService.query('nivels', params)
        .then(({ data }) => {
          context.commit(SET_NIVELS, data);
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
  [SET_NIVEL](state, nivel) {
    state.all.data = [nivel].concat(state.all.data);
  },
  [SET_NIVELS](state, nivels) {
    state.all = nivels
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