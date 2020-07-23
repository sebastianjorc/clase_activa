<template>
  <section class="hero is-primary welcome is-small">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">Bienvenido Apoderado</h1>
        <h2 class="subtitle">Dashboard</h2>
      </div>
    </div>
  </section>
</template>

<script>
import { TOGGLE_ADD_FORM } from '@/store/mutations.type'
import { ADD_VEHICLE } from '@/store/actions.type'
export default {
  data() {
    return {
      form: {
        make: '',
        model: '',
        year: '',

      }
    }
  },
  methods: {
    cancel() {
      this.$store.commit(ADD_VEHICLE);
    },
    addVehicle() {
      this.$store.dispatch(ADD_VEHICLE, this.form)
        .then((response) => {
          this.$store.commit(TOGGLE_ADD_FORM)
          this.$buefy.notification.open({
            message: 'Vehículo agregado con éxito',
            type: 'is-success'
          })
        })
    }
  },
}
</script>