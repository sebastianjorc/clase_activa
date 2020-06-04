<template>
  <nav class="navbar has-shadow is-fixed-top">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item">
          <a class="navbar-item" @click="toggleSidebar"><b-icon icon="menu"/></a>
          <p class="navbar-item brand-text">MiApp</p>
        </a>
      </div>
      <div class="navbar-menu">
        <div class="navbar-start">
        </div>
        <div class="navbar-end">
          <a @click="logout" class="navbar-item">
            <b-icon icon="logout" />
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import { LOGOUT } from '@/store/actions.type'
import { TOGGLE_SIDEBAR } from '@/store/mutations.type'

export default {
  name: 'TheNavbar',
  data() {
    return {
      
    }
  },
  methods: {
    toggleSidebar() {
      this.$store.commit(TOGGLE_SIDEBAR)
    },
    logout(){
      this.$store.dispatch(LOGOUT)
        .then(() => {
          this.$router.push({ path: '/login' })
        })
    }    
  }
}
</script>

<style lang="scss">

.navbar-item.brand-text {
    font-weight: 300;
}

nav.navbar {
    margin-bottom: 1rem;
}
  
</style>