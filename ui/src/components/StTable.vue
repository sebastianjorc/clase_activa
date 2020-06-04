<template>
  <b-table
    hoverable
    narrowed
    paginated
    bordered
    focusable
    backend-pagination
    :total="total"
    :per-page="perPage"
    :data="isEmpty ? [] : data"
    :columns="columns"
    :select="setSelectedRow"
    :selected.sync="selected"
    :current.sync="current"
  >
    <template slot="empty">
      <section class="section">
        <div class="content has-text-grey has-text-centered">
          <p><b-icon icon="emoticon-sad" size="is-large"></b-icon></p>
          <p>No hay datos</p>
        </div>
      </section>
    </template>
    <!-- <template slot="bottom-left">
      <b-button 
        outlined
        class="is-danger" 
        icon-left="close" 
        label="Cancelar" 
        v-if="isSelected" 
        @click="clearSelected"
      />
      <b>Seleccionados</b>: {{ getSelectedRow.name }}
    </template> -->
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
import { mapGetters } from 'vuex'
import { SET_SELECTED_ROW } from '@/store/mutations.type'
export default {
  name: 'StTable',
  data() {
    return {
      page: 1,
      selected: null
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
    ...mapGetters(['getSelectedRow']),
    isEmpty() {
      return this.data != undefined && this.data.length < 1
    },
    setSelectedRow(){
      this.$store.commit(SET_SELECTED_ROW, this.selected)
    },
    isSelected() {
      return this.selected === null ? false : true
    }
  },
  // methods: {
  //   clearSelected(){
  //     this.selected = null
  //   }
  // },
  
}
</script>