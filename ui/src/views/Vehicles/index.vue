<template>
  <div id="vehicles">
    <b-tabs type="is-boxer" expanded>
      <b-tab-item label="Vehículos">
        <st-toolbar
          :add-item="addVehicle"
          :edit-item="editVehicle"
          :remove-item="removeVehicle"
        />
        <add-vehicle v-if="showAddVehicle" />
        <edit-vehicle v-if="showEditVehicle" />
        <st-table
          :columns="VEHICLES_COLUMNS"
          :data="vehicles.data"
          :total="vehicles.total"
          :current="vehicles.current_page"
          :per-page="vehicles.per_page"
        />
      </b-tab-item>
      <b-tab-item label="Marcas/Modelos">
        <st-toolbar 
          :add-item="addMake"
          :edit-item="editMake"
          :remove-item="removeMake"
        />
        <add-maker v-if="showAddMake" />
        <edit-maker v-if="showEditMake" />
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
  import { TOGGLE_ADD_VEHICLE, TOGGLE_EDIT_VEHICLE } from '@/store/mutations.type'
  import { mapState } from 'vuex'

export default {
  components: {
    StToolbar,
    StTable,
    AddVehicle,
    EditVehicle
  },
  data() {
    return {
      makes: [],
      VEHICLES_COLUMNS: VEHICLES_COLUMNS,
      MAKES_COLUMNS: MAKES_COLUMNS
    }
  },
  computed: {
    ...mapState({
      showAddVehicle: state => state.vehicle.showAddVehicle,
      showEditVehicle: state => state.vehicle.showEditVehicle,
      showAddMake: state => state.make.showAddMake,
      showEditMake: state => state.make.showEditMake,
      vehicles: state => state.vehicle.all
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