import ApiService from '@/common/api';
import {
  SET_COMPANIES,
  SET_COMPANY,
  UPDATE_COMPANY,
  SET_ERROR
} from '../mutations.type';
import {
  ADD_COMPANY,
  EDIT_COMPANY,
  REMOVE_COMPANY,
  GET_COMPANIES
} from '../actions.type';

const state = {
  errors: null,
  all: []
}

const getters = {
  getCompanies(state) {
    return state.all;
  }
}

const actions = {
  [GET_COMPANIES](context, params) {
    ApiService.query('companies', params)
      .then(({ data }) => {
        context.commit(SET_COMPANIES, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [ADD_COMPANY](context, company) {
    ApiService.post('companies', company)
      .then(({ data }) => {
        context.commit(SET_COMPANY, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [EDIT_COMPANY](context, company) {
    ApiService.update('companies', company.id, company)
      .then(({ data }) => {
        context.commit(UPDATE_COMPANY, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [REMOVE_COMPANY](context, id) {
    ApiService.delete('companies', id)
      .then(({ data }) => {
        context.commit(REMOVE_COMPANY, id);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  }
}

const mutations = {
  [SET_COMPANY](state, company) {
    state.all.data = [company].concat(state.all.data);
  },
  [UPDATE_COMPANY](state, company) {
    state.all.data = [
      company,
      ...state.all.data.filter(item => item.id !== company.id)
    ];
  },
  [REMOVE_COMPANY](state, id) {
    state.all.data.splice(state.all.data.indexOf(id), 1);
  },
  [SET_COMPANIES](state, companies) {
    state.all = companies;
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