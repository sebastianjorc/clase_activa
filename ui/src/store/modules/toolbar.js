import { 
  TOGGLE_ADD_FORM, 
  TOGGLE_EDIT_FORM,
  DEFAULT_FORM_STATE
} from '../mutations.type';
  
const state = {
  addForm: false,
  editForm: false
}

const getters = {
  showAddForm(state) {
    return state.addForm;
  },
  showEditForm(state) {
    return state.editForm;
  }
}

const mutations = {
  [TOGGLE_ADD_FORM](state) {
    state.editForm = false;
    state.addForm = !state.addForm;
  },
  [TOGGLE_EDIT_FORM](state) {
    state.addForm = false;
    state.editForm = !state.editForm;
  },
  [DEFAULT_FORM_STATE](state) {
    state.addForm = false;
    state.editForm = false;
  }
}

export default {
  state,
  getters,
  mutations
}