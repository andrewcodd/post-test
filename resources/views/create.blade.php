@extends ('layouts.master')


<div class="blog-header" style="margin:8px 0 15px 0;">
  <div class="container">
    <h2>Value Creation Potential Assessment</h2>
    <p class="lead blog-description">Answer these questions to get your VC Potential Score</p>
     </div>
</div>


@section ('content')

<form action="store" method="post">

    <div class="container-fluid mt-4" style="margin:8px 0 15px 0;">


    <div class="row test">
      <div class="col-sm-6"><h5 style="color: #000000;text-align: left">QUESTION</h5></div>
      <div class="col-sm-6"><h5 style="color: #000000;text-align: center">ANSWER</h5></div>
    </div>


    <div class="row align-items-center mt-2">
      <div class="col-sm-6"><label for="1A0111">Q1. When you create a model that finally produces the results you expect you no longer change it.</label></div>
      <div class="col-sm-6">
        <div class="button-holder">
        <input type="radio" class="regular-radio" id="001" name="1A0111" value="100" checked><label for="001">Never</label>
        <input type="radio" class="regular-radio" id="002" name="1A0111" value="83"><label for="002">Rarely</label>
        <input type="radio" class="regular-radio" id="003" name="1A0111" value="67"><label for="003">Sometimes</label>
        <input type="radio" class="regular-radio" id="004" name="1A0111" value="50"><label for="004">Often</label>
        <input type="radio" class="regular-radio" id="005" name="1A0111" value="40"><label for="005">Mostly</label>
        <input type="radio" class="regular-radio" id="006" name="1A0111" value="0"><label for="006">Always</label>
      </div>
    </div>
  </div>


  <div class="row align-items-center mt-2">
    <div class="col-sm-6"><label for="1A0211">Q2. When you run into a business problem you don't know how to answer you say I don't know but maybe I can find out and you work as hard as you can to do that.</label></div>
    <div class="col-sm-6">
      <div class="button-holder">
      <input type="radio" class="regular-radio" id="007" name="1A0211" value="0" checked><label for="007">Never</label>
      <input type="radio" class="regular-radio" id="008" name="1A0211" value="40"><label for="008">Rarely</label>
      <input type="radio" class="regular-radio" id="009" name="1A0211" value="50"><label for="009">Sometimes</label>
      <input type="radio" class="regular-radio" id="010" name="1A0211" value="67"><label for="010">Often</label>
      <input type="radio" class="regular-radio" id="011" name="1A0211" value="83"><label for="011">Mostly</label>
      <input type="radio" class="regular-radio" id="012" name="1A0211" value="100"><label for="012">Always</label>
    </div>
    </div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0311">Q3. You are tuned into what your immediate stakeholders wants are and their perceptions of what they think they have.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="013" name="1A0311" value="0" checked><label for="013">Never</label>
    <input type="radio" class="regular-radio" id="014" name="1A0311" value="40"><label for="014">Rarely</label>
    <input type="radio" class="regular-radio" id="015" name="1A0311" value="50"><label for="015">Sometimes</label>
    <input type="radio" class="regular-radio" id="016" name="1A0311" value="67"><label for="016">Often</label>
    <input type="radio" class="regular-radio" id="017" name="1A0311" value="83"><label for="017">Mostly</label>
    <input type="radio" class="regular-radio" id="018" name="1A0311" value="100"><label for="018">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0411">Q4. You are an early knower in that you get informal and incomplete information in time to do something about it.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="019" name="1A0411" value="0" checked><label for="019">Never</label>
  <input type="radio" class="regular-radio" id="020" name="1A0411" value="40"><label for="020">Rarely</label>
  <input type="radio" class="regular-radio" id="021" name="1A0411" value="50"><label for="021">Sometimes</label>
  <input type="radio" class="regular-radio" id="022" name="1A0411" value="67"><label for="022">Often</label>
  <input type="radio" class="regular-radio" id="023" name="1A0411" value="83"><label for="023">Mostly</label>
  <input type="radio" class="regular-radio" id="024" name="1A0411" value="100"><label for="024">Always</label>
