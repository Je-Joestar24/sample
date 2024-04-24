<template>
  <div class="flex items-center">
    <div class="flex items-center ms-3">
      <button
        class="mr-3"
        :class="{
          'text-gray-300': $store.getters.theme,
          'text-gray-200': !$store.getters.theme,
        }"
        @click="$store.dispatch('changeTheme');changeProf()"
      >
        <svg
          v-if="!$store.getters.theme"
          class="h-8 w-8"
          viewBox="0 0 24 24"
          fill="none"
          stroke="darkgray"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <rect x="1" y="5" width="22" height="14" rx="7" ry="7" />
          <circle cx="8" cy="12" r="3" />
        </svg>
        <svg
          v-if="$store.getters.theme"
          class="h-8 w-8"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <rect x="1" y="5" width="22" height="14" rx="7" ry="7" />
          <circle cx="16" cy="12" r="3" />
        </svg>
      </button>
      <div>
        <button
          type="button"
          class="flex text-sm rounded-full focus:ring-4 "
          :class="{
            'focus:ring-gray-600 bg-gray-800 ': $store.getters.theme,
            'focus:ring-gray-300': !$store.getters.theme,
          }"
          aria-expanded="false"
          id="dropdown-user-toggle"
          onclick="
              const droDown1 = document.getElementById('dropdown-user');
              if(droDown1.classList.contains('hidden'))droDown1.classList.remove('hidden');
              else droDown1.classList.add('hidden');
              "
        >
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
        class="fixed hidden top-8 right-3 lg:right-5 z-50 my-4 text-base list-none rounded shadow"
        :class="{
          'bg-gray-700 divide-gray-600': $store.getters.theme,
          'bg-white divide-y divide-gray-100 ': !$store.getters.theme,
        }"
        id="dropdown-user"
      >
        <div class="px-4 py-3" role="none">
          <p
            class="text-sm"
            :class="{
              'text-white': $store.getters.theme,
              'text-gray-900': !$store.getters.theme,
            }"
            role="none"
          >
            User
          </p>
          <p
            class="text-sm font-medium truncate"
            :class="{
              'text-gray-300': $store.getters.theme,
              'text-gray-900': !$store.getters.theme,
            }"
            role="none"
          >
            <!--  dark: -->
            user@gmail.com
          </p>
        </div>
        <ul class="py-1" role="none">
          <li>
            <a
              href="#"
              class="block px-4 py-2 text-sm"
              role="menuitem"
              :class="{
                'text-gray-300 hover:bg-gray-600 hover:text-white':
                  $store.getters.theme,
                'text-gray-700 hover:bg-gray-100': !$store.getters.theme,
              }"
              >Settings</a
            >
            <!--  -->
          </li>
          <li>
            <a
              href="#"
              class="block px-4 py-2 text-sm"
              role="menuitem"
              :class="{
                'text-gray-300 hover:bg-gray-600 hover:text-white':
                  $store.getters.theme,
                'text-gray-700 hover:bg-gray-100': !$store.getters.theme,
              }"
              @click.prevent="sendData();$store.commit('changeActivePage', ['dashboard', 'DASHBOARD', 'dashboard'])"
              
              >Sign out</a
            >
            <!--  -->
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      formData: {},
      prof:'darkgray'
    };
  },
  methods: {
    sendData() {
      const formData = this.formData;
      this.$store.dispatch("changeVerify", false);
      this.$router.push('/');
    },
    changeProf(){
      this.prof = 'lightgray';
    }
  },
};
</script>