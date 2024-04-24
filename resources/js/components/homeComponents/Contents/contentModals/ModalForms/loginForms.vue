<template>
  <form class="max-w-sm mx-auto">
    <p
      class="border-yellow-400 bg-yellow-100 border rounded-md p-2 flex items-center text-red-700 text-sm font-light"
      v-if="!verified"
    >
      <svg
        class="flex-shrink-0 inline w-4 h-4 me-2"
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        fill="currentColor"
        viewBox="0 0 20 20"
      >
        <path
          d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"
        />
      </svg>
      No match found!
    </p>
    <div class="mb-5">
      <label
        for="email"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >Your email</label
      >
      <input
        type="email"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="name@gmail.com"
        v-model="loginform.user"
        required
      />
    </div>
    <div class="mb-5">
      <label
        for="password"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >Your password</label
      >
      <input
        type="password"
        v-model="loginform.pass"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        required
      />
    </div>
    <div class="flex items-start mb-5"></div>
    <button
      type="button"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
      @click="SendData()"
    >
      Login
    </button>
  </form>
</template>

<script>
export default {
  data() {
    return {
      loginform: {
        user: "",
        pass: "",
      },
      requestType: "LOGIN",
      verified: true,
    };
  },
  methods: {
    SendData() {
      const loginform = this.loginform;
      this.$store.dispatch("verifyUser", loginform);

      if (
        this.$store.getters.verificationResult 
      )
        this.$router.push("/ADMIN/Dashboard");/* 
      else if (this.$store.getters.verificationResult) this.$router.push("/"); */
      else this.verified = false;
    },
  },
};
</script>