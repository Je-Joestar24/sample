<template>
  <div class="grid grid-cols-4 gap-4 mb-4">
    <div class="flex p-2 h-40 rounded bg-gray-50 shadow-md">
      <div class="flex-1 grid grid-cols-6">
        <div
          class="flex items-center justify-center align-items-center col-span-1"
        >
          <svg
            class="h-12 w-12"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <polyline points="12 4 4 8 12 12 20 8 12 4" />
            <polyline points="4 12 12 16 20 12" />
            <polyline points="4 16 12 20 20 16" />
          </svg>
        </div>
        <div class="col-span-5 grid grid-flow-row">
          <div class="grid-flow-col gap-2 row-span-1 flex items-center">
            <span id="${elemV[1]}" class="text-blue-800 text-lg font-bold"
              >100</span
            >
            <span>Incidents</span>
          </div>
          <div class="border-t-2 border-gray-900">
            <a href="#" id="${elemV[3]}" class="text-xs underline text-blue-800"
              >View all</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="flex p-2 h-40 rounded bg-gray-50 shadow-md">
      <div class="flex-1 grid grid-cols-6">
        <div
          class="flex items-center justify-center align-items-center col-span-1"
        >
          <svg
            class="h-12 w-12 text-black"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <path
              d="M9 5H7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2V7a2 2 0 0 0 -2 -2h-2"
            />
            <rect x="9" y="3" width="6" height="4" rx="2" />
            <path d="M9 14l2 2l4 -4" />
          </svg>
        </div>
        <div class="col-span-5 grid grid-flow-row">
          <div class="grid-flow-col gap-2 row-span-1 flex items-center">
            <span id="${elemV[1]}" class="text-blue-800 text-lg font-bold"
              >22</span
            >
            <span>CLEARED</span>
          </div>
          <div class="border-t-2 border-gray-900">
            <a href="#" id="${elemV[3]}" class="text-xs underline text-blue-800"
              >View all</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="flex p-2 h-40 rounded bg-gray-50 shadow-md">
      <div class="flex-1 grid grid-cols-6">
        <div
          class="flex items-center justify-center align-items-center col-span-1"
        >
          <svg
            class="h-12 w-12 text-black"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" />
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path
              d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"
            />
            <path d="M9 15l2 2l4 -4" />
          </svg>
        </div>
        <div class="col-span-5 grid grid-flow-row">
          <div class="grid-flow-col gap-2 row-span-1 flex items-center">
            <span id="${elemV[1]}" class="text-blue-800 text-lg font-bold"
              >12</span
            >
            <span>SOLVED</span>
          </div>
          <div class="border-t-2 border-gray-900">
            <a href="#" id="${elemV[3]}" class="text-xs underline text-blue-800"
              >View all</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="flex p-2 h-40 rounded bg-gray-50 shadow-md">
      <div class="flex-1 grid grid-cols-6">
        <div
          class="flex items-center justify-center align-items-center col-span-1"
        >
          <svg
            class="h-12 w-12 text-black"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
            />
          </svg>
        </div>
        <div class="col-span-5 grid grid-flow-row">
          <div class="grid-flow-col gap-2 row-span-1 flex items-center">
            <span id="${elemV[1]}" class="text-blue-800 text-lg font-bold"
              >66</span
            >
            <span>UNDER INVESTIGATION</span>
          </div>
          <div class="border-t-2 border-gray-900">
            <a href="#" id="${elemV[3]}" class="text-xs underline text-blue-800"
              >View all</a
            >
          </div>
        </div>
      </div>
    </div>

    <div
      class="flex items-center justify-center rounded bg-gray-50 col-span-4 shadow-md"
    >
      <!-- dark:bg-gray-800 -->
      <p class="font-semibold font-mono p-1 text-gray-600">
        INSIGHTS
        <!-- dark:text-gray-500 -->
      </p>
    </div>
    <div
      class="flex items-center justify-center rounded bg-gray-50 h-60 col-span-3 shadow-md"
    >
      <!-- dark:bg-gray-800 -->
      <p class="text-2xl text-gray-400">
        <!-- dark:text-gray-500 -->
        MONITORING MAP
      </p>
    </div>
    <div class="justify-center pt-2 px-5 rounded shadow-md bg-gray-800">
      <h2 class="text-lg mb-3 font-semibold text-white">Reports Today:</h2>
      <ul class="max-w-md space-y-1 list-inside text-gray-400">
        <li class="flex items-center">
          <svg
            class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
            />
          </svg>
          Thiefery, Sports Complex, O. C., 12:00 PM
        </li>
        <li class="flex items-center">
          <svg
            class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 flex-shrink-0"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"
            />
          </svg>
          <span class="text-red-600">Shooting, Macabog, O. C., 12:AM</span>
        </li>
      </ul>
    </div>
    <div
      class="flex items-center justify-center rounded bg-gray-50 col-span-4 shadow-md"
    >
      <lineCharts></lineCharts>
    </div>
    <div
      class="flex items-center justify-center rounded col-span-2 bg-gray-50 shadow-md"
    >
      <barGraphs></barGraphs>
    </div>
    <div
      class="flex items-center justify-center rounded bg-gray-50 col-span-2 shadow-md"
    >
      <pieCharts :ids="'test1'"></pieCharts>
    </div>
    <!--     <div
      class="flex items-center justify-center rounded bg-gray-50 h-60 dark:bg-gray-800 col-span-3 shadow-md"
    >
      <p class="text-2xl text-gray-400 dark:text-gray-500">
      </p>
    </div>
    <div
      class="flex items-center justify-center rounded bg-gray-50 h-60 shadow-md dark:bg-gray-800"
    >
      <p class="text-2xl text-gray-400 dark:text-gray-500">
      
      </p>
    </div> -->
  </div>
</template>

<script>
import barGraphs from "./dashboardComponents/DashBoardLowerComponents/barGraphs.vue";
import lineCharts from "./dashboardComponents/DashBoardLowerComponents/lineCharts.vue";
import pieCharts from "./dashboardComponents/DashBoardLowerComponents/pieCharts.vue";

export default {
  components: {
    lineCharts,
    barGraphs,
    pieCharts,
  },
  data() {
    return {
      cards: [
        {
          icons: {
            paths: [],
          },
          count: 0,
          name: "",
        },
      ],
    };
  },
};
</script>