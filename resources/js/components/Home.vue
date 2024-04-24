<template>
  <loading v-if="load"></loading>
  <div v-if="!load" class="HomePage">
    <nav class="bg-blue-500 border-gray-400 dark:bg-gray-900 NavUp opacity-90">
      <Navigations
        :navs="navs"
        :active="active"
        @change-active="changeActive"
        @reload="reload"
        :user-logged="loggedIn"
      ></Navigations>
    </nav>
    <div class="p-4">
      <HomeContents :active="active"> </HomeContents>
    </div>
  </div>
</template>

<script>
import Navigations from "./homeComponents/Nav/Navigations.vue";
import HomeContents from "./homeComponents/Contents/HomeContents.vue";
import loading from "./loading.vue";

export default {
  data() {
    return {
      navs: ["Home"],
      active: "Home",
      Logged: false,
      load: true,
    };
  },
  components: {
    Navigations,
    HomeContents,
    loading,
  },
  methods: {
    changeActive(i) {
      this.active = i;
    },
    checkIfLogged() {
      if (localStorage.getItem("logged")) {
        return (
          localStorage.getItem("level") == 3 && localStorage.getItem("logged")
        );
      }
    },
    reload() {
      this.load = true;
      console.log(this.load);
      setTimeout(() => {
        this.load = false;
      }, 1000);
    },
  },
  computed: {
    loggedIn() {
      const logged = this.checkIfLogged();
      const booleans = {
        true: true,
        false: false,
      };
      return booleans[logged];
    },
  },
  mounted() {
    setTimeout(() => {
      this.load = false;
    }, 1000);
    if (this.$store.getters.verificationResult && this.$store.getters.level) {
      this.navs.push("Reports");
    }else{
      this.navs.push("Sign up");
      this.navs.push("Login");
    }

    document.body.style.backgroundImage = 'url("background/background.jpg")';
  },
};
</script>

<style scoped>
.HomePage {
  height: 100vh;
}
</style>