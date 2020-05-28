<template>
  <form class="box">
    <h1 class="subtitle">Nueva Nota</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="Tíutlo">
      <b-input custom-class="is-size-7-mobile" v-model="form.title" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Texto">
      <b-input 
        custom-class="is-size-7-mobile"
        maxlength="200"
        type="textarea"
        v-model="form.description" 
      />
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="addNote" icon-left="content-save" class="is-success is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>
<script>
import { TOGGLE_ADD_NOTE } from '@/store/mutations.type'
import { ADD_NOTE } from '@/store/actions.type'
export default {
  data() {
    return {
      form: {
        title: '',
        description: ''
      }
    }
  },
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_ADD_NOTE)
    },
    addNote() {
      this.$store.dispatch(ADD_NOTE, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_NOTE)
        })
    }
  },
}
</script>
