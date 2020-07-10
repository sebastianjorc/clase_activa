<template>
  <div id="Nivel"  >
    <b-tabs type="is-boxed" expanded >
      
        <st-toolbar 
          :add-item="AddNivel"
          :edit-item="EditNivel"
          :remove-item="removeNivel"
        />
        <add-nivel v-if="showAddForm" />
        <edit-nivel v-if="showEditForm" />
        <st-table 
          :columns="NIVELS_COLUMNS"
          :data="Nivel.data"
          :total="Nivel.total"
          :current="Nivel.current_page"
          :per-page="Nivel.per_page"
        />
    </b-tabs>
  </div>
</template>

<script>
  import StToolbar from '@/components/StToolbar'
  import StTable from '@/components/StTable'
  import AddNivel from './AddNivel'
  import EditNivel from './EditNivel'
  import { NIVELS_COLUMNS, STOCKS_COLUMNS } from './nivel.table'
  import { TOGGLE_ADD_FORM, TOGGLE_EDIT_FORM } from '@/store/mutations.type'
  import { GET_NIVELS } from '@/store/actions.type'
  import { mapState, mapGetters } from 'vuex'
  export default {
    components: {
      StToolbar,
      StTable,
      AddNivel,
      EditNivel
    },
    data() {
      return {
        NIVELS_COLUMNS: NIVELS_COLUMNS,
       // STOCKS_COLUMNS: STOCKS_COLUMNS,
      }
    },
    computed: {
      ...mapState({
        Nivel: state => state.nivel.all,
      }),
      ...mapGetters(['showAddForm', 'showEditForm'])
    },
    methods: {
      AddNivel() {
        this.$store.commit(TOGGLE_ADD_FORM)
      },
      EditNivel() {
        this.$store.commit(TOGGLE_EDIT_FORM)
      },
      removeNivel() {        
      }
    },
    created() {
      this.$store.dispatch(GET_NIVELS, { page: 1 })
    },
  }
</script>