</div>
</div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0511">Q5. You have gained a broad knowledge of analytical tools and methodologies based on what you've read and heard but you are slow to test them out.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="025" name="1A0511" value="100" checked><label for="025">Never</label>
    <input type="radio" class="regular-radio" id="026" name="1A0511" value="83"><label for="026">Rarely</label>
    <input type="radio" class="regular-radio" id="027" name="1A0511" value="67"><label for="027">Sometimes</label>
    <input type="radio" class="regular-radio" id="028" name="1A0511" value="50"><label for="028">Often</label>
    <input type="radio" class="regular-radio" id="029" name="1A0511" value="40"><label for="029">Mostly</label>
    <input type="radio" class="regular-radio" id="030" name="1A0511" value="0"><label for="030">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0611">Q6. You tend to put your own viewpoints ahead others as yours are always the most accurate and complete.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="031" name="1A0611" value="100" checked><label for="031">Never</label>
  <input type="radio" class="regular-radio" id="032" name="1A0611" value="83"><label for="032">Rarely</label>
  <input type="radio" class="regular-radio" id="033" name="1A0611" value="67"><label for="033">Sometimes</label>
  <input type="radio" class="regular-radio" id="034" name="1A0611" value="50"><label for="034">Often</label>
  <input type="radio" class="regular-radio" id="035" name="1A0611" value="40"><label for="035">Mostly</label>
  <input type="radio" class="regular-radio" id="036" name="1A0611" value="0"><label for="036">Always</label>
</div>
</div>
</div>

<hr/>



    <div class="row test">
      <div class="col-sm-6"><h5 style="color: #000000;text-align: left">QUESTION</h5></div>
      <div class="col-sm-6"><h5 style="color: #000000;text-align: center">ANSWER</h5></div>
    </div>


    <div class="row align-items-center mt-2">
      <div class="col-sm-6"><label for="1A0122">Q7. You tend to question everything, dig deeper, try to understand the context, origin and history of things, put them into a new perspective, brainstorm new angles, and even play with ideas.</label></div>
      <div class="col-sm-6">
        <div class="button-holder">
        <input type="radio" class="regular-radio" id="037" name="1A0122" value="0" checked><label for="037">Never</label>
        <input type="radio" class="regular-radio" id="038" name="1A0122" value="40"><label for="038">Rarely</label>
        <input type="radio" class="regular-radio" id="039" name="1A0122" value="50"><label for="039">Sometimes</label>
        <input type="radio" class="regular-radio" id="040" name="1A0122" value="67"><label for="040">Often</label>
        <input type="radio" class="regular-radio" id="041" name="1A0122" value="83"><label for="041">Mostly</label>
        <input type="radio" class="regular-radio" id="042" name="1A0122" value="100"><label for="042">Always</label>
      </div>
      </div>
    </div>

  <div class="row align-items-center mt-2">
    <div class="col-sm-6"><label for="1A0222">Q8. You are known as a good storyteller, able to explain financial information in a way that others find easy to understand and take appropriate actions around.</label></div>
    <div class="col-sm-6">
      <div class="button-holder">
      <input type="radio" class="regular-radio" id="043" name="1A0222" value="0" checked><label for="043">Never</label>
      <input type="radio" class="regular-radio" id="044" name="1A0222" value="40"><label for="044">Rarely</label>
      <input type="radio" class="regular-radio" id="045" name="1A0222" value="50"><label for="045">Sometimes</label>
      <input type="radio" class="regular-radio" id="046" name="1A0222" value="67"><label for="046">Often</label>
      <input type="radio" class="regular-radio" id="047" name="1A0222" value="83"><label for="047">Mostly</label>
      <input type="radio" class="regular-radio" id="048" name="1A0222" value="100"><label for="048">Always</label>
    </div>
    </div>
  </div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0322">Q9. You find it difficult to read others and so may find you lack confidence or have difficulty in building relationships easily.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="049" name="1A0322" value="100" checked><label for="049">Never</label>
    <input type="radio" class="regular-radio" id="050" name="1A0322" value="83"><label for="050">Rarely</label>
    <input type="radio" class="regular-radio" id="051" name="1A0322" value="67"><label for="051">Sometimes</label>
    <input type="radio" class="regular-radio" id="052" name="1A0322" value="50"><label for="052">Often</label>
    <input type="radio" class="regular-radio" id="053" name="1A0322" value="40"><label for="053">Mostly</label>
    <input type="radio" class="regular-radio" id="054" name="1A0322" value="0"><label for="054">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0422">Q10. You consistently share knowledge and make others aware of opportunities that will add value to them.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="055" name="1A0422" value="0" checked><label for="055">Never</label>
  <input type="radio" class="regular-radio" id="056" name="1A0422" value="40"><label for="056">Rarely</label>
  <input type="radio" class="regular-radio" id="057" name="1A0422" value="50"><label for="057">Sometimes</label>
  <input type="radio" class="regular-radio" id="058" name="1A0422" value="67"><label for="058">Often</label>
  <input type="radio" class="regular-radio" id="059" name="1A0422" value="83"><label for="059">Mostly</label>
  <input type="radio" class="regular-radio" id="060" name="1A0422" value="100"><label for="060">Always</label>
