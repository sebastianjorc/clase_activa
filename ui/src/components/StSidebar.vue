<template>
  <div id="sidebar">

    <b-menu 
      v-show="isHidden"
      class="is-fixed is-fullheight"
    >
      <!-- TODO CATEGORIZAR LAS RUTAS -->
      <b-menu-list label="Menu">
        <b-menu-item
          v-for="route in routes" 
          :key="route.path" 
          :icon="route.meta.icon" 
          :label="route.meta.name"
          tag="router-link"
          :to="route.path"
        />
      </b-menu-list>
    </b-menu>
  </div>
</template>

<script>
import { mapState } from 'vuex'
export default {
  computed: {
    ...mapState({
      isHidden: state => state.sidebar.isHidden
    }),
    routes() {
      return this.$router.options.routes[0].children
    }
  },
}
</script>

<style lang="scss">

.is-fixed{
  position: fixed;
}

.is-fullheight{
  height: 100%;
  max-height: 100%;
}


  
</style>
