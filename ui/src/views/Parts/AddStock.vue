<template>
  <b-tabs type="is-toggle">
    <b-tab-item label="Inventariar producto">
      <form class="box">
        <b-field custom-class="is-size-7-mobile" horizontal label="Producto">
          <b-autocomplete 
            placeholder="Escriba para buscar..."
            :data="filteredParts"
            keep-first
            open-on-focus
            clearable
            field="name"
            @select="option => form.part = option.id"
            v-model="part"
          />
        </b-field>
        <b-field custom-class="is-size-7-mobile" horizontal label="Código">
          <b-input v-model="form.code"/>
        </b-field>
        <b-field custom-class="is-size-7-mobile" horizontal label="Proveedor">
          <b-autocomplete 
            placeholder="Escriba para buscar..."
            :data="filteredCompanies"
            keep-first
            open-on-focus
            clearable
            field="name"
            v-model="company"
            @select="option => form.company = option.id"
          />
        </b-field>
        <b-field custom-class="is-size-7-mobile" horizontal label="Precio">
          <b-input
            v-cleave="masks.numeral"
            @input.native="onInput"
          />
        </b-field>
        <b-field custom-class="is-size-7-mobile" horizontal label="Cantidad">
          <b-slider v-model="form.quantity"/>
        </b-field>
        <b-field grouped position="is-right">
          <b-field>
            <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
          </b-field>
          <b-field>
            <b-button @click="addStock" icon-left="content-save" class="is-success is-size-7-mobile" label="Guardar" />
          </b-field>
        </b-field>
      </form>
    </b-tab-item>
    <b-tab-item label="Inventariar desde factura">

    </b-tab-item>
  </b-tabs>
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
import { TOGGLE_ADD_FORM } from '@/store/mutations.type';
import { ADD_STOCK } from '@/store/actions.type';
import { mapGetters } from 'vuex';
export default {
  directives: { cleave },
  data() {
    return {
      part: '',
      company: '',
      form: {
        part: null,
        code: '',
        company: null,
        price: 0,
        quantity: 1
      },
      masks: {
        numeral: {
          numeral: true,
          numeralDecimalMark: ',',
          delimiter: '.',
          numeralThousandsGroupStyle: 'thousand',
          prefix: '$ '
        },
      }
    }
  },
  methods: {
    addStock() {
      this.$store.dispatch(ADD_STOCK, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_FORM)
          this.$buefy.toast.open({
            message: 'Inventario agregado con éxito',
            type: 'is-success'
          })
        })
    },
    cancel() {
      this.$store.commit(TOGGLE_ADD_FORM)
    },
    onInput(event) {
      this.form.price = event.target._vCleave.getRawValue()
    }
  },
  computed: {
    ...mapGetters({
      parts: 'getParts',
      companies: 'getCompanies'
    }),
    filteredParts() {
      return this.parts.data.filter((option) => {
        return option.name
          .toString()
          .toLowerCase()
          .indexOf(this.part.toLowerCase()) >= 0
      })
    },
    filteredCompanies() {
      return this.companies.data.filter((option) => {
        return option.name
          .toString()
          .toLowerCase()
          .indexOf(this.company.toLowerCase()) >= 0
      })
    }
  }
}
</script>