</div>
</div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0522">Q11. You continuously apply your tech & data knowledge to ensure your proficiency and adoption of relevant technologies to better create value for stakeholders.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="061" name="1A0522" value="0" checked><label for="061">Never</label>
    <input type="radio" class="regular-radio" id="062" name="1A0522" value="40"><label for="062">Rarely</label>
    <input type="radio" class="regular-radio" id="063" name="1A0522" value="50"><label for="063">Sometimes</label>
    <input type="radio" class="regular-radio" id="064" name="1A0522" value="67"><label for="064">Often</label>
    <input type="radio" class="regular-radio" id="065" name="1A0522" value="83"><label for="065">Mostly</label>
    <input type="radio" class="regular-radio" id="066" name="1A0522" value="100"><label for="066">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0622">Q12. You articulate what value you have provided your organisation in the last month in return for your salary that could not be bought elsewhere for less.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="067" name="1A0622" value="0" checked><label for="067">Never</label>
  <input type="radio" class="regular-radio" id="068" name="1A0622" value="40"><label for="068">Rarely</label>
  <input type="radio" class="regular-radio" id="069" name="1A0622" value="50"><label for="069">Sometimes</label>
  <input type="radio" class="regular-radio" id="070" name="1A0622" value="67"><label for="070">Often</label>
  <input type="radio" class="regular-radio" id="071" name="1A0622" value="83"><label for="071">Mostly</label>
  <input type="radio" class="regular-radio" id="072" name="1A0622" value="100"><label for="072">Always</label>
</div>
</div>
</div>

