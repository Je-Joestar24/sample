<template>
  <button
    type="button"
    class="py-2 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
  >
  <svg class="h-4 w-4 inline"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg>
    FILTER
  </button>

  <ul class="mt-5 overflow-auto h-96 w-full divide-y divide-gray-200 dark:divide-gray-700 ">
    <li v-for="el in arr" class="pb-3 sm:pb-4 border-b">
      <div class="flex items-center space-x-4 rtl:space-x-reverse">
        <div class="flex-shrink-0">
            <svg class="h-8 w-8 "  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
            User
          </p>
          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
            email@gmail.com
          </p>
        </div>
        <p><span>Shooting Incendent</span> at <span>Macabug, Ormoc City, Leyte</span>, <span>11:22 am</span></p>
        <div
          class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"
        >
        <span>January</span>, 11, 2024
        </div>
      </div>
    </li>
  </ul>
</template>

<script>
export default{
    data(){
        return {
            arr:[]
        }
    },
    mounted(){
        this.generateArray();
    },
    methods:{
        generateArray(){
            for(let i= 0; i < 20; i ++){
                this.arr.push(i);
            }
        }
    }

}
</script>