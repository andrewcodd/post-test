@extends ('layouts.master')
@extends ('layouts.modals')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>

<meta name="_token" id="_token" content="{{ csrf_token() }}">


<div class="blog-header" style="margin:8px 0 15px 0;">
  <div class="container">
    <h2>Value Creation Potential</h2>
    <p class="lead blog-description" id="demo"></p>
    <p class="lead blog-description">Assessment Summary: {{ $user ->created_at}}</p>
    <p class="lead blog-description"><a href= {{ $userLocate }}>Click for your unique link to your printable VC Potential assessment</a></p>



     </div>
</div>

@section ('content')
<script type="text/javascript">

  function resize_canvas(){
        canvas = document.getElementById("chartarea");

        var w = window.innerWidth
        var h = window.innerHeight
        if (canvas.width  < w)
        {
            canvas.width  = w*0.8;
        }

        if (canvas.height < h)
        {
            canvas.height = h*0.8;
        }
    }
</script>



<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script> -->
<body onresize="resize_canvas()">
        <canvas id="chartarea">Your browser doesn't support canvas</canvas>
</body>


<div class="container" style="margin-bottom:50px">

 <div class="row align-items-center mt-2" width="200" height="200">
 <script type="text/javascript">

  $(document).ready(function() {
   $.ajaxSetup({
     headers: {
       'X-CSRF-Token': $('meta[name="_token"]').attr('content')
     }
   });
 });

 var token = document.getElementById('_token');
 console.log(token['content']);
 var tempToken = <?php echo json_encode($user); ?>;
 console.log(tempToken['_token']);

 if (token['content'] ==  tempToken['_token'])
 {
    console.log("success")
 //src="{{ URL::asset('js\graph.js') }}">
 $(document).ready(function(){
 //$.ajax({
//    url: "http://avfww.com/answers",
//    method: "GET",
//    dataType: "text",
//     success: function() {

   //Assign php generated json to JavaScript variable
     var tempArray = <?php echo json_encode($results); ?>;

    //You will be able to access the properties as
    console.log(tempArray);
//    console.log(tempArray[0]);
    var userAll = Object.values(tempArray);
    console.log(userAll);
    console.log(userAll[1] +','+ userAll[2]);
   var answers = userAll.slice(0,36); //this gives the range of values to execute the rest of the script
   console.log(answers);

   var VCSum = Math.round(answers.reduce((a,b)=>(a+Math.abs(b)),0)/36);
   console.log(VCSum);

   var size0 = 3;
   var size1 = 2;

   //A-ring
   var AA11Sum = Math.round(answers.slice(0,3).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   console.log(AA11Sum);
   var AA12Sum = Math.round(answers.slice(3,6).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   console.log(AA12Sum);
   var AA21Sum = Math.round(answers.slice(6,9).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   console.log(AA21Sum);
   var AA22Sum = Math.round(answers.slice(9,12).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   console.log(AA22Sum);
   var AA31Sum = Math.round(answers.slice(12,15).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   console.log(AA31Sum);
   var AA32Sum = Math.round(answers.slice(15,18).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   console.log(AA32Sum);
   var AA41Sum = Math.round(answers.slice(18,21).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   var AA42Sum = Math.round(answers.slice(21,24).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   var AA51Sum = Math.round(answers.slice(24,27).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   var AA52Sum = Math.round(answers.slice(27,30).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   var AA61Sum = Math.round(answers.slice(30,33).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
   var AA62Sum = Math.round(answers.slice(33,36).reduce((a,b)=>(a+Math.abs(b)),0)/size0);

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
             "Anatomises",
             "Alchemist",
             "Assimilates",
             "Articulates",
             "Attuned",
             "Adaptable",
             "Anticipates",
             "Aligns",
             "Augments",
             "Agile",
             "Assured",
             "Accountable",
             "Financial Analysis",
             "Strategic Awareness",
             "Social Intelligence",
             "Engaged",
             "Tech & Data Savvy",
             "Sparring Partner",
             "Insight",
             "Influence",
             "Impact",
             "Value Creation"
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
           "Anatomises",
           "Alchemist",
           "Assimilates",
           "Articulates",
           "Attuned",
           "Adaptable",
           "Anticipates",
           "Aligns",
           "Augments",
           "Agile",
           "Assured",
           "Accountable",
           "Financial Analysis",
           "Strategic Awareness",
           "Social Intelligence",
           "Engaged",
           "Tech & Data Savvy",
           "Sparring Partner",
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
         var modal4 = document.getElementById('myModal4');
         var modal5 = document.getElementById('myModal5');
         var modal6 = document.getElementById('myModal6');
         var modalI1 = document.getElementById('myModalI1');
         var modalI2 = document.getElementById('myModalI2');
         var modalI3 = document.getElementById('myModalI3');
         var modalA01 = document.getElementById('myModalA01');
         var modalA02 = document.getElementById('myModalA02');
         var modalA03 = document.getElementById('myModalA03');
         var modalA04 = document.getElementById('myModalA04');
         var modalA05 = document.getElementById('myModalA05');
         var modalA06 = document.getElementById('myModalA06');
         var modalA07 = document.getElementById('myModalA07');
         var modalA08 = document.getElementById('myModalA08');
         var modalA09 = document.getElementById('myModalA09');
         var modalA10 = document.getElementById('myModalA10');
         var modalA11 = document.getElementById('myModalA11');
         var modalA12 = document.getElementById('myModalA12');

         // Get the button that opens the modal
         //var btn = document.getElementById("myBtn");

         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close")[0];
         var span1 = document.getElementsByClassName("close")[1];
         var span2 = document.getElementsByClassName("close")[2];
         var span3 = document.getElementsByClassName("close")[3];
         var span4 = document.getElementsByClassName("close")[4];
         var span5 = document.getElementsByClassName("close")[5];
         var span6 = document.getElementsByClassName("close")[6];
         var spanI1 = document.getElementsByClassName("close")[7];
         var spanI2 = document.getElementsByClassName("close")[8];
         var spanI3 = document.getElementsByClassName("close")[9];
         var spanA01 = document.getElementsByClassName("close")[10];
         var spanA02 = document.getElementsByClassName("close")[11];
         var spanA03 = document.getElementsByClassName("close")[12];
         var spanA04 = document.getElementsByClassName("close")[13];
         var spanA05 = document.getElementsByClassName("close")[14];
         var spanA06 = document.getElementsByClassName("close")[15];
         var spanA07 = document.getElementsByClassName("close")[16];
         var spanA08 = document.getElementsByClassName("close")[17];
         var spanA09 = document.getElementsByClassName("close")[18];
         var spanA10 = document.getElementsByClassName("close")[19];
         var spanA11 = document.getElementsByClassName("close")[20];
         var spanA12 = document.getElementsByClassName("close")[21];

         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
           modal.style.display="none";
         }
         span1.onclick = function() {
           modal1.style.display="none";
         }
         span2.onclick = function() {
           modal2.style.display="none";
         }
         span3.onclick = function() {
           modal3.style.display="none";
         }
         span4.onclick = function() {
           modal4.style.display="none";
         }
         span5.onclick = function() {
           modal5.style.display="none";
         }
         span6.onclick = function() {
           modal6.style.display="none";
         }
         spanI1.onclick = function() {
           modalI1.style.display="none";
         }
         spanI2.onclick = function() {
           modalI2.style.display="none";
         }
         spanI3.onclick = function() {
           modalI3.style.display="none";
         }
         spanA01.onclick = function() {
           modalA01.style.display="none";
         }
         spanA02.onclick = function() {
           modalA02.style.display="none";
         }
         spanA03.onclick = function() {
           modalA03.style.display="none";
         }
         spanA04.onclick = function() {
           modalA04.style.display="none";
         }
         spanA05.onclick = function() {
           modalA05.style.display="none";
         }
         spanA06.onclick = function() {
           modalA06.style.display="none";
         }
         spanA07.onclick = function() {
           modalA07.style.display="none";
         }
         spanA08.onclick = function() {
           modalA08.style.display="none";
         }
         spanA09.onclick = function() {
           modalA09.style.display="none";
         }
         spanA10.onclick = function() {
           modalA10.style.display="none";
         }
         spanA11.onclick = function() {
           modalA11.style.display="none";
         }
         spanA12.onclick = function() {
           modalA12.style.display="none";
         }

        // When the user clicks anywhere outside of the modal, close it
         window.onclick = function(event) {
             if (event.target == modal) {
                 modal.style.display = "none";
             } else if (event.target == modal1) {
                 modal1.style.display = "none";
               } else if (event.target == modal2) {
                   modal2.style.display = "none";
                 } else if (event.target == modal3) {
                     modal3.style.display = "none";
                   } else if (event.target == modal4) {
                       modal4.style.display = "none";
                     } else if (event.target == modal5) {
                         modal5.style.display = "none";
                       } else if (event.target == modal6) {
                           modal6.style.display = "none";
                 } else if (event.target == modalI1) {
                     modalI1.style.display = "none";
                   } else if (event.target == modalI2) {
                       modalI2.style.display = "none";
                     } else if (event.target == modalI3) {
                         modalI3.style.display = "none";
                       } else if (event.target == modalA01) {
                           modalA01.style.display = "none";
                         } else if (event.target == modalA02) {
                             modalA02.style.display = "none";
                           } else if (event.target == modalA03) {
                               modalA03.style.display = "none";
                             } else if (event.target == modalA04) {
                                 modalA04.style.display = "none";
                               } else if (event.target == modalA05) {
                                   modalA05.style.display = "none";
                                 } else if (event.target == modalA06) {
                                     modalA06.style.display = "none";
                                   } else if (event.target == modalA07) {
                                       modalA07.style.display = "none";
                                     } else if (event.target == modalA08) {
                                         modalA08.style.display = "none";
                                       } else if (event.target == modalA09) {
                                           modalA09.style.display = "none";
                                         } else if (event.target == modalA10) {
                                             modalA10.style.display = "none";
                                           } else if (event.target == modalA11) {
                                               modalA11.style.display = "none";
                                             } else if (event.target == modalA12) {
                                                 modalA12.style.display = "none";
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
             modal.style.display = "block"
             else if (label == "Financial Analysis")
             modal1.style.display = "block"
             else if (label == "Strategic Awareness")
             modal2.style.display= "block"
             else if (label == "Social Intelligence")
             modal3.style.display= "block"
             else if (label == "Engaged")
             modal4.style.display= "block"
             else if (label == "Tech & Data Savvy")
             modal5.style.display= "block"
             else if (label == "Sparring Partner")
             modal6.style.display= "block"
             else if (label == "Insight")
             modalI1.style.display= "block"
             else if (label == "Influence")
             modalI2.style.display= "block"
             else if (label == "Impact")
             modalI3.style.display= "block"
             else if (label == "Accountable")
             modalA12.style.display= "block"
             else if (label == "Anatomises")
             modalA01.style.display= "block"
             else if (label == "Alchemist")
             modalA02.style.display= "block"
             else if (label == "Assimilates")
             modalA03.style.display= "block"
             else if (label == "Articulates")
             modalA04.style.display= "block"
             else if (label == "Attuned")
             modalA05.style.display= "block"
             else if (label == "Adaptable")
             modalA06.style.display= "block"
             else if (label == "Anticipates")
             modalA07.style.display= "block"
             else if (label == "Aligns")
             modalA08.style.display= "block"
             else if (label == "Augments")
             modalA09.style.display= "block"
             else if (label == "Agile")
             modalA10.style.display= "block"
             else if (label == "Assured")
             modalA11.style.display= "block"
             else
             window.alert(label + ": " + value);
         };

   });


   }

   if (token['content'] !=  tempToken['_token'])
   {

   console.log("failure");
   document.getElementById("demo").innerHTML = "Session expired please start again.";
   }




</script>
 <div class="row align-items-center" style="width:200; height:200; margin-top:0px">
   <canvas class="canvas-detail-canvas" id="chartarea" style="width:200; height:200; margin-bottom:20px">
 </canvas>
</div>

     <p class="lead blog-description" align="center">Explanation of Value Creation Score Framework <a href="http://avfww.com/pdffolder/123.pdf" target="_blank">(opens pdf in new tab)</a></p>&nbsp;<br/>
     <script>

     $(document).ready(function() {
      $.ajaxSetup({
        headers: {
          'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
      });
    });

    var token = document.getElementById('_token');
    console.log(token['content']);
    var tempToken = <?php echo json_encode($user); ?>;
    console.log(tempToken['_token']);


    if (token['content'] ==  tempToken['_token'])
    {
       console.log("success")


     $(document).ready(function(){

         var tempArray = <?php echo json_encode($results); ?>;
         console.log(tempArray);
         console.log(tempArray[0]);
         var userAll = Object.values(tempArray);
         console.log(userAll);
         console.log(userAll[1] +','+ userAll[2]);
        var answers = userAll.slice(0,36); //this gives the range of values to execute the rest of the script
        console.log(answers);

        var VCSum = Math.round(answers.reduce((a,b)=>(a+Math.abs(b)),0)/36);
        console.log(VCSum);

        var size0 = 3;
        var size1 = 2;

        //A-ring
        var AA11Sum = Math.round(answers.slice(0,3).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        console.log(AA11Sum);
        var AA12Sum = Math.round(answers.slice(3,6).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        console.log(AA12Sum);
        var AA21Sum = Math.round(answers.slice(6,9).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        console.log(AA21Sum);
        var AA22Sum = Math.round(answers.slice(9,12).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        console.log(AA22Sum);
        var AA31Sum = Math.round(answers.slice(12,15).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        console.log(AA31Sum);
        var AA32Sum = Math.round(answers.slice(15,18).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        console.log(AA32Sum);
        var AA41Sum = Math.round(answers.slice(18,21).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        var AA42Sum = Math.round(answers.slice(21,24).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        var AA51Sum = Math.round(answers.slice(24,27).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        var AA52Sum = Math.round(answers.slice(27,30).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        var AA61Sum = Math.round(answers.slice(30,33).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
        var AA62Sum = Math.round(answers.slice(33,36).reduce((a,b)=>(a+Math.abs(b)),0)/size0);

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

                 var labels = [
                       "Anatomises",
                       "Alchemist",
                       "Assimilates",
                       "Articulates",
                       "Attuned",
                       "Adaptable",
                       "Anticipates",
                       "Aligns",
                       "Augments",
                       "Agile",
                       "Assured",
                       "Accountable"];

                   var obj = {};
                   for (var i = 0; i < labels.length; i++) {
                      obj[labels[i]] = answersL3[i];
                   };
                   console.log(obj);
                   var row = JSON.stringify(obj);
                                 console.log(row);
                   var rows = JSON.parse(row);
                   console.log(rows);

                   var result = [];

                   for(var i in rows)
                       result.push([i, rows [i]]);

                   console.log(result);



                   var html = '<table>';
                    html += '<tr>';
                    for( var j in result[0] ) {
                     html += '<th>' + j + '</th>';
                    }
                    html += '</tr>';
                    for( var i = 0; i < result.length; i++) {
                     html += '<tr>';
                     for( var j in result[i] ) {
                       html += '<td>' + result[i][j] + '</td>';
                     }
                    }
                    html += '</table>';
                    document.getElementById('container').innerHTML = html;


                    function replace(text)
                    {
                        return text.replace('0', 'Trait').replace('1', 'Score');
                    }

                    var ths = document.getElementById('container').getElementsByTagName('th'),
                        i = ths.length,
                        th, text;
                    while (i-- && (th = ths[i], text = th.innerText))
                    {
                        if (text)
                        {
                            // IE, Safari, Chrome, Opera
                            th.innerText = replace(text);
                        }
                        else
                        {
                            // Everything but IE <9
                            th.textContent = replace(th.textContent);
                        }
                    }



                  });
}
if (token['content'] !=  tempToken['_token'])
{

console.log("failure");
}





     </script>

<div class="row align-items-center" style="margin:8px 0 15px 0;"><h2>Summary By Individual Traits<h2></div>
<div class="row align-items-center" style="border: #cdcdcd medium solid; border-radius: 10px;"  >
<div class="col-sm-2"></div>
<div class="col-sm-4">
  <div class="canvas-detail-canvas" id="container" style="width:200; height:200; margin-bottom:50px">
</div>
</div>
<div class="col-sm-6">

<h5>Sample size too small (n records less than 100) to draw peer comparisons against company size; org level; industry and country.</h5>
<h6>Check back later using your <a href= {{ $userLocate }}>unique link</a> when the benchmark database has more records.</h6>

</div>
</div>



@endsection
