<template>
  <section class="hero is-primary is-fullheight">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-centered">MiApp</h1>
        <div class="columns is-centered">
          <div class="column is-5-tablet is-4-desktop is-3-widescreen">
            <form class="box">
              <b-field label="Correo">
                <b-input 
                  v-model="form.username"
                  type="email"
                  icon="email"
                  required
                />
              </b-field>
              <b-field label="Contraseña">
                <b-input
                  v-model="form.password"
                  type="password"
                  icon="lock"
                  required
                  password-reveal
                />
              </b-field>
              <b-field class="is-grouped is-grouped-right">
                <b-button @click="login" class="is-success" label="Entrar"/>
              </b-field>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { LOGIN } from '../store/actions.type'

export default {
  data() {
    return {
      form: {
        username: '',
        password: ''
      }
    }
  },
  methods: {
    login() {
      //TODO VALIDATE
      if (this.form.username && this.form.password) {
          this.$store.dispatch(LOGIN, this.form)
            .then(() => {
              this.$router.push({ path: '/' })
            })
      }
    }
  },
}
</script>

<style lang="scss">
h1.title {
  font-weight: 300;
}
</style>