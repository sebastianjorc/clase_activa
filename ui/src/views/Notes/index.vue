<template>
  <div id="notes">
    <st-toolbar
      :add-item="addNote"
      :edit-item="editNote"
      :remove-item="removeNote"
    />
    <add-note v-if="showAddNote" />
    <edit-note v-if="showEditNote" />
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
  import { TOGGLE_ADD_NOTE, TOGGLE_EDIT_NOTE } from '@/store/mutations.type'
  import { GET_NOTES } from '@/store/actions.type'
  import { mapState } from 'vuex'

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
      showAddNote: state => state.note.showAddNote,
      showEditNote: state => state.note.showEditNote,
      notes: state => state.note.all
    })
  },
  methods: {
    addNote() {
      this.$store.commit(TOGGLE_ADD_NOTE);
    },
    editNote() {
      this.$store.commit(TOGGLE_EDIT_NOTE);
    },
    removeNote() {
      
    },
    created() {
      this.$store.dispatch(GET_NOTES, { page:1 });
    }

  }
  

}
</script>