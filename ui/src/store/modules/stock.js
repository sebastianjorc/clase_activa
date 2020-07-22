import ApiService from '@/common/api';
import {
  SET_STOCKS,
  SET_STOCK,
  UPDATE_STOCK,
  SET_ERROR
} from '../mutations.type';
import {
  ADD_STOCK,
  EDIT_STOCK,
  REMOVE_STOCK,
  GET_STOCKS,
} from '../actions.type';

const state = {
  errors: null,
  all: []
}

const getters = {
  getStocks(state) {
    return state.all;
  }
}

const actions = {
  [GET_STOCKS](context, params) {
    ApiService.query('stocks', params)
      .then(({ data }) => {
        context.commit(SET_STOCKS, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [ADD_STOCK](context, stock) {
    ApiService.post('stocks', stock)
      .then(({ response }) => {
        context.commit(SET_STOCK, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [EDIT_STOCK](context, stock) {
    ApiService.update('stocks', stock.id, stock)
      .then(({ data }) => {
        context.commit(UPDATE_STOCK, data);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  },
  [REMOVE_STOCK](context, id) {
    ApiService.delete('stocks', id)
      .then(({ data }) => {
        context.commit(REMOVE_STOCK, id);
      })
      .catch(({ response }) => {
        context.commit(SET_ERROR, response);
      });
  }
}

const mutations = {
  [SET_STOCK](state, stock) {
    state.all.data = [stock].concat(state.all.data);
  },
  [UPDATE_STOCK](state, stock) {
    state.all.data = [
      stock,
      ...state.all.data.filter(item => item.id !== stock.id)
    ];
  },
  [REMOVE_STOCK](state, id) {
    state.all.data.splice(state.all.data.indexOf(id), 1);
  },
  [SET_STOCKS](state, stocks) {
    state.all = stocks;
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