<template>
  <form class="box">
    <h1 class="subtitle">Editar Nivel académico</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="Nombre">
      <b-input custom-class="is-size-7-mobile" v-model="form.name" />
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button icon-left="circle-edit-outline" class="is-warning is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>

<script>
import {TOGGLE_EDIT_FORM} from '@/store/mutations.type'
import { mapGetters } from 'vuex'
export default {
  data() {
    return {
      name: ''
    }
  },
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_EDIT_FORM)
    }
  },
  computed: {
    ...mapGetters(['getSelectedRow']),
    form: function() {
      return {
        name: this.getSelectedRow.name,
        description: this.getSelectedRow.description
      }
    }
  },
  
}
</script>