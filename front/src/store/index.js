import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)
import  auth from "./modules/auth.js";
import  post from "./modules/post.js";
export default new Vuex.Store({
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
    auth,post
  }
})
