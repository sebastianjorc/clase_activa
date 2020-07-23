import ApiService from '@/common/api';
import {
  SET_PARTS,
  SET_PART,
  UPDATE_PART,
  SET_ERROR
} from '../mutations.type';
import {
  ADD_PART,
  EDIT_PART,
  REMOVE_PART,
  GET_PARTS
} from '../actions.type';

const state = {
  errors: null,
  all: []
}

const getters = {
  getParts(state) {
    return state.all;
  }
}

const actions = {
  [GET_PARTS](context, params) {
    ApiService.query('parts', params)
      .then(({ data }) => {
        context.commit(SET_PARTS, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [ADD_PART](context, part) {
    ApiService.post('parts', part)
      .then(({ data }) => {
        context.commit(SET_PART, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [EDIT_PART](context, part) {
    ApiService.update('parts', part.id, part)
      .then(({ data }) => {
        context.commit(UPDATE_PART, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [REMOVE_PART](context, id) {
    ApiService.delete('parts', id)
      .then(({ data }) =>{ 
        context.commit(REMOVE_PART, id);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  }
}

const mutations = {
  [SET_PART](state, part) {
    state.all.data = [part].concat(state.all.data);
  },
  [UPDATE_PART](state, part) {
    state.all.data = [
      part,
      ...state.all.data.filter(item => item.id !== part.id)
    ];
  },
  [REMOVE_PART](state, id) {
    state.all.data.splice(state.all.data.indexOf(id), 1);
  },
  [SET_PARTS](state, parts) {
    state.all = parts;
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