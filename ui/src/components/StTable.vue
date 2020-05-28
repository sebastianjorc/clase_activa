<template>
  <b-table
    hoverable
    narrowed
    paginated
    backend-pagination
    :total="total"
    :per-page="perPage"
    :data="isEmpty ? [] : data"
    :columns="columns"
    :checked-rows.sync="checkedRows"
    :current.sync="current"
    checkable
  >
    <template slot="empty">
      <section class="section">
        <div class="content has-text-grey has-text-centered">
          <p><b-icon icon="emoticon-sad" size="is-large"></b-icon></p>
          <p>No hay datos.</p>
        </div>
      </section>
    </template>
    <template slot="bottom-left">
      <b>Seleccionados</b>: {{ checkedRows.length }}
    </template>
    <b-input
      v-if="!props.column.numeric && !isEmpty"
      slot="searchable"
      slot-scope="props"
      v-model="props.filters[props.column.field]"
      placeholder="Filtrar..."
      icon="magnify"
      size="is-small" 
    />
  </b-table>
</template>
<script>
import { mapState } from 'vuex'
export default {
  name: 'StTable',
  data() {
    return {
      checkedRows: [],
      page: 1
    }
  },
  props: {
    data: Array,
    columns: Array,
    total: Number,
    current: Number,
    perPage: Number,
  },
  computed: {
    isEmpty() {
      return this.data!=undefined && this.data.length < 1
    }
  }
  
}
</script>