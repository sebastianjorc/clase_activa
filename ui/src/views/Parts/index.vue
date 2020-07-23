<template>
  <div id="parts">
    <b-tabs type="is-boxed" expanded>
      <b-tab-item label="Productos">
        <st-toolbar 
          :add-item="addPart"
          :edit-item="editPart"
          :remove-item="removePart"
        />
        <add-part v-if="showAddForm" />
        <edit-part v-if="showEditForm" />
        <st-table 
          :columns="PARTS_COLUMNS"
          :data="parts.data"
          :total="parts.total"
          :current="parts.current_page"
          :per-page="parts.per_page"
        />
      </b-tab-item>
      <b-tab-item label="Inventario">
        <st-toolbar />
        <add-stock v-if="showAddPart" />
        <st-table :columns="STOCKS_COLUMNS" :data="[]" />
      </b-tab-item>
    </b-tabs>
  </div>
</template>

<script>
  import StToolbar from '@/components/StToolbar'
  import StTable from '@/components/StTable'
  import AddPart from './AddPart'
  import EditPart from './EditPart'
  import AddStock from './AddStock'
  import { PARTS_COLUMNS, STOCKS_COLUMNS } from './parts.table'
  import { DEFAULT_FORM_STATE, CLEAR_SELECTED_ROW } from '@/store/mutations.type'
  import { GET_PARTS, GET_COMPANIES , REMOVE_PART } from '@/store/actions.type'
  import { mapGetters } from 'vuex'
  export default {
    components: {
      StToolbar,
      StTable,
      AddPart,
      EditPart,
      AddStock
    },
    data() {
      return {
        PARTS_COLUMNS: PARTS_COLUMNS,
        STOCKS_COLUMNS: STOCKS_COLUMNS,
        REMOVE_PART: REMOVE_PART
      }
    },
    computed: {
      ...mapState({
        parts: state => state.part.all,
      }),
      ...mapGetters(['showAddForm', 'showEditForm'])
    },
    methods: {
      
      defaultState() {
        this.$store.commit(DEFAULT_FORM_STATE)
        this.$store.commit(CLEAR_SELECTED_ROW)
      },
      addPart() {
        this.$store.commit(TOGGLE_ADD_FORM)
      },
      editPart() {
        this.$store.commit(TOGGLE_EDIT_FORM)
      },
      removePart() {
        
      }
    },
    computed: {
      ...mapGetters({
        showAddPart: 'showAddForm',
        showEditPart: 'showEditForm',
        parts: 'getParts',
      })
    },
    created() {
      this.$store.dispatch(GET_PARTS, { page: 1 })
      this.$store.dispatch(GET_COMPANIES, { page: 1 })
    },
  }
</script>