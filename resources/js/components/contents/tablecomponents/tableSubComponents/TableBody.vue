<template>
  <tr
    class="border-b"
    :class="{'bg-gray-800 border-gray-700 hover:bg-gray-600':$store.getters.theme, 'bg-white text-gray-700 hover:bg-gray-50':!$store.getters.theme}"
    
    v-for="dataSets in tabElems[tabIndex].tableDatas"
  >
    <!-- bg-gray-800 border-gray-700 *  hover:bg-gray-600-->
    <td class="w-4 p-4">
      <div class="flex items-center">
        <input
          :id="dataSets.id"
          class="w-4 h-4  rounded"
          :class="{'focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2bg-gray-700 border-gray-600':$store.getters.theme, ' focus:ring-blue-500 text-blue-600 bg-gray-100 border-gray-300':!$store.getters.theme}"
          
          type="checkbox"
        />
        <!-- 
          :value="dataSets.id"
          onclick="
                    (()=>{
                    const elem = document.getElementById(`${this.id}`);
                    !elem.classList.contains('1') ? elem.classList.add('1') : elem.classList.remove('1');
                    })();
                    " -->
        <!--  bg-gray-700 border-gray-600 -->
      </div>
    </td>
    <td class="px-6 py-4" v-for="datas in dataSets">{{ datas }}</td>
    <td class="px-6 py-4">
      <a
      @click.prevent="changeForm('editForm')"
        href="#"
        type="button"
        class="font-medium text-blue-600 hover:underline"
        :class="{'text-blue-500':$store.getters.theme, 'text-blue-600':!$store.getters.theme}"
        data-modal-target="incident-modal"
        data-modal-toggle="incident-modal"
      >
        Edit</a
      >
    </td>
  </tr>
</template>

<script>
export default {
  props: ["tabElems", "tabIndex", "changeForm"],
};
</script>