<template >
  <div id="app" >
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">
    <router-view />
  </div>
</template>

<script>
export default {
    data() {
      return {
        pagesWithoutNavBar: [
          "/login" // add here all your paths where u wish to not have your navbar
        ] 
      } 
    },
    computed: {
      shouldNotHaveNavBar() {
        return !this.pagesWithoutNavBar.includes(this.$route.path);
      }
    },
    metaInfo() { 
      return { 
        bodyAttrs: { 
          class: this.shouldNotHaveNavBar ? "has-navbar-fixed-top" : "",
          style: this.shouldNotHaveNavBar ? "padding-top: 5rem;" : ""
        }
      }
    }
}
</script>

<style scoped lang="scss">

</style>
