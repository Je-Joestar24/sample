<template>
  <div class=" md:ps-60 pt-10">
    <statistical
      v-if="$store.getters.CurrentActiveSideBar == 'innerStatistics'"
    ></statistical>
    <statistical
      v-if="$store.getters.CurrentActiveSideBar == 'innerNarrative'"
    ></statistical>
  </div>
</template>

<script>
import statistical from "./reports/statistical.vue";
import narrative from "./reports/narative.vue";

export default {
  components: {
    statistical,
    narrative
  },
  computed: {},
};
</script>