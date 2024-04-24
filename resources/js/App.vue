<template>

  
  <router-view></router-view>
</template>

<script>
import axios from "./util/axios";

export default {
  data() {
    return {
      test:[]
    };
  },
  name: "App",
  watch: {
    "$store.getters.currentPage"(newPage, oldPage) {
      if (newPage === 0) {
        document.body.style.backgroundImage =
          'url("background/background.jpg")';
      } else {
        document.body.style.backgroundImage = "";
      }
    },
  },
  created() {
    //document.body.style.backgroundImage = 'url("background/background.jpg")';
    (async () => {
      await this.testing();
      await console.log(this.test);
    })();
  },
  methods: {
    async testing() {
      try {
        const t = await axios.get(
          "api/get-addresses"
        );
        this.test =  await t.data;
        //console.log(this.test);
      } catch (err) { 
        console.log("error", err);
      }
    },
  },
};
</script>

<style>
* {
  transition: 200ms;
}

::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
