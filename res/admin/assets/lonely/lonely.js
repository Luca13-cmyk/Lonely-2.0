








$(function(){



// ########### Variaveis

$offset_area_per = $('.offset-area-per');
$close_button = $(".offset-close");
$data_settings_per = $("a[data-settings_per]");
$md = $("md-backdrop");

// ############ Plugins
if (window.screen.width > 1200)
{
  
  $offset_area_per.perfectScrollbar(); // perfect scroll
}


// ################ Events

$close_button.on("click", function(e){
 e.preventDefault();
 e.stopPropagation();

$offset_area_per.removeClass("show_hide");
$md.hide();

});
$md.on("click", function(e){
  e.preventDefault();
  e.stopPropagation();
 
 $offset_area_per.removeClass("show_hide");
 $(this).hide();
 
 });

$data_settings_per.on("click", function(e){
  e.preventDefault();
  e.stopPropagation();
  
 $offset_area_per.addClass("show_hide");
 $md.show();
 });


//  ############ animation scroll

$("a[data-animation_scroll]").on("click", function(e){
  
  $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top
  }, 800, "linear");
  return false

});

// ############## AUTOCOMPLETE & FILTER


 if (document.getElementById("Filtro"))
 {
    // **** Filtro
  var l = Lonely;
  var inp = document.getElementById("Filtro");
  var nomes = ["Sockess", "Shell Script", "JS CSS TOOL", "AutoApkSettingIcon",
   "Fluxion", "Airgeddon", "Hoper", "PhoneInfoga", "PhoneSploit", "Sherlock"

];
  l.autocomplete(inp, nomes);
  // **** End filtro Barra Dicas

  // var $downloads = $(".card");
  // var $filter = $("#Filtro");
  // var cache = [];

  // $downloads.each(function(){
  //   cache.push({
  //     element:this,
  //     text:this.getAttribute("data-filter").trim().toLowerCase()
  //   })
  // })
  // console.table(cache)

  // function filter(){
  //   var query = this.value.trim().toLowerCase();
  //   cache.forEach(function(fil){
  //     var index = 0;
  //     if (query){
  //       index = fil.text.indexOf(query);
  //     }
  //     fil.element.style.display = index === -1 ? 'none' : '';

  //   }); //forEach

  // } // Filter
  // if ('oninput' in $filter[0]){
  //   $filter.on("input keyup", filter);
  // } else {
  //   $filter.on("keyup", filter);
  // }

  // End Filtro


 }

// ############## DATA



Valores = {};




// ##############  CHARTAJAX




  if (document.querySelector("canvas") && document.getElementById("btnchartajax"))
  {
    loadChartAjax();
    var btnchartajax = document.getElementById("btnchartajax");
    btnchartajax.addEventListener("click", loadChartAjax, false);
    
  }

  var meses = [];

  function loadChartAjax()
  {
      var xhr = new XMLHttpRequest();
  
  
      xhr.onload = function()
    
     
        {
          responseObject = JSON.parse(xhr.responseText);
        // console.table(responseObject);
          // console.table(responseObject);
          const r = responseObject;
          console.log(r[0].desnov);
          
          
          meses = [parseInt(r[0].desjan), parseInt(r[0].desfeb), parseInt(r[0].desmar),
           parseInt(r[0].desapr), parseInt(r[0].desmay), parseInt(r[0].desjun), parseInt(r[0].desjul), 
           parseInt(r[0].desago), parseInt(r[0].desset), parseInt(r[0].desout), parseInt(r[0].desnov), 
           parseInt(r[0].desdez)];
           
          chartPer();
          demo.initChartsPages();
  
        }
  
  
    
  
  
      xhr.open("GET", "http://127.0.0.1/admin/data/countQntIpPer", true);
      xhr.send(null);
  
  
  
    
  }




// ############# CHART


