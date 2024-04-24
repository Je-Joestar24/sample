<template>

  <loading v-if="!logged"></loading>
  <div
    v-if="logged"
    id="sidebar"
    class="sidebar"
    :class="{
      'bg-gray-800 border-gray-700': $store.getters.theme,
      'bg-white border-gray-200': !$store.getters.theme,
    }"
  >
    <NavigationBar v-if="pages.length > 0" :page="pages"> </NavigationBar>

    <div class="p-4 sm:ml-64">
      <div
        id="DisplayContentArea"
        class="p-4 mt-14"
        :class="{ 'border-gray-700': this.$store.getters.theme }"
      >
        <div class="container">
          <h1
            class="text-xl font-bold p-3 border rounded shadow-lg mb-10"
            :class="{
              'text-gray-100 border-gray-700': $store.getters.theme,
              ' bg-gray-50': !$store.getters.theme,
            }"
          >
            {{ $store.state.CurrentActiveTitleNavigation }}
          </h1>
          <router-view></router-view>
        </div>
        
      </div>
    </div>
  </div>

</template>

<script>
import NavigationBar from "./Navigations/NavigationBar.vue";
import loading from "./loading.vue";

export default {
  components: {
    NavigationBar,
    loading
  },
  created() {
    this.pages = this.$store.getters.pages;
    setTimeout(()=>{
      this.logged = true;
    },1000);
    if(!this.$store.getters.verificationResult || !(this.$store.getters.level == 2 || this.$store.getters.level == 1)) this.$router.push('/');
    document.body.style.backgroundImage = "";
  },
  data() {
    return {
      pages: [],
      logged:false
    };
  },
};
</script>