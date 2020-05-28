<template>
  <b-pagination
    :total="total"
    :current.sync="current"
    :range-before="rangeBefore"
    :range-after="rangeAfter"
    :per-page="perPage"
    aria-next-label="Página siguiente"
    aria-previous-label="Página anterior"
    aria-page-label="Página"
    aria-current-label="Página actual"
  />
</template>

<script>
export default {
  name: 'StPagination',
  props: {
    total: Number,
    current: Number,
    perPage: Number,
    
  },
  data() {
    return {
      total: 200,
      current: 10,
      perPage: 10,
      rangeBefore: 3,
      rangeAfter: 1,
    }
  },
  
}
</script>