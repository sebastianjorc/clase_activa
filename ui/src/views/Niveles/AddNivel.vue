<template>
  <form class="box">
    <h1 class="subtitle">Nuevo Nivel</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="Nombre">
      <b-input custom-class="is-size-7-mobile" v-model="form.name" />
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="addNivel" icon-left="content-save" class="is-success is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>
<script>
import { TOGGLE_ADD_FORM } from '@/store/mutations.type'
import { ADD_NIVEL } from '@/store/actions.type'
export default {
  data() {
    return {
      form: {
        name: '',
      }
    }
  },
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_ADD_FORM)
    },
    addNivel() {
      this.$store.dispatch(ADD_NIVEL, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_FORM)
        })
    }
  },
}
</script>
