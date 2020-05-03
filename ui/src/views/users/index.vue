<template>
  <div class="app-container">
    <el-input
      v-model="filter"
      placeholder="Filtrar"
      style="margin-bottom:30px;"
    />
    <el-table
      v-loading="loading"
      :data="users"
      element-loading-text="Cargando..."
      border
      fit
      highlight-current-row
    >
      <el-table-column
        v-for="column in columns"
        :key="column.prop"
        :prop="column.prop"
        :label="column.label"
      />
    </el-table>
  </div>
</template>

<script>

import { mapState } from 'vuex'

export default {
  data() {
    return {
      filter: '',
      loading: true,
      columns: [
        {
          prop: 'id',
          label: 'ID',
          width: '95px'
        },
        {
          prop: 'name',
          label: 'Nombre'
        },
        {
          prop: 'email',
          label: 'Correo'
        },
        {
          prop: 'phone',
          label: 'Teléfono'
        },
        {
          prop: 'rut',
          label: 'RUT'
        },
        {
          prop: 'dob',
          label: 'Fecha de Nacimiento'
        },
        {
          prop: 'address',
          label: 'Dirección'
        }
      ]
    }
  },
  computed: {
    ...mapState('user', {
      users: state => state.users
    })
  },
  created() {
    this.loading = true
    this.$store.dispatch('user/getUsers').then(response => {
      this.loading = false
    })
  }
}
</script>
