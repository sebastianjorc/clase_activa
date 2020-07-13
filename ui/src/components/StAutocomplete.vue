<template>
  <b-autocomplete
    :data="data"
    :placeholder="placeholder"
    :icon="icon"
    clearable
    @select="option => selected = option"
  >
    <template slot="empty">No hay resultados</template>
  </b-autocomplete>
</template>

<script>
export default {
  name: 'StAutocomplete',
  props: {
    data: Array,
    placeholder: String,
    icon: String
  },
  computed: {
    filteredDataArray() {
      return this.data.filter((option) => {
        return option
          .toString()
          .toLowerCase()
          .indexOf(this.name.toLowerCase()) >= 0
      })
    }
  },
}
</script>