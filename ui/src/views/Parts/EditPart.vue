<template>
  <form class="box">
    <h1 class="subtitle">Editar Producto</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="ID">
      <h1 class="subtitle-is-6">{{ form.id }}</h1>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Nombre">
      <b-input custom-class="is-size-7-mobile" v-model="form.name" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Descripción">
      <b-input custom-class="is-size-7-mobile" v-model="form.description" />
<<<<<<< HEAD
=======
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Activo">
      <b-switch :value="form.active" v-model="form.active" />
>>>>>>> maintpro
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="editPart" icon-left="circle-edit-outline" class="is-warning is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>

<script>
<<<<<<< HEAD
import {TOGGLE_EDIT_FORM} from '@/store/mutations.type'
=======
import { TOGGLE_EDIT_FORM, CLEAR_SELECTED_ROW } from '@/store/mutations.type'
import { EDIT_PART } from '@/store/actions.type'
>>>>>>> maintpro
import { mapGetters } from 'vuex'
export default {
  data() {
    return {
      id: '',
      name: '',
      description: '',
      active: true
    }
  },
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_EDIT_FORM)
<<<<<<< HEAD
=======
    },
    editPart() {
      this.$store.dispatch(EDIT_PART, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_EDIT_FORM)
          this.$store.commit(CLEAR_SELECTED_ROW)
          this.$buefy.toast.open({
            message: 'Producto editado con éxito',
            type: 'is-warning'
          })
        })
>>>>>>> maintpro
    }
  },
  computed: {
    ...mapGetters(['getSelectedRow']),
    form: function() {
<<<<<<< HEAD
      return {
        name: this.getSelectedRow.name,
        description: this.getSelectedRow.description
=======
      const row = this.getSelectedRow;
      return {
        id: (row !== null) ? row.id : '',
        name: (row !== null) ? row.name : '',
        description: (row !== null) ? row.description : '',
        active: (row !== null) ? row.active : ''
>>>>>>> maintpro
      }
    }
  },
  
}
</script>