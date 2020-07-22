<template>
  <form class="box">
    <h1 class="subtitle">Nuevo Vehículo</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="Marca">
      <b-autocomplete
        clearable
      >
        <template slot="empty">No hay resultados</template>
      </b-autocomplete>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Modelo">
      <b-autocomplete
        clearable
      >
        <template slot="empty">No hay resultados</template>
      </b-autocomplete>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Año">
      <b-autocomplete
        clearable
      >
        <template slot="empty">No hay resultados</template>
      </b-autocomplete>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Motor">
      <b-autocomplete
        clearable
      >
        <template slot="empty">No hay resultados</template>
      </b-autocomplete>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Cilindrada">
      <b-autocomplete
        clearable
      >
        <template slot="empty">No hay resultados</template>
      </b-autocomplete>
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel" class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="addVehicle" icon-left="content-save" class="is-success is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>

<script>
import { TOGGLE_ADD_FORM } from '@/store/mutations.type'
import { ADD_VEHICLE } from '@/store/actions.type'
export default {
  data() {
    return {
      form: {
        make: '',
        model: '',
        year: '',

      }
    }
  },
  methods: {
    cancel() {
      this.$store.commit(ADD_VEHICLE);
    },
    addVehicle() {
      this.$store.dispatch(ADD_VEHICLE, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_FORM)
          this.$buefy.notification.open({
            message: 'Vehículo agregado con éxito',
            type: 'is-success'
          })
        })
    }
  },
}
</script>