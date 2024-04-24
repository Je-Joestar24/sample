<template>
  <form class="p-4 md:p-5" >
    <div v-for="model in formModel[$store.getters.CurrentActiveSideBar]">
      <p v-if="model.title" class="text-gray-700 mb-3">
        {{ "(" + model.title + ")" }}:
      </p>
      <div  v-bind:class="`grid gap-3`" :style="'display:grid; grid-template-columns: repeat('+model.cols+', 1fr);'">
        <div class="relative z-0 w-full mb-5 group"  v-for="mdl in model.infos">
          <input
            v-if="mdl.type != 'select'"
            :type="mdl.type"
            v-model="mdl.input"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
            required
          />
          <select
            v-if="mdl.type == 'select'"
            v-model="mdl.input"
            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
          >
            <option value="">{{ mdl.options.selected }}</option>
            <option v-for="opt in mdl.options.option" :value="opt.val">
              {{ opt.val }}
            </option>
          </select>
          <label
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >{{ mdl.label }}</label
          >
        </div>
      </div>
    </div>
    <button
      type="button"
      @click.prevent="extractData()"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-2.5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
      SAVE
    </button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      formModel: {
        innerNameIncidents: [
          {
            cols: 1,
            infos: [
              { type: "text", label: "Incident Name", input: "" },
              {
                type: "select",
                label: "Incident Type",
                input: "",
                options: {
                  selected: "Select Incident",
                  option: [
                    { nm: "Index", val: "Index" },
                    { nm: "Non Index", val: "Non-Index" },
                    { nm: "Special", val: "Special" },
                  ],
                },
              },
            ],
          },
        ],
        innerWitnesses: [
          {
            cols: '4',
            infos: [
              { type: "text", label: "FAMILY NAME", input: "" },
              { type: "text", label: "FIRST NAME", input: "" },
              { type: "text", label: "MIDDLE NAME", input: "" },
              { type: "text", label: "QUALIFIER", input: "" },
              { type: "text", label: "NICKNAME", input: "" },
              { type: "text", label: "CITIZENSHIP", input: "" },
              {
                type: "select",
                label: "GENDER",
                input: "",
                options: {
                  selected: "GENDER",
                  option: [
                    { nm: "MALE", val: "Male" },
                    { nm: "FEMALE", val: "Female" },
                  ],
                },
              },
              { type: "text", label: "CIVIL STATUS", input: "" },
              { type: "date", label: "DATE OF BIRTH", input: "" },
              { type: "number", label: "AGE", input: "" },
              { type: "text", label: "PLACE OF BIRTH", input: "" },
              { type: "text", label: "HOME PHONE", input: "" },
              { type: "text", label: "MOBILE PHONE", input: "" },
            ],
          },
          {
            title: "Current Adresses",
            cols: '5',
            infos: [
              { type: "text", label: "HOUSE NUMBER/STREET", input: "" },
              { type: "text", label: "VILLAGE/SITIO", input: "" },
              { type: "text", label: "BARANGAY", input: "" },
              { type: "text", label: "TOWN/CITY", input: "" },
              { type: "text", label: "PROVINCE", input: "" },
            ],
          },
          {
            title: "Other Adresses",
            cols: '5',
            infos: [
              { type: "text", label: "OTHER(HOUSE NUMBER/STREET)", input: "" },
              { type: "text", label: "OTHER(VILLAGE/SITIO)", input: "" },
              { type: "text", label: "OTHER(BARANGAY)", input: "" },
              { type: "text", label: "OTHER(TOWN/CITY)", input: "" },
              { type: "text", label: "OTHER(PROVINCE)", input: "" },
            ],
          },
          {
            title: "Additional Infos",
            cols: '5',
            infos: [
              { type: "text", label: "HIGHEST EDUCATION ATAINMENT", input: "" },
              { type: "text", label: "OCCUPATION", input: "" },
              { type: "text", label: "ID CARD PRESENTED", input: "" },
              { type: "text", label: "EMAIL ADDRESS", input: "" },
              { type: "text", label: "FB ACCOUNT", input: "" },
            ],
          },
        ],
        innerVictims: [
          {
            cols: 4,
            infos: [
              { type: "text", label: "FAMILY NAME", input: "" },
              { type: "text", label: "FIRST NAME", input: "" },
              { type: "text", label: "MIDDLE NAME", input: "" },
              { type: "text", label: "QUALIFIER", input: "" },
              { type: "text", label: "NICKNAME", input: "" },
              { type: "text", label: "CITIZENSHIP", input: "" },
              {
                type: "select",
                label: "GENDER",
                input: "",
                options: {
                  selected: "GENDER",
                  option: [
                    { nm: "MALE", val: "Male" },
                    { nm: "FEMALE", val: "Female" },
                  ],
                },
              },
              { type: "text", label: "CIVIL STATUS", input: "" },
              { type: "date", label: "DATE OF BIRTH", input: "" },
              { type: "number", label: "AGE", input: "" },
              { type: "text", label: "PLACE OF BIRTH", input: "" },
              { type: "text", label: "HOME PHONE", input: "" },
              { type: "text", label: "MOBILE PHONE", input: "" },
            ],
          },
          {
            title: "Current Adresses",
            cols: 5,
            infos: [
              { type: "text", label: "HOUSE NUMBER/STREET", input: "" },
              { type: "text", label: "VILLAGE/SITIO", input: "" },
              { type: "text", label: "BARANGAY", input: "" },
              { type: "text", label: "TOWN/CITY", input: "" },
              { type: "text", label: "PROVINCE", input: "" },
            ],
          },
          {
            title: "Other Adresses",
            cols: 5,
            infos: [
              { type: "text", label: "OTHER(HOUSE NUMBER/STREET)", input: "" },
              { type: "text", label: "OTHER(VILLAGE/SITIO)", input: "" },
              { type: "text", label: "OTHER(BARANGAY)", input: "" },
              { type: "text", label: "OTHER(TOWN/CITY)", input: "" },
              { type: "text", label: "OTHER(PROVINCE)", input: "" },
            ],
          },
          {
            title: "Additional Infos",
            cols: 5,
            infos: [
              { type: "text", label: "HIGHEST EDUCATION ATAINMENT", input: "" },
              { type: "text", label: "OCCUPATION", input: "" },
              { type: "text", label: "ID CARD PRESENTED", input: "" },
              { type: "text", label: "EMAIL ADDRESS", input: "" },
              { type: "text", label: "FB ACCOUNT", input: "" },
            ],
          },
        ],
        innerSuspects: [
          {
            cols: 4,
            infos: [
              { type: "text", label: "FAMILY NAME", input: "" },
              { type: "text", label: "FIRST NAME", input: "" },
              { type: "text", label: "MIDDLE NAME", input: "" },
              { type: "text", label: "QUALIFIER", input: "" },
              { type: "text", label: "NICKNAME", input: "" },
              { type: "text", label: "CITIZENSHIP", input: "" },
              {
                type: "select",
                label: "GENDER",
                input: "",
                options: {
                  selected: "GENDER",
                  option: [
                    { nm: "MALE", val: "Male" },
                    { nm: "FEMALE", val: "Female" },
                  ],
                },
              },
              { type: "text", label: "CIVIL STATUS", input: "" },
              { type: "date", label: "DATE OF BIRTH", input: "" },
              { type: "number", label: "AGE", input: "" },
              { type: "text", label: "PLACE OF BIRTH", input: "" },
              { type: "text", label: "HOME PHONE", input: "" },
              { type: "text", label: "MOBILE PHONE", input: "" },
            ],
          },
          {
            title: "Current Adresses",
            cols: 5,
            infos: [
              { type: "text", label: "HOUSE NUMBER/STREET", input: "" },
              { type: "text", label: "VILLAGE/SITIO", input: "" },
              { type: "text", label: "BARANGAY", input: "" },
              { type: "text", label: "TOWN/CITY", input: "" },
              { type: "text", label: "PROVINCE", input: "" },
            ],
          },
          {
            title: "Other Adresses",
            cols: 5,
            infos: [
              { type: "text", label: "OTHER(HOUSE NUMBER/STREET)", input: "" },
              { type: "text", label: "OTHER(VILLAGE/SITIO)", input: "" },
              { type: "text", label: "OTHER(BARANGAY)", input: "" },
              { type: "text", label: "OTHER(TOWN/CITY)", input: "" },
              { type: "text", label: "OTHER(PROVINCE)", input: "" },
            ],
          },
          {
            title: "Additional Infos",
            cols: 6,
            infos: [
              { type: "text", label: "HIGHEST EDUCATION ATAINMENT", input: "" },
              { type: "text", label: "OCCUPATION", input: "" },
              { type: "text", label: "ID CARD PRESENTED", input: "" },
              { type: "text", label: "RELATIONSHIP TO VICTIM", input: "" },
              { type: "text", label: "EMAIL ADDRESS", input: "" },
              { type: "text", label: "FB ACCOUNT", input: "" },
            ],
          },
        ],
        innerCitizenAccounts: [
          {
            cols: 2,
            infos: [
              { type: "text", label: "USERNAME", input: "" },
              { type: "text", label: "LAST NAME", input: "" },
              { type: "text", label: "FIRST NAME", input: "" },
              { type: "email", label: "EMAIL ACCOUNT", input: "" },
              { type: "text", label: "CONTACT", input: "" },
              { type: "text", label: "CITIZENSHIP", input: "" },
              { type: "date", label: "PASSWORD", input: "" },
              { type: "number", label: "AGE", input: "" },
              {
                type: "select",
                label: "GENDER",
                input: "",
                options: {
                  selected: "GENDER",
                  option: [
                    { nm: "MALE", val: "Male" },
                    { nm: "FEMALE", val: "Female" },
                  ],
                },
              },
            ],
          },
        ],
        innerOfficerAccounts: [
          {
            cols: 1,
            infos: [
              { type: "text", label: "USERNAME", input: "" },
              { type: "email", label: "EMAIL ACCOUNT", input: "" },
              { type: "text", label: "CONTACT", input: "" },
              { type: "text", label: "PASSWORD", input: "" },
              { type: "number", label: "AGE", input: "" },
              {
                type: "select",
                label: "GENDER",
                input: "",
                options: {
                  selected: "GENDER",
                  option: [
                    { nm: "MALE", val: "Male" },
                    { nm: "FEMALE", val: "Female" },
                  ],
                },
              },
            ],
          },
        ],
      },
    };
  },methods:{
    extractData(){
      const form = [];

      for(const rows of this.formModel[this.$store.getters.CurrentActiveSideBar]){
        for(const data of rows.infos){
          form.push(data.input);
        }
      }
      //console.log(form);
    }
  },computed:{
  }
};
</script>

<style>
</style>