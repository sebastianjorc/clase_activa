import { 
  TOGGLE_ADD_FORM, 
<<<<<<< HEAD
  TOGGLE_EDIT_FORM 
} from '../mutations.type';

=======
  TOGGLE_EDIT_FORM,
  DEFAULT_FORM_STATE
} from '../mutations.type';
  
>>>>>>> maintpro
const state = {
  addForm: false,
  editForm: false
}

const getters = {
  showAddForm(state) {
    return state.addForm;
  },
  showEditForm(state) {
<<<<<<< HEAD
    return state.editForm
=======
    return state.editForm;
>>>>>>> maintpro
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
<<<<<<< HEAD
=======
  },
  [DEFAULT_FORM_STATE](state) {
    state.addForm = false;
    state.editForm = false;
>>>>>>> maintpro
  }
}

export default {
  state,
  getters,
  mutations
}