<hr/>


    <div class="row test">
      <div class="col-sm-6"><h5 style="color: #000000;text-align: left">QUESTION</h5></div>
      <div class="col-sm-6"><h5 style="color: #000000;text-align: center">ANSWER</h5></div>
    </div>


    <div class="row align-items-center mt-2">
      <div class="col-sm-6"><label for="1A0113">Q13. You like taking on short term project assignments where you are expected to learn a lot about the new subject matter in a short period of time before moving onto the next one.</label></div>
      <div class="col-sm-6">
        <div class="button-holder">
        <input type="radio" class="regular-radio" id="073" name="1A0113" value="0" checked><label for="073">Never</label>
        <input type="radio" class="regular-radio" id="074" name="1A0113" value="40"><label for="074">Rarely</label>
        <input type="radio" class="regular-radio" id="075" name="1A0113" value="50"><label for="075">Sometimes</label>
        <input type="radio" class="regular-radio" id="076" name="1A0113" value="67"><label for="076">Often</label>
        <input type="radio" class="regular-radio" id="077" name="1A0113" value="83"><label for="077">Mostly</label>
        <input type="radio" class="regular-radio" id="078" name="1A0113" value="100"><label for="078">Always</label>
      </div>
      </div>
  </div>

  <div class="row align-items-center mt-2">
    <div class="col-sm-6"><label for="1A0213">Q14. You regularly aim to understand the implications of data and information versus getting bogged down in data.</label></div>
    <div class="col-sm-6">
      <div class="button-holder">
      <input type="radio" class="regular-radio" id="079" name="1A0213" value="0" checked><label for="079">Never</label>
      <input type="radio" class="regular-radio" id="080" name="1A0213" value="40"><label for="080">Rarely</label>
      <input type="radio" class="regular-radio" id="081" name="1A0213" value="50"><label for="081">Sometimes</label>
      <input type="radio" class="regular-radio" id="082" name="1A0213" value="67"><label for="082">Often</label>
      <input type="radio" class="regular-radio" id="083" name="1A0213" value="83"><label for="083">Mostly</label>
      <input type="radio" class="regular-radio" id="084" name="1A0213" value="100"><label for="084">Always</label>
    </div>
    </div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0313">Q15. You have a habit of shutting people down because of your impatience to solve problems and get answers.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="085" name="1A0313" value="100" checked><label for="085">Never</label>
    <input type="radio" class="regular-radio" id="086" name="1A0313" value="83"><label for="086">Rarely</label>
    <input type="radio" class="regular-radio" id="087" name="1A0313" value="67"><label for="087">Sometimes</label>
    <input type="radio" class="regular-radio" id="088" name="1A0313" value="50"><label for="088">Often</label>
    <input type="radio" class="regular-radio" id="089" name="1A0313" value="40"><label for="089">Mostly</label>
    <input type="radio" class="regular-radio" id="090" name="1A0313" value="0"><label for="090">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0413">Q16. When others are communicating you take the time to hear and consider what isn't being said.</label></div>
<div class="col-sm-6">
  <input type="radio" class="regular-radio" id="205" name="1A0413" value="0" checked><label for="205">Never</label>
  <input type="radio" class="regular-radio" id="206" name="1A0413" value="40"><label for="206">Rarely</label>
  <input type="radio" class="regular-radio" id="207" name="1A0413" value="50"><label for="207">Sometimes</label>
  <input type="radio" class="regular-radio" id="208" name="1A0413" value="67"><label for="208">Often</label>
  <input type="radio" class="regular-radio" id="209" name="1A0413" value="83"><label for="209">Mostly</label>
  <input type="radio" class="regular-radio" id="210" name="1A0413" value="100"><label for="210">Always</label>
</div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0513">Q17. You can articulate how a technology investment will help accomplish specific short- and long-term business goals.</label></div>
  <div class="col-sm-6">
    <input type="radio" class="regular-radio" id="211" name="1A0513" value="0" checked><label for="211">Never</label>
    <input type="radio" class="regular-radio" id="212" name="1A0513" value="40"><label for="212">Rarely</label>
    <input type="radio" class="regular-radio" id="213" name="1A0513" value="50"><label for="213">Sometimes</label>
    <input type="radio" class="regular-radio" id="214" name="1A0513" value="67"><label for="214">Often</label>
    <input type="radio" class="regular-radio" id="215" name="1A0513" value="83"><label for="215">Mostly</label>
    <input type="radio" class="regular-radio" id="216" name="1A0513" value="100"><label for="216">Always</label>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0613">Q18. You create transparency by openly declaring and clarifying your intent with others so you have no hidden agenda.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="091" name="1A0613" value="0" checked><label for="091">Never</label>
  <input type="radio" class="regular-radio" id="092" name="1A0613" value="40"><label for="092">Rarely</label>
  <input type="radio" class="regular-radio" id="093" name="1A0613" value="50"><label for="093">Sometimes</label>
  <input type="radio" class="regular-radio" id="094" name="1A0613" value="67"><label for="094">Often</label>
  <input type="radio" class="regular-radio" id="095" name="1A0613" value="83"><label for="095">Mostly</label>
  <input type="radio" class="regular-radio" id="096" name="1A0613" value="100"><label for="096">Always</label>
</div>
</div>
</div>

