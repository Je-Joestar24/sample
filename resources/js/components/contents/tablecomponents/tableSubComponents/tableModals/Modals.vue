<template>
  <!-- Main modal -->
  <div
    id="incident-modal"
    tabindex="-1"
    aria-hidden="true"
    data-modal-backdrop="static"
    class="hidden fixed inset-0 z-50 items-center justify-center"
  >
    <div
      class="bg-white dark:bg-gray-700 rounded-lg w-full shadow-zinc-900 shadow-2xl"
      :class="{
        'max-w-7xl': $store.getters.CurrentActiveSideBar != 'innerNameIncidents' && currentForm != 'Filter',
        'max-w-xl': currentForm == 'Filter' || ($store.getters.CurrentActiveSideBar == 'innerNameIncidents' || $store.getters.CurrentActiveSideBar == 'innerCitizenAccounts' || $store.getters.CurrentActiveSideBar == 'innerOfficerAccounts'),
      }"
    >
      <!-- Modal content -->
      <div class="p-4 md:p-5 border-b shadow rounded-t">
        <!-- Modal header -->
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            {{ currentForm }} <span style="text-transform:capitalize">{{ title }}</span>
          </h3>
          <button
            type="button"
            data-modal-hide="incident-modal"
            class="text-red-800 font-extrabold border dark:border-gray-400 px-2"
            >CLOSE</button
          >
          <!-- Close button -->
        </div>
        <!-- Modal body -->
        <incidentForm
          v-if="
            $store.state.CurrentTableIndexPos == 0 && currentForm == 'Add'
          "
        ></incidentForm>
        <incidentTypeForm
          v-if="
            $store.state.CurrentTableIndexPos !== 0 && currentForm == 'Add'
          "
        ></incidentTypeForm>
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
import incidentForm from "./modalForms/incidentsForm.vue";
import incidentTypeForm from "./modalForms/dynamicAddForm.vue";

export default {
  components: {
    incidentForm,
    incidentTypeForm,
  },
  data(){
    return {
      title:''
    }
  },
  props: ["currentForm"],
  computed:{
  },mounted(){
    this.getTitle();
  },methods:{
    
    getTitle(){
      this.title = this.$store.getters.currentActiveTitle;
      this.title = (this.title).toString().toLowerCase();
    }
  }
};
</script>