<template>
  <div
    class="max-w-screen-3xl flex flex-wrap items-center justify-between mx-auto p-4"
  >
    <a
      href="https://flowbite.com/"
      class="flex items-center space-x-3 rtl:space-x-reverse"
    >
      <!-- <img src="img/CrimeGuard.png" class="h-8" alt="Flowbite Logo" /> -->
      <span
        class="self-center text-2xl font-semibold whitespace-nowrap text-white"
        >Crim Guard</span
      >
    </a>
    <div class="w-auto" id="navbar-default">
      <ul
        class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lgn md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
      >
        <li v-for="(nav, i) in navs">
          <a
            href="#"
            class="block py-2 px-3 text-gray-100 rounded md:hover:bg-transparent md:border-0 md:p-0 dark:text-white hover:text-white"
            :class="{
              'text-white underline mt-1': nav == active,
              'hover:bg-gray-100 hover:mt-0.5': nav != active,
            }"
            @click="$emit('changeActive', nav)"
            >{{ nav }}</a
          >
          <!-- 
          <a
            v-if="i == 2 && userLogged"
            href="#"
            class="block py-2 px-3 text-gray-100 rounded md:hover:bg-transparent md:border-0 md:p-0 dark:text-white hover:text-white"
            :class="{
              'text-white underline mt-1': i == active,
              'hover:bg-gray-100 hover:mt-0.5': i != active,
            }"
            @click="
              changeActive(i);
              $store.commit('changeHomeCurrentModalForm', 2);
            "
            >Report Incident</a
          > -->
        </li>
        <li>
          <userProfile @reload="$emit('reload')" v-if="$store.getters.level == 3 && $store.getters.verificationResult"> </userProfile>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import userProfile from "./navComponents/userprofile.vue";

export default {
  props: ["navs", "active", "changeActive", "userLogged"],
  components: {
    userProfile,
  },
};
</script>