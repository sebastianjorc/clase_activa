<template>
  <div id="notes">
    <st-toolbar
      :add-item="addNote"
      :edit-item="editNote"
      :remove-item="removeNote"
    />
    <add-note v-if="showAddForm" />
    <edit-note v-if="showEditForm" />
    <st-table
      :columns="NOTES_COLUMNS"
      :data="notes.data"
      :total="notes.total"
      :current="notes.current_page"
      :per-page="notes.per_page"
    />
  </div>
</template>

<script>
  import StToolbar from '@/components/StToolbar'
  import StTable from '@/components/StTable'
  import AddNote from './AddNote'
  import EditNote from './EditNote'
  import { NOTES_COLUMNS } from './notes.table'
  import { TOGGLE_ADD_FORM, TOGGLE_EDIT_FORM } from '@/store/mutations.type'
  import { GET_NOTES } from '@/store/actions.type'
  import { mapState, mapGetters } from 'vuex'

export default {
  components: {
    StToolbar,
    StTable,
    AddNote,
    EditNote
  },
  data() {
    return {
      NOTES_COLUMNS: NOTES_COLUMNS
    }
  },
  computed: {
    ...mapState({
      notes: state => state.note.all
    }),
    ...mapGetters(['showAddForm', 'showEditForm'])
  },
  methods: {
    addNote() {
      this.$store.commit(TOGGLE_ADD_FORM);
    },
    editNote() {
      this.$store.commit(TOGGLE_EDIT_FORM);
    },
    removeNote() {
      
    },
    created() {
      this.$store.dispatch(GET_NOTES, { page:1 });
    }

  }
  

}
</script>