<hr/>


    <div class="row test">
      <div class="col-sm-6"><h5 style="color: #000000;text-align: left">QUESTION</h5></div>
      <div class="col-sm-6"><h5 style="color: #000000;text-align: center">ANSWER</h5></div>
    </div>


    <div class="row align-items-center mt-2">
      <div class="col-sm-6"><label for="1A0121">Q19. You deconstruct big problems from a dense mass into smaller interconnected problems rather than going for a grand unifying solution</label></div>
      <div class="col-sm-6">
        <div class="button-holder">
        <input type="radio" class="regular-radio" id="097" name="1A0121" value="0" checked><label for="097">Never</label>
        <input type="radio" class="regular-radio" id="098" name="1A0121" value="40"><label for="098">Rarely</label>
        <input type="radio" class="regular-radio" id="099" name="1A0121" value="50"><label for="099">Sometimes</label>
        <input type="radio" class="regular-radio" id="100" name="1A0121" value="67"><label for="100">Often</label>
        <input type="radio" class="regular-radio" id="101" name="1A0121" value="83"><label for="101">Mostly</label>
        <input type="radio" class="regular-radio" id="102" name="1A0121" value="100"><label for="102">Always</label>
      </div>
      </div>
  </div>

  <div class="row align-items-center mt-2">
    <div class="col-sm-6"><label for="1A0221">Q20. You enjoy evaluating information and then getting involved deploying potential solutions rather than leaving it simply developing a potential solution.</label></div>
    <div class="col-sm-6">
      <div class="button-holder">
      <input type="radio" class="regular-radio" id="103" name="1A0221" value="0" checked><label for="103">Never</label>
      <input type="radio" class="regular-radio" id="104" name="1A0221" value="40"><label for="104">Rarely</label>
      <input type="radio" class="regular-radio" id="105" name="1A0221" value="50"><label for="105">Sometimes</label>
      <input type="radio" class="regular-radio" id="106" name="1A0221" value="67"><label for="106">Often</label>
      <input type="radio" class="regular-radio" id="107" name="1A0221" value="83"><label for="107">Mostly</label>
      <input type="radio" class="regular-radio" id="108" name="1A0221" value="100"><label for="108">Always</label>
    </div>
    </div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0321">Q21. You always have a lot on your plate but you can discern between what's urgent and important so you rarely feel overwhelmed.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="109" name="1A0321" value="0" checked><label for="109">Never</label>
    <input type="radio" class="regular-radio" id="110" name="1A0321" value="40"><label for="110">Rarely</label>
    <input type="radio" class="regular-radio" id="111" name="1A0321" value="50"><label for="111">Sometimes</label>
    <input type="radio" class="regular-radio" id="112" name="1A0321" value="67"><label for="112">Often</label>
    <input type="radio" class="regular-radio" id="113" name="1A0321" value="83"><label for="113">Mostly</label>
    <input type="radio" class="regular-radio" id="114" name="1A0321" value="100"><label for="114">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0421">Q22. You assume that once communicated expectations of others are clear.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="115" name="1A0421" value="100" checked><label for="115">Never</label>
  <input type="radio" class="regular-radio" id="116" name="1A0421" value="83"><label for="116">Rarely</label>
  <input type="radio" class="regular-radio" id="117" name="1A0421" value="67"><label for="117">Sometimes</label>
  <input type="radio" class="regular-radio" id="118" name="1A0421" value="50"><label for="118">Often</label>
  <input type="radio" class="regular-radio" id="119" name="1A0421" value="40"><label for="119">Mostly</label>
  <input type="radio" class="regular-radio" id="120" name="1A0421" value="0"><label for="120">Always</label>
