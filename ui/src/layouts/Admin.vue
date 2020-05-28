<template>
  <div id="admin">
    <st-navbar />
    <div class="container">
      <div class="columns">
        <div class="column">
          <st-sidebar class="sidebar" />
        </div>
        <div 
          class="column"
          :class="[ isHidden ? 'is-10' : 'is-12' ]"
        >
          <router-view class="views"/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import StBreadcrumbs from '@/components/StBreadcrumbs'
import StNavbar from '@/components/StNavbar'
import StSidebar from '@/components/StSidebar'

import { mapGetters } from 'vuex'

export default {
  name: 'App',
  components: {
    StBreadcrumbs,
    StNavbar,
    StSidebar
  },
  computed: {
    ...mapGetters(['isHidden'])
  }
}
</script>

<style lang="scss">

.is-10{
  margin-left: 0.8rem;
}
  
</style>