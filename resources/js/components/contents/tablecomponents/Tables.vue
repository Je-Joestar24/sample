

<template>
  <div class="relative overflow-x-auto">
    <TableTopComponents
      :change-form="changeCurrentForm"
      class="px-2"
    ></TableTopComponents>
    <table
      class="w-full text-sm text-left rtl:text-right"
      :class="{
        'text-gray-400': $store.getters.theme,
        ' text-gray-500 ': !$store.getters.theme,
      }"
    >
      <!-- dark:text-gray-400 -->
      <thead
        class="text-xs uppercase"
        :class="{
          'text-gray-400 bg-gray-700': $store.getters.theme,
          ' bg-gray-50': !$store.getters.theme,
        }"
      >
        <!-- dark:bg-gray-700 dark:text-gray-400 -->
        <TableHeaders
          v-if="tabElems[$store.state.CurrentTableIndexPos]"
          :tab-elems="tabElems"
          :tab-index="$store.state.CurrentTableIndexPos"
        ></TableHeaders>
      </thead>
      <tbody>
        <TableBody
          v-if="tabElems[$store.state.CurrentTableIndexPos]"
          :tab-elems="tabElems"
          :tab-index="$store.state.CurrentTableIndexPos"
          :change-form="changeCurrentForm"
        ></TableBody>
      </tbody>
    </table>
    <Modals :current-form="currentOpenForm"></Modals>
  </div>
</template>

<script>
import TableTopComponents from "./tableSubComponents/TableTopComponents.vue";
import TableHeaders from "./tableSubComponents/TableHeaders.vue";
import TableBody from "./tableSubComponents/TableBody.vue";
import Modals from "./tableSubComponents/tableModals/Modals.vue";

export default {
  components: {
    TableTopComponents,
    TableHeaders,
    TableBody,
    Modals,
  },
  props: ["tabElems"],
  data() {
    return {
      modalIsOpen: false,
      currentOpenForm: "Add",
    };
  },
  mounted() {},
  methods: {
    initializeDataTable() {
      /* $(document).ready(() => {
        $("#tableUsed").dataTable({
          searching: false,
          lengthMenu: [5],
          lengthChange: false,
          pagingType: "simple_numbers",
        });

        $(".dataTables_paginate").css("float", "right");
        $(".dataTables_paginate").css("height", "1px");
        $(".dataTables_paginate .paginate_button").css("font-size", "12px");
      }); */
    },
    closeIt() {
      this.modalIsOpen = false;
    },
    openIt() {
      this.modalIsOpen = true;
    },
    changeCurrentForm(newForm) {
      this.currentOpenForm = newForm;
    },
  },
};
</script>