</div>
</div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0521">Q23. You check in regularly with managers & stakeholders that you are adding value to them and positively impacting them so that you continue to remain relevant.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="121" name="1A0521" value="0" checked><label for="121">Never</label>
    <input type="radio" class="regular-radio" id="122" name="1A0521" value="40"><label for="122">Rarely</label>
    <input type="radio" class="regular-radio" id="123" name="1A0521" value="50"><label for="123">Sometimes</label>
    <input type="radio" class="regular-radio" id="124" name="1A0521" value="67"><label for="124">Often</label>
    <input type="radio" class="regular-radio" id="125" name="1A0521" value="83"><label for="125">Mostly</label>
    <input type="radio" class="regular-radio" id="126" name="1A0521" value="100"><label for="126">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0621">Q24. You can communicate a compelling and inspired vision or sense of core purpose around the work you do.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="127" name="1A0621" value="0" checked><label for="127">Never</label>
  <input type="radio" class="regular-radio" id="128" name="1A0621" value="40"><label for="128">Rarely</label>
  <input type="radio" class="regular-radio" id="129" name="1A0621" value="50"><label for="129">Sometimes</label>
  <input type="radio" class="regular-radio" id="130" name="1A0621" value="67"><label for="130">Often</label>
  <input type="radio" class="regular-radio" id="131" name="1A0621" value="83"><label for="131">Mostly</label>
  <input type="radio" class="regular-radio" id="132" name="1A0621" value="100"><label for="132">Always</label>
</div>
</div>
</div>

<hr/>


    <div class="row test">
      <div class="col-sm-6"><h5 style="color: #000000;text-align: left">QUESTION</h5></div>
      <div class="col-sm-6"><h5 style="color: #000000;text-align: center">ANSWER</h5></div>
    </div>


    <div class="row align-items-center mt-2">
      <div class="col-sm-6"><label for="1A0112">Q25. You seek to connect your mental models to reality, and refine them by experience to assimilate new ones.</label></div>
      <div class="col-sm-6">
        <div class="button-holder">
        <input type="radio" class="regular-radio" id="133" name="1A0112" value="0" checked><label for="133">Never</label>
        <input type="radio" class="regular-radio" id="134" name="1A0112" value="40"><label for="134">Rarely</label>
        <input type="radio" class="regular-radio" id="135" name="1A0112" value="50"><label for="135">Sometimes</label>
        <input type="radio" class="regular-radio" id="136" name="1A0112" value="67"><label for="136">Often</label>
        <input type="radio" class="regular-radio" id="137" name="1A0112" value="83"><label for="137">Mostly</label>
        <input type="radio" class="regular-radio" id="138" name="1A0112" value="100"><label for="138">Always</label>
      </div>
      </div>
  </div>

  <div class="row align-items-center mt-2">
    <div class="col-sm-6"><label for="1A0212">Q26. You always seek out new options, identify bottlenecks and the paths of least resistance.</label></div>
    <div class="col-sm-6">
      <div class="button-holder">
      <input type="radio" class="regular-radio" id="139" name="1A0212" value="0" checked><label for="139">Never</label>
      <input type="radio" class="regular-radio" id="140" name="1A0212" value="40"><label for="140">Rarely</label>
      <input type="radio" class="regular-radio" id="141" name="1A0212" value="50"><label for="141">Sometimes</label>
      <input type="radio" class="regular-radio" id="142" name="1A0212" value="67"><label for="142">Often</label>
      <input type="radio" class="regular-radio" id="143" name="1A0212" value="83"><label for="143">Mostly</label>
      <input type="radio" class="regular-radio" id="144" name="1A0212" value="100"><label for="144">Always</label>
    </div>
    </div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0312">Q27. You examine situations from your own perspective and gut-feel first then from the other person's perspective.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="145" name="1A0312" value="100" checked><label for="145">Never</label>
    <input type="radio" class="regular-radio" id="146" name="1A0312" value="83"><label for="146">Rarely</label>
    <input type="radio" class="regular-radio" id="147" name="1A0312" value="67"><label for="147">Sometimes</label>
    <input type="radio" class="regular-radio" id="148" name="1A0312" value="50"><label for="148">Often</label>
    <input type="radio" class="regular-radio" id="149" name="1A0312" value="40"><label for="149">Mostly</label>
    <input type="radio" class="regular-radio" id="150" name="1A0312" value="0"><label for="150">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0412">Q28. You don't like negotiation or are unresponsive to requests to help in solving problems.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="151" name="1A0412" value="100" checked><label for="151">Never</label>
  <input type="radio" class="regular-radio" id="152" name="1A0412" value="83"><label for="152">Rarely</label>
  <input type="radio" class="regular-radio" id="153" name="1A0412" value="67"><label for="153">Sometimes</label>
  <input type="radio" class="regular-radio" id="154" name="1A0412" value="50"><label for="154">Often</label>
  <input type="radio" class="regular-radio" id="155" name="1A0412" value="40"><label for="155">Mostly</label>
  <input type="radio" class="regular-radio" id="156" name="1A0412" value="0"><label for="156">Always</label>
