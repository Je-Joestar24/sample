<template>
  <div
    class="w-screen-xl flex flex-wrap items-center justify-center mx-auto p-4"
  >
    <div class="relative p-4 w-full max-w-xl max-h-full sm:mt-20 md:mt-40">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div
          class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600"
        >
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
            {{ active }}
          </h3>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5">
          <!-- forms -->
          <signUpForm
            v-if="active == 'Sign up'"
          ></signUpForm>
          <loginForm
            v-if="active == 'Login'"
          ></loginForm>
          <reportForm
            v-if="active == 'Reports'"
          ></reportForm>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { onMounted } from "vue";
import { initModals } from "flowbite";

onMounted(() => {
  initModals();
});
</script>

<script>
import loginForm from "./ModalForms/loginForms.vue";
import signUpForm from "./ModalForms/signUpForm.vue";
import reportForm from "./ModalForms/reportForm.vue";

export default {
  data() {
    return {};
  },
  props:['active'],
  components: {
    loginForm,
    signUpForm,
    reportForm,
  },
};
</script>