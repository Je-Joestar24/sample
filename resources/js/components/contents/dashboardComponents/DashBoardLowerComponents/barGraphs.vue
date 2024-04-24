<template>
    <figure class="highcharts-figure">
      <div id="barType"></div>
      <p class="highcharts-description">
        Bar chart showing horizontal columns. This chart type is often beneficial
        for smaller screens, as the user can scroll through the data vertically,
        and axis labels are easy to read.
      </p>
    </figure>
  </template>
  
  
  <script>
  import Highcharts from 'highcharts';
  
  export default {
    mounted() {
      this.highChartsBargraphy();
    },
    methods: {
      highChartsBargraphy() {
        Highcharts.chart("barType", {
          chart: {
            type: "bar",
          },
          title: {
            text: "Ormoc City Barangay Incident rates",
            align: "left",
          },
          subtitle: {
            text: "Top 4 Barangay with the highest Incident rates Past 30 days.",
            align: "left",
          },
          xAxis: {
            categories: ["Macabug", "Danhug", "Ipil", "San Antonio"],
            title: {
              text: null,
            },
            gridLineWidth: 1,
            lineWidth: 0,
          },
          yAxis: {
            min: 0,
            title: {
              text: "Incidents",
              align: "high",
            },
            labels: {
              overflow: "justify",
            },
            gridLineWidth: 0,
          },
          tooltip: {
            valueSuffix: " Incidents",
          },
          plotOptions: {
            bar: {
              borderRadius: "20%",
              dataLabels: {
                enabled: true,
              },
              groupPadding: 0.1,
            },
          },
          legend: {
            layout: "vertical",
            align: "right",
            verticalAlign: "top",
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor:
              Highcharts.defaultOptions.legend.backgroundColor || "#FFFFFF",
            shadow: true,
          },
          credits: {
            enabled: false,
          },
          series: [
            {
              name: "Past 30 Days, Year 2023",
              data: [3, 2, 2, 1],
            }
          ],
        });
      },
    },
  };
  </script>
  
    
  <style scoped>
  .highcharts-figure,
  .highcharts-data-table table {
    min-width: 310px;
    max-width: 100%;
    margin: 1em auto;
  }
  
  #barType {
    height: 400px;
  }
  
  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 2px auto;
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
  </style>