</div>
</div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0512">Q29. You can weave together business and technical architectures (e.g., code, designing user interfaces and experiences, technology vendor management) to create digital solutions that add value to stakeholders.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="157" name="1A0512" value="0" checked><label for="157">Never</label>
    <input type="radio" class="regular-radio" id="158" name="1A0512" value="40"><label for="158">Rarely</label>
    <input type="radio" class="regular-radio" id="159" name="1A0512" value="50"><label for="159">Sometimes</label>
    <input type="radio" class="regular-radio" id="160" name="1A0512" value="67"><label for="160">Often</label>
    <input type="radio" class="regular-radio" id="161" name="1A0512" value="83"><label for="161">Mostly</label>
    <input type="radio" class="regular-radio" id="162" name="1A0512" value="100"><label for="162">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0612">Q30. You know where your work is heading, have an idea of the impact it will make and can keep focussed on delivering it.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="163" name="1A0612" value="0" checked><label for="163">Never</label>
  <input type="radio" class="regular-radio" id="164" name="1A0612" value="40"><label for="164">Rarely</label>
  <input type="radio" class="regular-radio" id="165" name="1A0612" value="50"><label for="165">Sometimes</label>
  <input type="radio" class="regular-radio" id="166" name="1A0612" value="67"><label for="166">Often</label>
  <input type="radio" class="regular-radio" id="167" name="1A0612" value="83"><label for="167">Mostly</label>
  <input type="radio" class="regular-radio" id="168" name="1A0612" value="100"><label for="168">Always</label>
</div>
</div>
</div>

