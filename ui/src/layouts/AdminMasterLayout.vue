<template>
  <section>
    <nav class="rows navbar is-fixed-top">  
      <div class="hero is-black has-text-right sm">
        <label style="margin-right:5%;">
          <label class="button is-black is-small">Administrador</label>
          <button class="button is-black is-small">Desconectar</button>
      </label>
    </div>
      <b-navbar class="is-white">
        <template class ="navbar-brand" style="padding:0%;" slot="brand">        
            <b-navbar-item style="margin-left:10px; " tag="router-link" :to="{ path: '/' }">
                <img style="padding:0% !important;"
                    src="../assets/logo.png"
                    alt="Clase activa"
                >
            </b-navbar-item>
        </template>
        <template class="navbar-menu" slot="end"  >
          <b-navbar-item href="#" >
              Niveles
          </b-navbar-item>
          <b-navbar-item href="#">
              Cursos
          </b-navbar-item>
          <b-navbar-item href="#">
              Asignaturas
          </b-navbar-item>
          <b-navbar-item href="#">
              Materias
          </b-navbar-item>
          <b-navbar-dropdown label="MTC">
              <b-navbar-item href="#">
                  Lista MTC
              </b-navbar-item>
              <b-navbar-item href="#">
                  Nueva MTC
              </b-navbar-item>
          </b-navbar-dropdown>
          
          <b-navbar-dropdown label="PIO">
              <b-navbar-item href="#">
                  Lista PIO
              </b-navbar-item>
              <b-navbar-item href="#">
                  Nueva PIO
              </b-navbar-item>
          </b-navbar-dropdown>
          
          <b-navbar-item href="#">
              Estadisticas
          </b-navbar-item>
          
          <b-navbar-item href="#">
              Quienes somos
          </b-navbar-item>
          
          <b-navbar-item href="#" style="margin-right:8%;">
              Contacto
          </b-navbar-item>
        </template>    
      </b-navbar>
    </nav>
    <div 
      class="column"
      :class="[ isHidden ? 'is-10' : 'is-12' ]"
    >
      <router-view class="views"/>
    </div>    
  </section>
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

    .rows{
        display: flex;
        flex-direction: column;
    }

    .is-10{
    margin-left: 0.8rem;
    }
    
</style>