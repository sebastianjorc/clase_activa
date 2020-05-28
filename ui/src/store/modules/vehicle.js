import ApiService from '@/common/api'
import {
  TOGGLE_ADD_VEHICLE,
  TOGGLE_EDIT_VEHICLE,
  SET_VEHICLE,
  SET_ERROR,
  SET_VEHICLES
} from '../mutations.type'

import { ADD_VEHICLE, GET_VEHICLES } from '../actions.type'

const state = {
  errors: null,
  showAddVehicle: false,
  showEditVehicle: false,
  all: []
}

const getters = {
  getVehicles(state){
    return state.all;
  }
}

const actions = {
  [ADD_VEHICLE](context, vehicle) {
    return new Promise((resolve, reject) => {
      ApiService.post('vehicles', vehicle)
        .then(({ data }) => {
          context.commit(SET_VEHICLE,  data);
          resolve(data);
        })
        .catch(({ response }) => {
          context.commit(SET_ERROR, response.data.errors);
          reject(response);
        })
    })
  },

  [GET_VEHICLES](context, params) {
    return new Promise((resolve, reject) => {
      ApiService.query('vehicles', params)
        .then(({ data }) => {
          context.commit(SET_VEHICLES, data);
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
  [TOGGLE_ADD_VEHICLE](state) {
    state.showEditVehicle = false;
    state.showAddVehicle = !state.showAddVehicle;
  },
  [TOGGLE_EDIT_VEHICLE](state) {
    state.showAddVehicle = false;
    state.showEditVehicle = !state.showEditVehicle;
  },
  [SET_VEHICLE](state, vehicle) {
    state.all.data = [vehicle].concat(state.all.data);
  },
  [SET_VEHICLES](state, vehicles) {
    state.all = vehicles;
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