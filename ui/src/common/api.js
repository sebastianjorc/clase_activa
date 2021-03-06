import Vue from "vue";
import axios from "axios";
import VueAxios from "vue-axios";
import JwtService from "@/common/jwt";
import { API_URL } from "@/common/config";

const ApiService = {
  init() {
    Vue.use(VueAxios, axios);
    Vue.axios.defaults.baseURL = API_URL;
  },

  setHeader() {
    Vue.axios.defaults.headers.common[
      "Authorization"
    ] = `Bearer ${JwtService.getToken()}`;
  },

  async query(resource, params) {
    try {
      return Vue.axios.get(resource, params);
    }
    catch (error) {
      throw new Error(`ApiService ${error}`);
    }
  },

  async get(resource, slug = "") {
    try {
      return Vue.axios.get(`${resource}/${slug}`);
    }
    catch (error) {
      throw new Error(`ApiService ${error}`);
    }
  },

  post(resource, params) {
    return Vue.axios.post(`${resource}`, params);
  },

  update(resource, slug, params) {
    return Vue.axios.put(`${resource}/${slug}`, params);
  },

  put(resource, params) {
    return Vue.axios.put(`${resource}`, params);
  },

  async delete(resource, slug) {
    try {
      return Vue.axios.delete(`${resource}/${slug}`);
    }
    catch (error) {
      throw new Error(`ApiService ${error}`);
    }
  }
};

export default ApiService;
