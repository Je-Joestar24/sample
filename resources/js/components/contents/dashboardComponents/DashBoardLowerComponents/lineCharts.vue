<template>
    <figure class="highcharts-figure">
      <div id="monthlyAnalytics"></div>
      <p class="highcharts-description">
        Line chart showing Incident trends in the last 30 days.
      </p>
    </figure>
  </template>
  
  <script>
  import Highcharts from 'highcharts';
  
  export default {
    mounted() {
      this.chartify();
    },
    methods: {
      chartify() {
        Highcharts.chart("monthlyAnalytics", {
          title: {
            text: "INCIDENT RECORD LAST 30 DAYS",
            align: "center",
          },
  
          subtitle: {
            text: 'Source',
            align: "center",
          },
  
          yAxis: {
            title: {
              text: "Number of Incident",
            },
          },
  
          xAxis: {
            accessibility: {
              rangeDescription: "Range: 2010 to 2020",
            },
          },
  
          legend: {
            layout: "vertical",
            align: "right",
            verticalAlign: "middle",
          },
  
          plotOptions: {
            series: {
              label: {
                connectorAllowed: false,
              },
              pointStart: 1,
            },
          },
  
          series: [
            {
              name: "INCIDENTS",
              data: [
                1 , 2, 0, 2, 4, 5, 2, 5, 2, 0, 0, 0, 2, 3, 4, 4,2, 0,4,9, 2, 1, 2, 3, 1, 3, 1, 4, 2, 0, 3
              ],
            }
          ],
  
          responsive: {
            rules: [
              {
                condition: {
                  maxWidth: 500,
                },
                chartOptions: {
                  legend: {
                    layout: "horizontal",
                    align: "center",
                    verticalAlign: "bottom",
                  },
                },
              },
            ],
          },
        });
      },
    },
  };
  </script>
  
    
  <style>
  .highcharts-figure,
  .highcharts-data-table table {
    min-width: 360px;
    width: 100%;
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
  </style>