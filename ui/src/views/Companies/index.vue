<template>
  <div id="companies">
    <st-toolbar :remove-item="REMOVE_COMPANY" />
    <add-company v-show="showAddCompany" />
    <edit-company v-show="showEditCompany" />
    <st-table
      :columns="COMPANIES_COLUMNS"
      :data="companies.data"
      :total="companies.total"
      :current="companies.current_page"
      :per-page="companies.per_page"
    />
  </div>
</template>

<script>
  import StToolbar from '@/components/StToolbar';
  import StTable from '@/components/StTable';
  import AddCompany from './AddCompany'
  import EditCompany from './EditCompany'
  import { COMPANIES_COLUMNS } from './companies.table';
  import { GET_COMPANIES, REMOVE_COMPANY } from '@/store/actions.type';
  import { mapGetters } from 'vuex';
export default {
  components: {
    StToolbar,
    StTable,
    AddCompany,
    EditCompany
  },
  data() {
    return {
      COMPANIES_COLUMNS: COMPANIES_COLUMNS,
      REMOVE_COMPANY: REMOVE_COMPANY
    }
  },
  computed: {
    ...mapGetters({
      showAddCompany: 'showAddForm',
      showEditCompany: 'showEditForm',
      companies: 'getCompanies'
    })
  },
  created() {
    this.$store.dispatch(GET_COMPANIES, { page: 1 });
  }
}
</script>