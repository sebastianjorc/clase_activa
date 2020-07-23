<template>
  <form class="box">
    <h1 class="subtitle">Nuevo Producto</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="Nombre">
      <b-input custom-class="is-size-7-mobile" v-model="form.name" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Descripción">
      <b-input custom-class="is-size-7-mobile" v-model="form.description" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Activo">
      <b-switch :value="form.active" v-model="form.active" />
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="addPart" icon-left="content-save" class="is-success is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>
<script>
import { TOGGLE_ADD_FORM } from '@/store/mutations.type'
import { ADD_PART } from '@/store/actions.type'
export default {
  data() {
    return {
      form: {
        name: '',
        description: '',
        active: true
      }
    }
  },
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_ADD_FORM)
    },
    addPart() {
      this.$store.dispatch(ADD_PART, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_FORM)
          this.$buefy.toast.open({
            message: 'Producto agregado con éxito',
            type: 'is-success'
          })
        })
    }
  },
}
</script>
