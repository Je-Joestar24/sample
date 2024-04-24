<template>
  <Title></Title>
  <Profile></Profile>
</template>

<script>
import Profile from "./navComponents/profile.vue";
import Title from "./navComponents/title.vue";

export default {
  components: {
    Profile,
    Title,
  },
};
</script>