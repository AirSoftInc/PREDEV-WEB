let statisticsZone = [];
$(document).ready(function () {
    $("#statistics").addClass("active-a");
    getValues();

    function getValues(){
      dataZone.forEach(zone=>{
        const form = {zone: zone.zone}
        retriveWithParams("../service/cases-service/statistics-service.php", form, function (response) {  
          statisticsZone.push({zone: zone.zone, count: response});
        });
      });
    }
});

setTimeout(() => {
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
        {name: 'Capital', y: parseInt(statisticsZone[0].count)},
        {name: 'Huasteca Alta', y: parseInt(statisticsZone[1].count)},
        {name: 'Huasteca Baja', y: parseInt(statisticsZone[2].count)},
        {name: 'Las Montañas', y: parseInt(statisticsZone[3].count)},
        {name: 'LosTuxtlas', y: parseInt(statisticsZone[4].count)},
        {name: 'Nautla', y: parseInt(statisticsZone[5].count)},
        {name: 'Olmeca', y: parseInt(statisticsZone[6].count)},
        {name: 'Papaloapan', y: parseInt(statisticsZone[7].count)},
        {name: 'Sotavento', y: parseInt(statisticsZone[8].count)},
        {name: 'Totonaca', y: parseInt(statisticsZone[9].count)}        
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
}, 1000);