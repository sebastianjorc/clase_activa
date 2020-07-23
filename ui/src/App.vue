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

<style lang="scss">

// Import Bulma's core
@import "~bulma/sass/utilities/_all";

// Set your colors
$primary: #8c67ef;
$primary-invert: findColorInvert($primary);
$twitter: #4099FF;
$twitter-invert: findColorInvert($twitter);

// Setup $colors to use as bulma classes (e.g. 'is-twitter')
$colors: (
    "white": ($white, $black),
    "black": ($black, $white),
    "light": ($light, $light-invert),
    "dark": ($dark, $dark-invert),
    "primary": ($primary, $primary-invert),
    "info": ($info, $info-invert),
    "success": ($success, $success-invert),
    "warning": ($warning, $warning-invert),
    "danger": ($danger, $danger-invert),
    "twitter": ($twitter, $twitter-invert)
);

// Links
$link: $primary;
$link-invert: $primary-invert;
$link-focus-border: $primary;

// Import Bulma and Buefy styles
@import "~bulma";
@import "~buefy/src/scss/buefy";
  
</style>

