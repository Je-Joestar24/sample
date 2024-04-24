<template>

    <div>
        <button
          type="button"
          class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
          aria-expanded="false"
          id="dropdown-user-toggle"
          onclick="
              const droDown1 = document.getElementById('dropdown-user');
              if(droDown1.classList.contains('hidden'))droDown1.classList.remove('hidden');
              else droDown1.classList.add('hidden');
              "
        >
          <!-- dark:focus:ring-gray-600 -->
          <span class="sr-only">Open user menu</span>
          <svg
            class="h-8 w-8 "
            fill="none"
            viewBox="0 0 24 24"
            :stroke="prof"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"
            />
          </svg>
        </button>
      </div>
      <div
        class="fixed hidden top-8 right-3 lg:right-5 z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
        id="dropdown-user"
      >
        <!-- dark:bg-gray-700 dark:divide-gray-600 -->
        <div class="px-4 py-3" role="none">
          <p class="text-sm text-gray-900" role="none">
            <!--  dark:text-white -->
            User
          </p>
          <p class="text-sm font-medium text-gray-900 truncate" role="none">
            <!--  dark:text-gray-300 -->
            User@gmail.com
          </p>
        </div>
        <ul class="py-1" role="none">
          <li>
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
              role="menuitem"
              >Settings</a
            >
            <!-- dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white -->
          </li>
          <li>
            <button
              href="#"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
              role="menuitem"
              @click="sendData();"
              >Sign out</button
            >
            <!-- dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white -->

          </li>
        </ul>
      </div>
</template>
<script>

export default {
  data() {
    return {
      formData: {}
    };
  },
  methods: {
    sendData() {
      const formData = this.formData;
      this.$store.dispatch("changeVerify", false);
      this.$router.push('/Admin');/* 
      this.$emit('reload') */
    },
  },
};
</script>