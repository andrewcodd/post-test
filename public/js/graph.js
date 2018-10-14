

// <?=json_encode($months);?>,
//var url ="{{url('/answersL2')}}";
/*$.getJSON("avfww.com/answersL2",
 (function( data) {
  var jsonObj = JSON.parse(data);
}));
*/

// var answersL2 ="{{url("answersL2")}}";

// var answersL2 =



$(document).ready(function(){
  $.ajax({
    url: "https://avfww.com/answers",
    method: "GET",
    dataType: "text",
    success: function(data) {


//NO... TOOK OUT L2 FROM END
      var answers = JSON.parse(data);
      console.log(answers);
      console.log(answers[0]);
//      console.log(answersL2[0].reduce((a,b) => a+b,0));
//reduce allows be to sum all of the elements in an array
      var VCSum = Math.round(answers[0].reduce((a,b)=>(a+Math.abs(b)),0)/36);
      console.log(VCSum);

      var size0 = 3;
      var size1 = 2;

//A-ring
      var AA11Sum = Math.round(answers[0].slice(0,3).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      console.log(AA11Sum);
      var AA12Sum = Math.round(answers[0].slice(3,6).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      console.log(AA12Sum);
      var AA21Sum = Math.round(answers[0].slice(6,9).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      console.log(AA21Sum);
      var AA22Sum = Math.round(answers[0].slice(9,12).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      console.log(AA22Sum);
      var AA31Sum = Math.round(answers[0].slice(12,15).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      console.log(AA31Sum);
      var AA32Sum = Math.round(answers[0].slice(15,18).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      console.log(AA32Sum);
      var AA41Sum = Math.round(answers[0].slice(18,21).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      var AA42Sum = Math.round(answers[0].slice(21,24).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      var AA51Sum = Math.round(answers[0].slice(24,27).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      var AA52Sum = Math.round(answers[0].slice(27,30).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      var AA61Sum = Math.round(answers[0].slice(30,33).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
      var AA62Sum = Math.round(answers[0].slice(33,36).reduce((a,b)=>(a+Math.abs(b)),0)/size0);

//asset ring
      var A01Sum = Math.round((AA11Sum + AA12Sum)/size1);
      console.log(A01Sum);
      var A02Sum = Math.round((AA21Sum + AA22Sum)/size1);
      var A03Sum = Math.round((AA31Sum + AA32Sum)/size1);
      var A04Sum = Math.round((AA41Sum + AA42Sum)/size1);
      var A05Sum = Math.round((AA51Sum + AA52Sum)/size1);
      var A06Sum = Math.round((AA61Sum + AA62Sum)/size1);

//I-ring
      var I1Sum = Math.round((A01Sum + A02Sum)/size1);
      console.log(I1Sum);
      var I2Sum = Math.round((A03Sum + A04Sum)/size1);
      console.log(I2Sum);
      var I3Sum = Math.round((A05Sum + A06Sum)/size1);
      console.log(I3Sum);

//THIS ONE IS NEW COMLETELY
      var answersL3 = [AA11Sum, AA12Sum, AA21Sum, AA22Sum, AA31Sum, AA32Sum, AA41Sum, AA42Sum, AA51Sum, AA52Sum, AA61Sum, AA62Sum];
      console.log(answersL3);

//THIS WAS THERE PREVIOUSLY JUST ADDED FOR ASSETS
      var answersL2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, A01Sum, A02Sum, A03Sum, A04Sum, A05Sum, A06Sum];
      console.log(answersL2);
//ADDED 12 ZEROS
      var answersL1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, I1Sum, I2Sum, I3Sum];
      console.log(answersL1);

      var answersL0 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, VCSum];
      console.log(answersL0);

      var tooltipdata = [AA11Sum, AA12Sum, AA21Sum, AA22Sum, AA31Sum, AA32Sum, AA41Sum, AA42Sum, AA51Sum, AA52Sum, AA61Sum, AA62Sum, A01Sum, A02Sum, A03Sum, A04Sum, A05Sum, A06Sum, I1Sum, I2Sum, I3Sum, VCSum];
      console.log(tooltipdata);


//      var outputdata = JSON.parse(datarow);
//      var yourArray = _(outputdata).toArray();
//      console.log(outputdata);
//THIS EXPLODES IT ALL
//      $.each(data, function (i) {
//        answersL2.push(data[i]);
//      });
//      console.log(answersL2);

//      var answersL2 = [];
  //    //ANDREW YOU NEED TO STRINGIFY IT/////////////////////////////
    //  for (var i in data) {
      //    answersL2.push(data[i]);
        //  console.log(answersL2[12]);
    //}

      const dataL3 = [10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10];
      const dataL2 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10, 10, 10, 10];
      const dataL1 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 10, 10];
      const dataL0 = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10];

      const DarkerG = '#008000'   //Green
      const LightG = '#9ACD32'  //YellowGreen
      const Orange = '#FFA500'  //Orange
      const LightR = '#FFC0CB'   //Pink
      const DarkR = '#DC143C'  //Crimson

//      const answersL1 = [0, 0, 0, 0, 0, 0, 80, 70, 45];
      //var answersL2 = ["90", "45", "30", "60", "70", "80"];

      var coloursL0 = answersL0.map((value) => value > 85 ? DarkerG :
                                                  value > 70 ? LightG :
                                                  value > 60 ? Orange :
                                                  value > 50 ? LightR : DarkR);

      var coloursL1 = answersL1.map((value) => value > 85 ? DarkerG :
                                                  value > 70 ? LightG :
                                                  value > 60 ? Orange :
                                                  value > 50 ? LightR : DarkR);
      var coloursL2 = answersL2.map((value) => value > 85 ? DarkerG :
                                                  value > 70 ? LightG :
                                                  value > 60 ? Orange :
                                                  value > 50 ? LightR : DarkR);
//NO.. MAY NEED TO REMOVE [0]
//      var coloursL3 = answersL3[0].map((value)
      var coloursL3 = answersL3.map((value) => value > 85 ? DarkerG :
                                                  value > 70 ? LightG :
                                                  value > 60 ? Orange :
                                                  value > 50 ? LightR : DarkR);



          let labels = [
                "Appetite for acumen",
                "Articulates",
                "Assimilates",
                "Anatomises",
                "Attuned",
                "Adaptable",
                "Accessible",
                "Anticipates",
                "Assured",
                "Authentic",
                "Agile",
                "Aligns",
                "Financial Acumen",
                "Strategic Analysis",
                "Social Awareness",
                "Engagement",
                "Tech & Data Savvy",
                "Commercial Savvy",
                "Insight",
                "Influence",
                "Impact",
                "Value Creation"
              ];
          let popups = [
                "Appetite for acumen",
                "Articulates",
                "Assimilates",
                "Anatomises",
                "Attuned",
                "Adaptable",
                "Accessible",
                "Anticipates",
                "Assured",
                "Authentic",
                "Agile",
                "Aligns",
                "Financial Acumen",
                "Strategic Analysis",
                "Social Awareness",
                "Engagement",
                "Tech & Data Savvy",
                "Commercial Savvy",
                "Insight",
                "Influence",
                "Impact",
                "Get a Life"
              ];



      var doughData = {
          datasets: [{
            data: dataL3,
            backgroundColor: coloursL3,
          }, {
            data: dataL2,
            backgroundColor: coloursL2,
          }, {
            data: dataL1,
            backgroundColor: coloursL1,
        }, {
          data: dataL0,
          backgroundColor: coloursL0,
        }],
        labels: [
          "Appetite for acumen",
          "Articulates",
          "Assimilates",
          "Anatomises",
          "Attuned",
          "Adaptable",
          "Accessible",
          "Anticipates",
          "Assured",
          "Authentic",
          "Agile",
          "Aligns",
          "Financial Acumen",
          "Strategic Analysis",
          "Social Awareness",
          "Engagement",
          "Tech & Data Savvy",
          "Commercial Savvy",
          "Insight",
          "Influence",
          "Impact",
          "Value Creation"
        ]
      };

      var pieOptions = {
        responsive: true,
        maintainAspectRatio: true,
        tooltipEvents: [],
        legend: {display: false, position:"bottom"},
        //showTooltips: true,
        //onAnimationComplete: function () {
        //this.showTooltip(this.segments, true);
        //},
        //tooltipTemplate: "<%= label %>",
        tooltips: {
            callbacks: {
               label(t, d) {
                  let xLabel = labels[t.index],
                      yLabel = tooltipdata[t.index];
                  return xLabel + ': ' + yLabel;
               }
            }
         },


        centertext: String(VCSum),
        animation: {
          duration: 1500,
          easing: "easeOutQuart" /*,
          onComplete: function () {
            var ctx = this.chart.ctx;
            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';

            this.data.datasets.forEach(function (dataset) {

              for (var i = 0; i < dataset.data.length; i++) {
                var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                    total = dataset._meta[Object.keys(dataset._meta)[0]].total,
                    mid_radius = model.innerRadius + (model.outerRadius - model.innerRadius)/2,
                    start_angle = model.startAngle,
                    end_angle = model.endAngle,
                    mid_angle = start_angle + (end_angle - start_angle)/2;

                var x = mid_radius * Math.cos(mid_angle);
                var y = mid_radius * Math.sin(mid_angle);

                ctx.fillStyle = '#fff';
                if (i == 3){ // Darker text color for lighter background
                  ctx.fillStyle = '#444';
                }

                var val = dataset.data[i];
                var percent = String(Math.round(val/total*100)) + "%";

                if(val != 0) {
                  ctx.fillText(dataset.data[i], model.x + x, model.y + y);
                  // Display percent in another line, line break doesn't work for fillText
                  ctx.fillText(percent, model.x + x, model.y + y + 15);
                }
              }
            });
          }*/
        }
      };

      Chart.pluginService.register({
                  beforeDraw: function (chart) {
                      if (chart.options.centertext) {
                          var width = chart.chart.width,
                                  height = chart.chart.height,
                                  ctx = chart.chart.ctx;

                          ctx.restore();
                          var fontSize = (height / 80).toFixed(2); // was: 114
                          ctx.font = fontSize + "em sans-serif";
                          ctx.textBaseline = "middle";

                          var legendHeight =  chart.legend.height;

                          var text = chart.options.centertext, // "75%",
                                  textX = Math.round((width - ctx.measureText(text).width) / 2),
                                  textY = height / 2 - legendHeight/2;

                          ctx.fillText(text, textX, textY);
                          ctx.save();
                      }
                  }
              });

        var ctx = document.getElementById("chartarea").getContext("2d");
        var myDoughnut = new Chart(ctx, {
          type: 'doughnut',
          data: doughData,
          options: pieOptions
        });


        var modal = document.getElementById('myModal');
        var modal1 = document.getElementById('myModal1');
        var modal2 = document.getElementById('myModal2');
        var modal3 = document.getElementById('myModal3');

        // Get the button that opens the modal
        //var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span1 = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal

       // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            } else if (event.target == modal1) {
                modal1.style.display = "none";
              } else if (event.target == modal2) {
                  modal2.style.display = "none";
        }
      }

        var btn = document.getElementById("chartarea")

        btn.onclick = function(evt){
          var activePoints = myDoughnut.getElementsAtEvent(evt);
          var firstPoint = activePoints[0];
          var label = myDoughnut.data.labels[firstPoint._index];
          var value = myDoughnut.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
        //        if (firstPoint !== undefined)
            if (label == "Value Creation")
            modal1.style.display = "block"
            else if (label == "Financial Acumen")
            modal2.style.display = "block"
            else if (label == "Strategic Analysis")
            modal3.style.display("Do This to Get Better At It\nDo This to Get Better At It Do This to Get Better At It Do This to Get Better At It Do This to Get Better At It")
            else
            window.alert(label + ": " + value);
        };



    },
    error: function(data) {
      console.log(data);
    }



  });



});
