<template>
  <nav class="breadcrumb">
    <ul>
      <li v-for="(crumb, index) in crumbs" :key="index">
        <router-link :to="crumb.to">{{crumb.name}}</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  computed: {
    crumbs: function() {
      let pathArray = this.$route.path.split("/")
      //pathArray.shift()
      let breadcrumbs = pathArray.reduce((breadcrumbArray, path, idx) => {
        breadcrumbArray.push({
          path: path,
          to: breadcrumbArray[idx - 1]
            ? breadcrumbArray[idx - 1].path + "/" + path
            : "/" + path,
          name: this.$route.matched[idx].meta.name || path,
        });
        return breadcrumbArray;
      }, [])
      return breadcrumbs;
    }
  },
}
</script>

<style lang="scss">
a.is-active.router-link-active {
  color: #363636;
}
  
</style>