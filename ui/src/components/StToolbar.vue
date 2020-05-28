<template>
  <nav class="level is-mobile">
    <div class="level-left">
      <div class="level-item">
        <b-button 
          @click="add" 
          icon-left="plus-circle-outline" 
          class="is-success is-size-7-mobile" 
          label="Nuevo"
          outlined
        />
      </div>
      <div class="level-item">
        <b-button 
          @click='edit' 
          icon-left="circle-edit-outline" 
          class="is-warning is-size-7-mobile" 
          label="Editar"
          outlined
          disabled
        />
      </div>
    </div>
    <div class="level-right">
      <div class="level-item">
        <b-button 
          @click="remove" 
          icon-left="delete-outline" 
          class="is-danger is-size-7-mobile"
          outlined 
          disabled 
          />
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'StToolbar',
  props: ['addItem', 'editItem', 'removeItem'],
  methods: {
    add() {
      this.addItem()
    },
    edit() {
      this.editItem()
    },
    remove() {
      this.removeItem()
    }
  }
}
</script>