$(document).ready(function(){
  $.ajax({
    url : "http://localhost/chart.js/sales.php",
    type : "GET",
    success : function(data){

      console.log(data);

      
      var date = [];
      var total= [];
      // var productname= [];
      
        for(var i in data) {
        
        date.push(data[i].date);
        total.push(data[i].total);
        // productname.push(data[i].productname);
        
      }

      var chartdata = {
        labels: date,
        datasets: [

          // {
          //   label: "Month",
          //   fill: false,
          //   lineTension: 0.1,
          //   backgroundColor: "rgba(59, 89, 152, 0.75)",
          //   borderColor: "rgba(59, 89, 152, 1)",
          //   pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
          //   pointHoverBorderColor: "rgba(59, 89, 152, 1)",
          //   data: date
          // },
           {

            label: "Total Damage",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgb(220,220,220)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgb(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: total
          },
          

        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {

        type: 'bar',
        data: chartdata,
       options:{
        title:{
          display:true,
          text:'Graph Product Damage'
        },
        scales:{
          yAxes:[{
            scaleLabel:{
              display:true,
              labelString:'Total Damage'
            }
          }],
          xAxes:[{
            scaleLabel:{
              display:true,
              labelString:'Month'
            }
          }]
        },
       }
      });
    },
    error : function(data) {

    }
  });
});