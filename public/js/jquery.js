

$(document).ready(function(){
  $.ajax({
    url: "https://avfww.com/answers",
    method: "GET",
    dataType: "text", //note json on YouTube
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

            var labels = [
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
                  "Aligns"];

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



}
          });



        });
/*
        //up to now same from graph File
              $(data.users)each(function(index,value){
                var record="<tr><td>"+(index+1)+
                "</td><td>"+value.NAME+"</td><td>"+value.AGE+"</td></tr>";
                $("table").append(record);
              });


*/


//NO... TOOK OUT L2 FROM END
