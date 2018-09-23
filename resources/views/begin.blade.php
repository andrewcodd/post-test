@extends ('layouts.master')

<style>

#example1
 {
     width: 1040px;
     background-image: url("BackgroundVCBegin.png");
       background-color: #cccccc; /* Used if the image is unavailable */
     background-position: center; /* Center the image */
     background-repeat: no-repeat; /* Do not repeat the image */
     background-size: cover; /* Resize the background image to cover the entire container */
     height:588px;


}

.column {
    float: left;
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

#one label {
    width: 10em;
    text-align: right;
    display: inline-block;
}

#two label {
    width: 10em;
    text-align: right;
    display: inline-block;
    margin: 0px 0px 0px 0px;
}

.buttonHolder{ text-align: center; }

input[type=checkbox] {
  transform: scale(1.5);

}

input::placeholder {
  color: grey;
  font-size:14px;
}


</style>

<div style="background-color=#3f3f3f">
<div class="container" id="example1">
<div class="row">
    <div class="column">
    </div>
    <div class="column">

<div class="blog-header" style="margin:8px 0 2px 8px;">

    <h1 style="color:white">Value Score Assessment</h1>
    <p class="lead blog-description" style="margin:8px 0 2px 4px;">Take the 5 minute assessment & uncover how to improve your value creation potential.</p>
     </div>


@section ('content')
<form action="userstore" method="post">
  <div id="one">
    <label for="name" style="color:white">Name:</label>
    <input type="text" name="name" value="" placeholder="First & Last Name" size="25"><br/>

    <label for="email" style="color:white">Email:</label>
    <input type="text" name="email" value="" placeholder="Required to Ensure Benchmark Integrity" size="25"><br/>

    <label for="role" style="color:white">Role: </label>
    <input type="text" name="role" value="" placeholder="Your Current Title" size="25"><br/>

    <label for="org" style="color:white">Org code:</label>
    <input type="text" name="org" value="" placeholder="Optional Code for Participating Organisations" size="25"><br/>
</div>
  <div id="two">
  <p class="lead blog-description" style="margin:8px 0 0px -10px;">For A Benchmarking Comparison Select Your Current:</p>

      <label for="size" style="color:white">Revenue in US$:</label><select id="size_list" name="size">
        <option selected="selected">-- choose one --</option>
        <?php
        // A sample product array
        $products = array("1M to 10M","10M to 50M","50M to 100M","100M to 250M","250M to 1000M","1000M to 5000M","Greater than 5000M");

        // Iterating through the product array
        foreach($products as $item){
        ?>``
        <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select><br/>


    <label for="country" style="color:white">Country:</label><select id="country_list" name="country">
      <option selected="selected">-- choose one --</option>
      <?php
      // A sample product array
      $products = array("United States","United Kingdom","Ireland","Australia","Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe");

      // Iterating through the product array
      foreach($products as $item){
      ?>``
      <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
      <?php
      }
      ?>
    </select><br/>

    <label for="level" style="color:white">Org Level:</label><select id="level_list" name="level">
      <option selected="selected">-- choose one --</option>
      <?php
      // A sample product array
      $products = array("Associate","Analyst","Advisor","Consultant","Controller","Manager","Director","VP","CFO","CEO");

      // Iterating through the product array
      foreach($products as $item){
      ?>``
      <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
      <?php
      }
      ?>
  </select><br/>



    <label for="industry" style="color:white">Industry:</label><select id="industry_list" name="industry">
      <option selected="selected">-- choose one --</option>
      <?php
      // A sample product array
      $products = array("Accounting", "Aerospace", "Agriculture/Farming","Airlines", "Apparel","Architecture","Automotive","Aviation","Banking","Biotechnology","Broadcast Media","Building Materials","Business Supplies","Capital Markets/Private Equity","Chemicals","Civil Engineering","Commercial Real Estate","Computer Hardware","Computer Software","Computer/Network Security","Construction","Consumer Electronics","Consumer Goods","Consumer Services","Cosmetics","Dairy","Defense/Space","Design","Education","Electronic Manufacturing","Engineering","Entertainment Production","Environmental Services","Events Services","Facilities Services","Financial Services","Fishery","Food Production","Food/Beverages","Gambling/Casinos","Glass/Ceramics/Concrete","Government Administration","Health/Fitness","Higher Education","Hospital/Health Care","Hospitality","Human Resources/HR","Import/Export","Industrial Automation","Information Services","Information Technology/IT","Insurance","International Trade","Investment Banking","Legal Services","Leisure/Travel","Logistics/Procurement","Luxury Goods","Machinery","Management Consulting","Maritime","Marketing/Sales","Media Production","Medical Equipment","Military Industry","Mining/Metals","Museums/Institutions","Music","Newspapers/Journalism","Non-Profit/Volunteering","Oil/Energy/Solar/Greentech","Other Industry","Outsourcing/Offshoring","Package/Freight","Paper/Forestry","Pharmaceuticals","Plastics","Printing","Public Relations/PR","Publishing","Real Estate/Mortgage","Recreational Services","Religious Institutions","Renewables/Environment","Restaurants","Retail Industry","Semiconductors","Shipbuilding","Sporting Goods","Staffing/Recruiting","Supermarkets/Wholesale","Telecommunications","Textiles","Tobacco","Training & Development","Transportation","Utilities","Venture Capital","Wine/Spirits");

      // Iterating through the product array
      foreach($products as $item){
      ?>``
      <option value="<?php echo strtolower($item); ?>"><?php echo $item; ?></option>
      <?php
      }
      ?>
  </select><br/>



</div>
</br>
<div class="buttonHolder" style="margin:-20px 0 2px 4px">
<label for="agree" style="color:white; font-size:12px; margin:0px 0 8px 0px;">I Agree to take and submit my data <a href= "/privacy">(see privacy policy)</a> to receive my Free Assessment:</label>&nbsp;<input type="checkbox" name="agree" value="agree"><br/>

    <label for=""></label>
    <input type="submit" name="submit" value="Click to Submit" style="height:50px; width:200px">
    <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>


</div>
</form>

</div>
</div>
</div>
</div>
@endsection
