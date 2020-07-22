<template>
  <form class="box">
    <h1 class="subtitle">Nueva Empresa</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="Nombre">
      <b-input custom-class="is-size-7-mobile" v-model="form.name" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Descripción">
      <b-input custom-class="is-size-7-mobile" v-model="form.description" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="RUT">
      <b-input custom-class="is-size-7-mobile" v-model="form.rut" v-cleave="masks.rut" placeholder="11.111.111-1"/>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Dirección">
      <b-input custom-class="is-size-7-mobile" v-model="form.address" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Correo">
      <b-input custom-class="is-size-7-mobile" icon="email" v-model="form.email" placeholder="correo@ejemplo.com"/>
    </b-field>
    <b-field custom-class="is-size-7-mobile" label="Teléfono" grouped>
      <b-select>
        <option>+56 9</option>
        <option>51 2</option>
      </b-select>
      <b-input custom-class="is-size-7-mobile" v-model="form.phone" icon="phone" />
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel"  class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="addCompany" icon-left="content-save" class="is-success is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>
<script>
import Cleave from 'cleave.js'

const cleave = {
  name: 'cleave',
  bind(el, binding) {
    const input = el.querySelector('input')
    input._vCleave = new Cleave(input, binding.value)
  },
  unbind(el) {
    const input = el.querySelector('input')
    input._vCleave.destroy()
  }
}

import { TOGGLE_ADD_FORM } from '@/store/mutations.type'
import { ADD_COMPANY } from '@/store/actions.type'
export default {
  directives: { cleave },
  data() {
    return {
      form: {
        name: '',
        description: '',
        rut: '',
        address: '',
        email: '',
        phone: ''
      },
      masks: {
        rut: {
          delimiters: ['.', '.', '-'],
          blocks: [2, 3, 3, 1]
        }
      }
    }
  },
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_ADD_FORM)
    },
    addCompany() {
      this.$store.dispatch(ADD_COMPANY, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_FORM)
          this.$buefy.toast.open({
            message: 'Empresa agregada con éxito',
            type: 'is-success'
          })
        })
    }
  },
}
</script>