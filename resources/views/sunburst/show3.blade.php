@extends ('layouts.master')
<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden'
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

<input id="printpagebutton" style="margin-top:25px; margin:0 auto; display:block;" type="button" value="Click to Print Out Assessment" onclick="printpage()"/>

<h2 style="margin-top:25px;margin-left:25px;">Value Creation Potential</h2>

<p class="lead blog-description" style="margin-left:25px;">Assessment Summary for: {{ $var_name }}</p>
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





  <div class="container" style="margin-bottom:100px; margin-left:25px;">

   <div class="row align-items-center mt-2" style="margin-left:25px;" width="200" height="200">

     <script type="text/javascript">

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
         responsive: false,
         maintainAspectRatio: false,
         tooltipEvents: [],
         legend: {display: false, position:"bottom"},
           centertext: String(VCSum),
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
      //         },
      //         error: function(data) {
      //         console.log(data);
      //         }



        //     });



          });




     </script>

   <div class="row align-items-center" style="width:600; height:600; margin-top:0px; margin-left:25px;">
     <canvas class="canvas-detail-canvas" id="chartarea" style="width:600; height:600; margin-bottom:20px; margin-left:25px;">
   </canvas>
  </div>

  </div>




  <div class="page-break"></div>


  <script>
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
                     return text.replace('0', 'Trait').replace('1', 'Score').replace('2', 'vs. Country').replace('3', 'vs. Level');
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
     </script>


     <div class="row align-items-center" style="margin:8px 25px 15px 0;"><h2>Summary By Individual Traits<h2></div>
     <div class="row align-items-center" style="border: #cdcdcd medium solid; border-radius: 10px; margin:8px 25px 15px 0;">
     <div class="col-sm-2" style="margin:8px 0px 8px 0;"></div>
     <div class="col-sm-4" style="margin:8px 0px 8px 0;">
       <div class="canvas-detail-canvas" id="container" style="width:200; height:200; margin-bottom:50px">
     </div>
     </div>
     <div class="col-sm-6"style="margin:20px 0px 8px 0;">

     <h5>Sample size too small (n records less than 100) to draw peer comparisons against company size; org level; industry and country.</h5>
     <h6>Check back later using your <a href='#'>unique link</a> when the benchmark database has more records.</h6>

     </div>
     </div>


  <div class="page-break"></div>
  </div>

  <div class="col-sm-6" style="width: 100%;  margin-left:30px;"><h2>Pointers for Improvement<h2></div>
<div class="modalcontainer" style="margin-bottom:50px; margin-left:25px;">
 <div class="row align-items-center mt-2">

@include ('layouts.modaladvice')

</div>
</div>

<script>

var tempArray = <?php echo json_encode($results); ?>;

var userAll = Object.values(tempArray);
var answers = userAll.slice(0,36); //this gives the range of values to execute the rest of the script

var VCSum = Math.round(answers.reduce((a,b)=>(a+Math.abs(b)),0)/36);

var size0 = 3;
var size1 = 2;

//A-ring
var AA11Sum = Math.round(answers.slice(0,3).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA12Sum = Math.round(answers.slice(3,6).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA21Sum = Math.round(answers.slice(6,9).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA22Sum = Math.round(answers.slice(9,12).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA31Sum = Math.round(answers.slice(12,15).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA32Sum = Math.round(answers.slice(15,18).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA41Sum = Math.round(answers.slice(18,21).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA42Sum = Math.round(answers.slice(21,24).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA51Sum = Math.round(answers.slice(24,27).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA52Sum = Math.round(answers.slice(27,30).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA61Sum = Math.round(answers.slice(30,33).reduce((a,b)=>(a+Math.abs(b)),0)/size0);
var AA62Sum = Math.round(answers.slice(33,36).reduce((a,b)=>(a+Math.abs(b)),0)/size0);

var thresh = 67;

if (AA11Sum < thresh )
{
document.getElementById("myModalA01").style.display = "inline-block";
}
if (AA12Sum < thresh )
{
document.getElementById("myModalA02").style.display = "inline-block";
}
if (AA12Sum < thresh )
{
document.getElementById("myModalA03").style.display = "inline-block";
}
if (AA21Sum < thresh )
{
document.getElementById("myModalA04").style.display = "inline-block";
}
if (AA22Sum < thresh )
{
document.getElementById("myModalA05").style.display = "inline-block";
}
if (AA31Sum < thresh )
{
document.getElementById("myModalA06").style.display = "inline-block";
}
if (AA32Sum < thresh )
{
document.getElementById("myModalA07").style.display = "inline-block";
}
if (AA41Sum < thresh )
{
document.getElementById("myModalA08").style.display = "inline-block";
}
if (AA42Sum < thresh )
{
document.getElementById("myModalA09").style.display = "inline-block";
}
if (AA51Sum < thresh )
{
document.getElementById("myModalA10").style.display = "inline-block";
}
if (AA52Sum < thresh )
{
document.getElementById("myModalA11").style.display = "inline-block";
}
if (AA61Sum < thresh )
{
document.getElementById("myModalA12").style.display = "inline-block";
}
if (AA62Sum < thresh )
{
document.getElementById("myModalA02").style.display = "inline-block";
}


</script>

  <script>
  (function( w, d ) {
   'use strict';

   d.querySelector( '.btn-print' ).addEventListener( 'click', function() { w.print(); }, false );

  }( window, document ));
  </script>


  @endsection