function chartPer()
{

demo = {
  initPickColor: function() {
    $('.pick-class-label').click(function() {
      var new_class = $(this).attr('new-class');
      var old_class = $('#display-buttons').attr('data-class');
      var display_div = $('#display-buttons');
      if (display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
      }
    });
  },

  initDocChart: function() {
    chartColor = "#FFFFFF";

    ctx = document.getElementById('chartHours').getContext("2d");

    myChart = new Chart(ctx, {
      type: 'line',

      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
        datasets: [{
            borderColor: "#6bd098",
            backgroundColor: "#6bd098",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [700, 600, 600, 650, 800, 450, 655, 788, 500, 600]
          },
          {
            borderColor: "#f17e5d",
            backgroundColor: "#f17e5d",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [320, 340, 365, 360, 370, 385, 390, 384, 408, 420]
          },
          {
            borderColor: "#fcc468",
            backgroundColor: "#fcc468",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [500, 394, 415, 600, 425, 445, 460, 450, 478, 484]
          }
        ]
      },
      options: {
        legend: {
          display: false
        },

        tooltips: {
          enabled: false
        },

        scales: {
          yAxes: [{

            ticks: {
              fontColor: "#9f9f9f",
              beginAtZero: false,
              maxTicksLimit: 5,
              //padding: 20
            },
            gridLines: {
              drawBorder: false,
              zeroLineColor: "#ccc",
              color: 'rgba(255,255,255,0.05)'
            }

          }],

          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(255,255,255,0.1)',
              zeroLineColor: "transparent",
              display: false,
            },
            ticks: {
              padding: 20,
              fontColor: "#9f9f9f"
            }
          }]
        },
      }
    });

  },

  initChartsPages: function() {
    chartColor = "#FFFFFF";

    ctx = document.getElementById('chartHours').getContext("2d");
    // console.log(meses);
    myChart = new Chart(ctx, {
      type: 'line',

      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "dez"],
        datasets: [{
            borderColor: "#6bd098",
            backgroundColor: "#6bd098",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [meses[0], meses[1], meses[2], meses[3], meses[4], meses[5], meses[6], meses[7], meses[8], meses[9], meses[10], meses[11]]
            // data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, meses[10], 0]
          },
          {
            borderColor: "#f17e5d",
            backgroundColor: "#f17e5d",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          },
          {
            borderColor: "#fcc468",
            backgroundColor: "#fcc468",
            pointRadius: 0,
            pointHoverRadius: 0,
            borderWidth: 3,
            data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
          }
        ]
      },
      options: {
        legend: {
          display: false
        },

        tooltips: {
          enabled: false
        },

        scales: {
          yAxes: [{

            ticks: {
              fontColor: "#9f9f9f",
              beginAtZero: false,
              maxTicksLimit: 5,
              //padding: 20
            },
            gridLines: {
              drawBorder: false,
              zeroLineColor: "#ccc",
              color: 'rgba(255,255,255,0.05)'
            }

          }],

          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(255,255,255,0.1)',
              zeroLineColor: "transparent",
              display: false,
            },
            ticks: {
              padding: 20,
              fontColor: "#9f9f9f"
            }
          }]
        },
      }
    });


    ctx = document.getElementById('chartEmail').getContext("2d");

    myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: [1, 2, 3],
        datasets: [{
          label: "Emails",
          pointRadius: 0,
          pointHoverRadius: 0,
          backgroundColor: [
            '#e3e3e3',
            '#4acccd',
            '#fcc468',
            '#ef8157'
          ],
          borderWidth: 0,
          data: [342, 480, 530, 120]
        }]
      },

      options: {

        legend: {
          display: false
        },

        pieceLabel: {
          render: 'percentage',
          fontColor: ['white'],
          precision: 2
        },

        tooltips: {
          enabled: false
        },

        scales: {
          yAxes: [{

            ticks: {
              display: false
            },
            gridLines: {
              drawBorder: false,
              zeroLineColor: "transparent",
              color: 'rgba(255,255,255,0.05)'
            }

          }],

          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(255,255,255,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              display: false,
            }
          }]
        },
      }
    });

    var speedCanvas = document.getElementById("speedChart");

    var dataFirst = {
      data: [0, 19, 15, 20, 30, 40, 40, 50, 25, 30, 50, 70],
      fill: false,
      borderColor: '#fbc658',
      backgroundColor: 'transparent',
      pointBorderColor: '#fbc658',
      pointRadius: 4,
      pointHoverRadius: 4,
      pointBorderWidth: 8,
    };

    var dataSecond = {
      data: [0, 5, 10, 12, 20, 27, 30, 34, 42, 45, 55, 63],
      fill: false,
      borderColor: '#51CACF',
      backgroundColor: 'transparent',
      pointBorderColor: '#51CACF',
      pointRadius: 4,
      pointHoverRadius: 4,
      pointBorderWidth: 8
    };

    var speedData = {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [dataFirst, dataSecond]
    };

    var chartOptions = {
      legend: {
        display: false,
        position: 'top'
      }
    };

    var lineChart = new Chart(speedCanvas, {
      type: 'line',
      hover: false,
      data: speedData,
      options: chartOptions
    });
  },

  initGoogleMaps: function() {
    var myLatlng = new google.maps.LatLng(40.748817, -73.985428);
    var mapOptions = {
      zoom: 13,
      center: myLatlng,
      scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
      styles: [{
        "featureType": "water",
        "stylers": [{
          "saturation": 43
        }, {
          "lightness": -11
        }, {
          "hue": "#0088ff"
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [{
          "hue": "#ff0000"
        }, {
          "saturation": -100
        }, {
          "lightness": 99
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#808080"
        }, {
          "lightness": 54
        }]
      }, {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ece2d9"
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ccdca1"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#767676"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "poi",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [{
          "visibility": "on"
        }, {
          "color": "#b8cb93"
        }]
      }, {
        "featureType": "poi.park",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.sports_complex",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.medical",
        "stylers": [{
          "visibility": "on"
        }]
      }, {
        "featureType": "poi.business",
        "stylers": [{
          "visibility": "simplified"
        }]
      }]

    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
      position: myLatlng,
      title: "Hello World!"
    });

    // To add the marker to the map, call setMap();
    marker.setMap(map);
  },

  showNotification: function(from, align) {
    color = 'primary';

    $.notify({
      icon: "nc-icon nc-bell-55",
      message: "Welcome to <b>Paper Dashboard</b> - a beautiful bootstrap dashboard for every web developer."

    }, {
      type: color,
      timer: 8000,
      placement: {
        from: from,
        align: align
      }
    });
  }

};
}

























  

}); // JS 








