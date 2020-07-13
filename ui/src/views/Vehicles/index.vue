<template>
  <div id="vehicles">
    <b-tabs type="is-boxed" expanded>
      <st-toolbar />
      <b-tab-item label="Vehículos">
        <add-vehicle v-if="showAddForm" />
        <edit-vehicle v-if="showEditForm" />
        <st-table
          :columns="VEHICLES_COLUMNS"
          :data="vehicles.data"
          :total="vehicles.total"
          :current="vehicles.current_page"
          :per-page="vehicles.per_page"
        />
      </b-tab-item>
      <b-tab-item label="Marcas/Modelos">
        <add-make v-if="showAddForm" />
        <edit-make v-if="showEditForm" />
        <st-table 
          :columns="MAKES_COLUMNS"
          :data="makes.data"
          :total="makes.total"
          :current="makes.current_page"
          :per-page="makes.per_page"
        />
      </b-tab-item>
    </b-tabs>
  </div>
  
</template>

<script>
  import StToolbar from '@/components/StToolbar'
  import StTable from '@/components/StTable'

  import AddVehicle from './AddVehicle'
  import EditVehicle from './EditVehicle'

  import AddMake from './AddMake'
  import EditMake from './EditMake'

  import { VEHICLES_COLUMNS } from './vehicles.table'
  import { MAKES_COLUMNS } from './makes.table'
  import { mapGetters } from 'vuex'

export default {
  components: {
    StToolbar,
    StTable,
    AddVehicle,
    EditVehicle,
    AddMake,
    EditMake
  },
  data() {
    return {
      makes: [],
      VEHICLES_COLUMNS: VEHICLES_COLUMNS,
      MAKES_COLUMNS: MAKES_COLUMNS
    }
  },
  computed: {
    ...mapGetters({
      vehicles: 'getVehicles',
      showAddForm: 'showAddForm',
      showEditForm: 'showEditForm'
    })
  },
  methods: {
    addVehicle() {
      this.$store.commit(TOGGLE_ADD_VEHICLE)
    },
    editVehicle() {
      this.$store.commit(TOGGLE_EDIT_VEHICLE)
    },
    removeVehicle() {
      
    },
    addMake() {
      this.$store.commit(TOGGLE_ADD_MAKE)
    },
    editMake() {
      this.$store.commit(TOGGLE_EDIT_MAKE)
    },
    removeMake() {
      
    }
  },
  
}
</script>