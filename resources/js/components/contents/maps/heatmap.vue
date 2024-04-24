<template>
  <div class="flex justify-center">
    <div class="m-5 max-w-screen-xl px-3 py-3 rounded border shadow-lg"
      :class="{'border-gray-500':$store.getters.theme,'border-gray-200':!$store.getters.theme}"
    >
      <div class="grid mb-2 grid-cols-3">
        <div class="col-span-3">
          <form>
            <div class="flex">
              <button
                class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                type="button"
              >
                Filter
              </button>
              <div class="relative w-full">
                <input
                  type="search"
                  id="search-dropdown"
                  class="block p-2.5 w-full z-20 text-sm   rounded-e-lg border-s-gray-50 border-s-2 border"
                  :class="{' bg-gray-700 border-s-gray-700 border-gray-600 placeholder-gray-400 text-white focus:border-blue-500':$store.getters.theme,'bg-gray-50 border-gray-300 focus:ring-blue-500 focus:border-blue-500 text-gray-900':!$store.getters.theme}"
        
                  placeholder="Search Location"
                  required
                />
                <button
                  type="submit"
                  class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 20 20"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                    />
                  </svg>
                  <span class="sr-only">Search</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <img src="./background/map.png" class="w-full" alt="MAP" />
    </div>
  </div>
</template>
<script>
</script>