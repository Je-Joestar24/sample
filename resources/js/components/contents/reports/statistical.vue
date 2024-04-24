<template>
  <form
    class="p-4 md:p-5 md:max-w-screen-md rounded-md border shadow-xs"
    :class="{
      'shadow-white  text-white border-gray-600': $store.getters.theme,
      '': !$store.getters.theme,
    }"
  >
    <!-- Form fields -->

    <div class="grid md:grid-cols-8 md:gap-6 p-5">
      <p class="col-span-2 text-lg font-bold text-end">Date & time from:</p>
      <div class="grid md:grid-cols-2 col-span-6 md:gap-6 group">
        <div class="relative z-0 w-full mb-5 group">
          <div class="relative z-0 w-full mb-5 group">
            <input
              type="date"
              pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
              class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none docus:outline-none focus:ring-0 peer"
              :class="{'text-gray-50 arder-gray-600 dacus:border-blue-500 f':$store.getters.theme,'text-gray-900 border-gray-300 focus:border-blue-600':!$store.getters.theme}"
              placeholder=""
              required
            />
          </div>
          <label
            for="floating_phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Start Date:</label
          >
        </div>
        <div class="relative z-0 w-full mb-5 group">
          <input
            type="time"
            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
            name="floating_phone"
            id="floating_phone"
            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
            :class="{'text-gray-50  border-gray-600 focus:border-blue-500':$store.getters.theme,'text-gray-900 border-gray-300 focus:border-blue-600':!$store.getters.theme}"
            placeholder=" "
            required
          />
          <label
            for="floating_phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Time:</label
          >
        </div>
      </div>
      <p class="col-span-2 text-lg font-bold text-end">Date & time to:</p>
      <div class="grid md:grid-cols-2 col-span-6 md:gap-6 group">
        <div class="relative z-0 w-full mb-5 group">
          <input
            type="date"
            name="floating_phone"
            id="floating_phone"
            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
            :class="{'text-gray-50  border-gray-600 focus:border-blue-500':$store.getters.theme,'text-gray-900 border-gray-300 focus:border-blue-600':!$store.getters.theme}"
            placeholder=" "
            required
          />
          <label
            for="floating_phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >End Date:</label
          >
        </div>
        <div class="relative z-0 w-full mb-5 group">
          <input
            type="time"
            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
            name="floating_phone"
            id="floating_phone"
            class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
            :class="{'text-gray-50  border-gray-600 focus:border-blue-500':$store.getters.theme,'text-gray-900 border-gray-300 focus:border-blue-600':!$store.getters.theme}"
            placeholder=" "
            required
          />
          <label
            for="floating_phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
            >Time:</label
          >
        </div>
      </div>
      <p class="col-span-2 text-lg font-bold text-end">Location:</p>
      <div class="relative z-0 w-full col-span-6 mb-5 group">
        <input
          type="text"
          name="floating_company"
          id="floating_company"
          class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-no00 focus:outline-none focus:ring-0 peer"
          :class="{'text-gray-50 tk:border-gray-60k:focus:border-blue-5':$store.getters.theme,'text-gray-900 border-gray-300 focus:border-blue-600':!$store.getters.theme}"
          placeholder=" "
          required
        />
        <label
          for="floating_company"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Place of Incident:</label
        >
      </div>
      <p class="col-span-2 text-lg font-bold text-end">PRO:</p>
      <div class="relative z-0 w-full col-span-6 mb-5 group">
        <input
          type="text"
          name="floating_company"
          id="floating_company"
          class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2  appearance-no00 focus:outline-none focus:ring-0 peer"
          :class="{'text-gray-50 tk:border-gray-60k:focus:border-blue-5':$store.getters.theme,'text-gray-900 border-gray-300 focus:border-blue-600':!$store.getters.theme}"
          placeholder=" "
          required
        />
        <label
          for="floating_company"
          class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
          >Place of Incident:</label
        >
      </div>
      <p class="col-span-2 text-lg font-bold text-end">Type of Document:</p>
      <div class="relative z-0 w-full col-span-6 mb-5 flex gap-0 group">
        <button
          type="button"
          name="floating_company"
          class="block py-2.5 px-0 w-full text-sm text-white focus:ring-4 font-medium"
          :class="{
            'bg-blue-600 hover:bg-blue-700 foutline-none focus:ring-blue-800':
              $store.getters.theme,
            'bg-blue-700 hover:bg-blue-800 focus:ring-blue-300':
              !$store.getters.theme,
          }"
          required
        >PDF</button>
        <button
          type="button"
          class="block py-2.5 px-0 w-full text-sm bg-gray-300 text-gray-900"
        >XLS</button>
      </div>
      <p class="col-span-2"></p>
      <button
        type="button"
        class="text-white col-span-3 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
        :class="{
          'bg-green-600 hover:bg-green-700 foutline-none focus:ring-green-800':
            $store.getters.theme,
          'bg-green-700 hover:bg-green-800 focus:ring-green-300':
            !$store.getters.theme,
        }"
      >
        GENERATE REPORT
      </button>
    </div>
  </form>
</template>
<script>
export default {};
</script>