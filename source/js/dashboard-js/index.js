$(document).ready(function () {

    const pageTitle = "PANEL ADMINISTRADOR"
    
    onInit();

    function onInit(){
        document.getElementById("pageTitle").innerHTML = pageTitle;
        $("#home").addClass("active-green");
    }
});

Highcharts.setOptions({
    lang: {
        viewFullscreen: "Ver en pantalla completa"
    },
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
      return {
        radialGradient: {
          cx: 0.5,
          cy: 0.3,
          r: 0.7
        },
        stops: [
          [0, color],
          [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
      };
    })
  });
  
  // Build the chart
  Highcharts.chart('container', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Estadísticas de discriminación por zona'
    },
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %',
          style: {
            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
          },
          connectorColor: 'silver'
        }
      }
    },
    series: [{
      name: 'Share',
      data: [
        {name: 'Capital', y: 23.5},
        {name: 'HuastecaAlta', y: 5.9},
        {name: 'HuastecaBaja', y: 10.3},
        {name: 'LasMontanas', y: 17.6},
        {name: 'LosTuxtlas', y: 14.7},
        {name: 'Nautla', y: 4.4},
        {name: 'Olmeca', y: 2.9},
        {name: 'Papaloapan', y: 8.8},
        {name: 'Sotavento', y: 4.4},
        {name: 'Totonaca', y: 7.4}        
      ]
    }],
    exporting: {
        buttons: {
            contextButton: {
                menuItems: ['viewFullscreen']
            }
        }
    }
  });