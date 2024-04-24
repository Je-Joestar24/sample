<template>
    <div>
      <Tables v-if="tableElems.length > 0" :tab-elems="tableElems"> </Tables>
    </div>
  </template>
  <script>
  import Tables from "./tablecomponents/Tables.vue";
  
  export default {
    components: {
      Tables,
    },
    data() {
      return {
        tableElems: [],
      };
    },
    mounted() {
      this.getTables();
    },
    methods: {
      async getTables() {
        let res = await fetch("DatabaseConnections/tables.json");
        let data = await res.json();
        this.tableElems = data;
        //console.log(data);
      },
    },
  };
  </script>