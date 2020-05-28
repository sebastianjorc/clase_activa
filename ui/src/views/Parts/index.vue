<template>
  <div id="parts">
    <!-- <st-toolbar /> -->

    <b-tabs type="is-boxed" expanded>
      <b-tab-item label="Productos">
        <st-toolbar 
          :add-item="addPart"
          :edit-item="editPart"
          :remove-item="removePart"
        />
        <add-part v-if="showAddPart" />
        <edit-part v-if="showEditPart" />
        <st-table 
          :columns="PARTS_COLUMNS"
          :data="parts.data"
          :total="parts.total"
          :current="parts.current_page"
          :per-page="parts.per_page"
        />
      </b-tab-item>
      <b-tab-item label="Inventario">
        <st-table :columns="STOCKS_COLUMNS" :data="stocksData" />
      </b-tab-item>
    </b-tabs>
  </div>
</template>

<script>
  import StToolbar from '@/components/StToolbar'
  import StTable from '@/components/StTable'
  import AddPart from './AddPart'
  import EditPart from './EditPart'
  import { PARTS_COLUMNS, STOCKS_COLUMNS } from './parts.table'
  import { TOGGLE_ADD_PART, TOGGLE_EDIT_PART } from '@/store/mutations.type'
  import { GET_PARTS } from '@/store/actions.type'
  import { mapState } from 'vuex'
  export default {
    components: {
      StToolbar,
      StTable,
      AddPart,
      EditPart
    },
    data() {
      return {
        stocksData: [
          {
            id: '1',
            part: 'Producto 1',
            quantity: '10',
            price: '10000'
          }
        ],
        PARTS_COLUMNS: PARTS_COLUMNS,
        STOCKS_COLUMNS: STOCKS_COLUMNS,
      }
    },
    computed: {
      ...mapState({
        showAddPart: state => state.part.showAddPart,
        showEditPart: state => state.part.showEditPart,
        parts: state => state.part.all,
      })
    },
    methods: {
      addPart() {
        this.$store.commit(TOGGLE_ADD_PART)
      },
      editPart() {
        this.$store.commit(TOGGLE_EDIT_PART)
      },
      removePart() {
        
      }
    },
    created() {
      this.$store.dispatch(GET_PARTS, { page: 1 })
    },
  }
</script>