<template>
  <div class="modal-card" style="width: auto">
    <header class="modal-card-head">
      <p class="modal-card-title">Eliminar elemento</p>
    </header>
    <section class="modal-card-body is-centered">
      <h2 class="subtitle-is-4">¿Está Seguro?</h2>
    </section>
    <footer class="modal-card-foot">
      <b-button @click="$parent.close()" label="Cancelar" />
      <b-button 
        class="is-danger is-size-7-mobile"
        label="Si, Eliminar"
        @click="remove"
      />
    </footer>
  </div>
</template>

<script>
export default {
  name: 'StModalRemove',
  methods: {
    remove() {
      this.$emit('confirm', true)
      this.$parent.close()
    }
  },
  // props: ['removeItem'],
  // methods: {
  //   remove(){
  //     this.removeItem;
  //   }
  // }
}
</script>