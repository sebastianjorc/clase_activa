<template>
  <form class="box">
    <h1 class="subtitle">Editar Empresa</h1>
    <b-field custom-class="is-size-7-mobile" horizontal label="ID">
      <h1 class="subtitle-is-6">{{ form.id }}</h1>
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Nombre">
      <b-input custom-class="is-size-7-mobile" v-model="form.name" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Descripción">
      <b-input custom-class="is-size-7-mobile" v-model="form.description" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="RUT">
      <b-input custom-class="is-size-7-mobile" v-model="form.rut" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Dirección">
      <b-input custom-class="is-size-7-mobile" v-model="form.address" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Correo">
      <b-input custom-class="is-size-7-mobile" v-model="form.email" />
    </b-field>
    <b-field custom-class="is-size-7-mobile" horizontal label="Teléfono">
      <b-input custom-class="is-size-7-mobile" v-model="form.phone" />
    </b-field>
    <b-field grouped position="is-right">
      <b-field>
        <b-button @click="cancel"  class="is-size-7-mobile" label="Cancelar" />
      </b-field>
      <b-field>
        <b-button @click="editCompany" icon-left="circle-edit-outline" class="is-warning is-size-7-mobile" label="Guardar" />
      </b-field>
    </b-field>
  </form>
</template>

<script>
import { TOGGLE_EDIT_FORM, CLEAR_SELECTED_ROW } from '@/store/mutations.type';
import { EDIT_COMPANY } from '@/store/actions.type';
import { mapGetters } from 'vuex';
export default {
  methods: {
    cancel() {
      this.$store.commit(TOGGLE_EDIT_FORM);
    },
    editCompany() {
      this.$store.dispatch(EDIT_COMPANY, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_EDIT_FORM);
          this.$store.commit(CLEAR_SELECTED_ROW);
          this.$buefy.toast.open({
            message: 'Empresa editada con éxito',
            type: 'is-warning'
          })
        })
    }
  },
  computed: {
    ...mapGetters(['getSelectedRow']),
    form: function() {
      const row = this.getSelectedRow;
      return {
        id: (row !== null) ? row.id : '',
        name: (row !== null) ? row.name : '',
        description: (row !== null) ? row.description : '',
        rut: (row !== null) ? row.rut : '',
        address: (row !== null) ? row.address : '',
        email: (row !== null) ? row.email : '',
        phone: (row !== null) ? row.phone : '',
      }
    }
  },
}
</script>