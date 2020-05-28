<template>
  <b-button @click="addItem" icon-left="plus-circle-outline" class="is-success is-size-7-mobile" label="Nuevo"/>
</template>

<script>
export default {
  props: {
    label: String,
  }
  
}
</script>