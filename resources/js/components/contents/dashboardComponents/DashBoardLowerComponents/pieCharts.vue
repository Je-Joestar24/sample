<template>
  <figure class="highcharts-figure">
    <div :id="ids"></div>
    <p class="highcharts-description">
      Bar chart showing horizontal columns. This chart type is often beneficial
      for smaller screens, as the user can scroll through the data vertically,
      and axis labels are easy to read.
    </p>
  </figure>
</template>
  
  
  <script>
import Highcharts from "highcharts";

export default {
  props: ["ids"],
  mounted() {
    this.highChartsBargraphy();
  },
  methods: {
    highChartsBargraphy() {
      Highcharts.chart(this.ids, {
        chart: {
          type: "pie",
        },
        title: {
          text: "Common Victims",
        },
        tooltip: {
          valueSuffix: "%",
        },
        subtitle: {
          text: 'Most Prone Victims these last months',
        },
        plotOptions: {
          series: {
            allowPointSelect: true,
            cursor: "pointer",
            dataLabels: [
              {
                enabled: true,
                distance: 20,
              },
              {
                enabled: true,
                distance: -40,
                format: "{point.percentage:.1f}%",
                style: {
                  fontSize: "1.2em",
                  textOutline: "none",
                  opacity: 0.7,
                },
                filter: {
                  operator: ">",
                  property: "percentage",
                  value: 10,
                },
              },
            ],
          },
        },
        series: [
          {
            name: "Percentage",
            colorByPoint: true,
            data: [
              {
                name: "Woman",
                sliced: true,
                selected: true,
                y: 26,
              },
              {
                name: "Man",
                y: 1,
              },
              {
                name: "Children",
                y: 15,
              },
              {
                name: "Elderly",
                y: 2,
              },
            ],
          },
        ],
      });
    },
  },
};
</script>
  
    
  <style scoped>
.highcharts-figure,
.highcharts-data-table table {
  min-width: 320px;
  max-width: 100%;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

input[type="number"] {
  min-width: 50px;
}
</style>