<hr/>


    <div class="row test">
      <div class="col-sm-6"><h5 style="color: #000000;text-align: left">QUESTION</h5></div>
      <div class="col-sm-6"><h5 style="color: #000000;text-align: center">ANSWER</h5></div>
    </div>


    <div class="row align-items-center mt-2">
      <div class="col-sm-6"><label for="1A0123">Q31. You don't look past the obvious and particularly when you're busy you stop at first answers.</label></div>
      <div class="col-sm-6">
        <div class="button-holder">
        <input type="radio" class="regular-radio" id="169" name="1A0123" value="100" checked><label for="169">Never</label>
        <input type="radio" class="regular-radio" id="170" name="1A0123" value="83"><label for="170">Rarely</label>
        <input type="radio" class="regular-radio" id="171" name="1A0123" value="67"><label for="171">Sometimes</label>
        <input type="radio" class="regular-radio" id="172" name="1A0123" value="50"><label for="172">Often</label>
        <input type="radio" class="regular-radio" id="173" name="1A0123" value="40"><label for="173">Mostly</label>
        <input type="radio" class="regular-radio" id="174" name="1A0123" value="0"><label for="174">Always</label>
      </div>
      </div>
  </div>

  <div class="row align-items-center mt-2">
    <div class="col-sm-6"><label for="1A0223">Q32. You focus on the  details and loads of metrics rather than the vital few when analysing & reporting what is going on.</label></div>
    <div class="col-sm-6">
      <div class="button-holder">
      <input type="radio" class="regular-radio" id="175" name="1A0223" value="100" checked><label for="175">Never</label>
      <input type="radio" class="regular-radio" id="176" name="1A0223" value="83"><label for="176">Rarely</label>
      <input type="radio" class="regular-radio" id="177" name="1A0223" value="67"><label for="177">Sometimes</label>
      <input type="radio" class="regular-radio" id="178" name="1A0223" value="50"><label for="178">Often</label>
      <input type="radio" class="regular-radio" id="179" name="1A0223" value="40"><label for="179">Mostly</label>
      <input type="radio" class="regular-radio" id="180" name="1A0223" value="0"><label for="180">Always</label>
    </div>
    </div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0323">Q33. You place more emphasis on getting work done rather than building rapport or fostering relationships with others.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="181" name="1A0323" value="100" checked><label for="181">Never</label>
    <input type="radio" class="regular-radio" id="182" name="1A0323" value="83"><label for="182">Rarely</label>
    <input type="radio" class="regular-radio" id="183" name="1A0323" value="67"><label for="183">Sometimes</label>
    <input type="radio" class="regular-radio" id="184" name="1A0323" value="50"><label for="184">Often</label>
    <input type="radio" class="regular-radio" id="185" name="1A0323" value="40"><label for="185">Mostly</label>
    <input type="radio" class="regular-radio" id="186" name="1A0323" value="0"><label for="186">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0423">Q34. You know or regularly ask yourself who you need to know who can help you figure out what you need to be doing to continually add value.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="187" name="1A0423" value="0" checked><label for="187">Never</label>
  <input type="radio" class="regular-radio" id="188" name="1A0423" value="40"><label for="188">Rarely</label>
  <input type="radio" class="regular-radio" id="189" name="1A0423" value="50"><label for="189">Sometimes</label>
  <input type="radio" class="regular-radio" id="190" name="1A0423" value="67"><label for="190">Often</label>
  <input type="radio" class="regular-radio" id="191" name="1A0423" value="83"><label for="191">Mostly</label>
  <input type="radio" class="regular-radio" id="192" name="1A0423" value="100"><label for="192">Always</label>
</div>
</div>
</div>

<div class="row align-items-center mt-2">
  <div class="col-sm-6"><label for="1A0523">Q35. You keep a value log that you update regularly to keep track of all the value you have created directedly or indirectly.</label></div>
  <div class="col-sm-6">
    <div class="button-holder">
    <input type="radio" class="regular-radio" id="193" name="1A0523" value="0" checked><label for="193">Never</label>
    <input type="radio" class="regular-radio" id="194" name="1A0523" value="40"><label for="194">Rarely</label>
    <input type="radio" class="regular-radio" id="195" name="1A0523" value="50"><label for="195">Sometimes</label>
    <input type="radio" class="regular-radio" id="196" name="1A0523" value="67"><label for="196">Often</label>
    <input type="radio" class="regular-radio" id="197" name="1A0523" value="83"><label for="197">Mostly</label>
    <input type="radio" class="regular-radio" id="198" name="1A0523" value="100"><label for="198">Always</label>
  </div>
  </div>
</div>

<div class="row align-items-center mt-2">
<div class="col-sm-6"><label for="1A0623">Q36. You seek to disclose and reveal expectations, validate them and even renegotiate them if they add more value to the business.</label></div>
<div class="col-sm-6">
  <div class="button-holder">
  <input type="radio" class="regular-radio" id="199" name="1A0623" value="0" checked><label for="199">Never</label>
  <input type="radio" class="regular-radio" id="200" name="1A0623" value="40"><label for="200">Rarely</label>
  <input type="radio" class="regular-radio" id="201" name="1A0623" value="50"><label for="201">Sometimes</label>
  <input type="radio" class="regular-radio" id="202" name="1A0623" value="67"><label for="202">Often</label>
  <input type="radio" class="regular-radio" id="203" name="1A0623" value="83"><label for="203">Mostly</label>
  <input type="radio" class="regular-radio" id="204" name="1A0623" value="100"><label for="204">Always</label>
</div>
</div>
</div>

<hr/>

    <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
        <input type="hidden" name="user_id" value="{{ $user ->id}}"><br/>

    <label for=""></label>
    <input type="submit" name="submit" value="Click to Submit">

</div>
</form>

@endsection
