
<template>
  <div >
    <Linki />
    <router-view></router-view>
    <Archive/>
  </div>
</template>


<script>
import Archive from './views/Archive.vue';
import Linki from "./views/Linki.vue";
export default {
  name: "App",
  components: {
    Linki,
    Archive,

  },
};
</script>