<template>
  <homeC v-if="active == 'Home'"></homeC>
  <div
    v-if="active == 1"
    class="max-w-screen-xl flex flex-wrap items-center bg-white justify-between mx-auto p-4 "
  >
    <about></about>
  </div>
  <ModalElems v-if="active == 'Sign up' || active == 'Login' || active == 'Reports'" :active="active"></ModalElems>
</template>

<script>
import ModalElems from "./contentModals/FormElems.vue";
import about from "./contentModals/about.vue";
import homeC from "./contentModals/homeC.vue"


export default {
  props: ["active"],
  components: {
    ModalElems,
    about,
    homeC
  },
  methods:{
    isLogged(){
      return localStorage.getItem('logged');
    }
  },
  computed:{
    loggedUser(){
      return this.isLogged();
    }
  }
};
</script>