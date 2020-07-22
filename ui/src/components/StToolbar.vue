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
          @click="edit"
          icon-left="circle-edit-outline" 
          class="is-warning is-size-7-mobile" 
          label="Editar"
          outlined
          :disabled="!isSelected"
        />
      </div>
<<<<<<< HEAD
      <div class="level-item">
=======
      <!-- <div class="level-item">
>>>>>>> maintpro
        <b-button 
          @click="remove" 
          icon-left="delete-outline" 
          class="is-danger is-size-7-mobile"
          label="Eliminar"
          outlined 
          :disabled="!isSelected" 
          />
      </div> -->
    </div>
    <div class="level-right">
      <div class="level-item">
        <b-button
          @click="remove"
          icon-left="delete-outline"
          class="is-danger is-size-7-mobile"
          label=""
          outlined
          :disabled="!isSelected"
        />
      </div>
    </div>
<<<<<<< HEAD
=======

<!-- <b-modal 
      :active.sync="isActive"
      trap-focus
      aria-role="dialog"
      aria-modal
      has-modal-card
    >

       <div class="modal-card" style="width: auto">
        <header class="modal-card-head">
          <p class="modal-card-title">Eliminar elemento</p>
        </header>
        <section class="modal-card-body">
          <h1 class="subtitle">¿Está Seguro?</h1>
        </section>
        <footer class="modal-card-foot">
          <b-button @click="close" label="Cancelar" />
          <b-button 
            class="is-danger is-size-7-mobile"
            label="Si, Eliminar"
            @click="remove"
          />
        </footer>
      </div> 
    </b-modal> -->
    <!-- <div class="level-right">
      <div class="level-item">
        <b-button
          @click="details"
          icon-left="information-outline"
          class="is-info is-size-7-mobile"
          label="Detalles"
          outlined
          :disabled="!isSelected"
        />
      </div>
    </div> -->
>>>>>>> maintpro
    <!-- <div class="level-right">
      <div class="level-item">
        <b-button
          @click="cancel"
          icon-left="close"
          class="is-danger is-size-7-mobile"
          label="Cancelar"
          outlined
          v-if="isSelected"
        />
      </div>
    </div> -->
  </nav>
</template>
<script>

<<<<<<< HEAD
import { mapGetters } from 'vuex'
=======
import { 
  TOGGLE_ADD_FORM,
  TOGGLE_EDIT_FORM,
  DEFAULT_FORM_STATE,
  CLEAR_SELECTED_ROW 
} from '@/store/mutations.type'
import { mapGetters } from 'vuex'
import StModalRemove from './StModalRemove'
>>>>>>> maintpro

export default {
  name: 'StToolbar',
  props: {
    removeItem: String
  },
  components: {
    StModalRemove
  },
  data() {
    return {
      isActive: false
    }
  },
  methods: {
    add() {
      this.$store.commit(TOGGLE_ADD_FORM);
    },
    edit() {
      this.$store.commit(TOGGLE_EDIT_FORM);
    },
    remove() {
<<<<<<< HEAD
      this.removeItem()
    },
=======
      this.$buefy.modal.open({
        parent: this,
        component: StModalRemove,
        hasModalCard: true,
        trapFocus: true,
        events: {
          'confirm' : value => {
            if (value) {
              this.$store.dispatch(this.removeItem, this.getSelectedRow.id)
                .then((response) => {
                  this.$store.commit(DEFAULT_FORM_STATE)
                  this.$store.commit(CLEAR_SELECTED_ROW)
                  this.close()
                  this.$buefy.toast.open({
                    message: 'Eliminado con éxito',
                    type: 'is-danger'
                  })
                });
            }
          }
        }
      })

    },
    close() {
      
    },
    details() {
      // this.detailsItem()
    }
>>>>>>> maintpro
    // cancel() {
      
    // }
  },
  computed: {
    ...mapGetters(['getSelectedRow']),
<<<<<<< HEAD
    isSelected(){
      return this.getSelectedRow === null ? false : true
=======
    isSelected() {
      return this.getSelectedRow === null ? false : true;
>>>>>>> maintpro
    }
  },
}
</script>