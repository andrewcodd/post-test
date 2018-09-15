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

<div class="blog-header" style="margin:8px 0 15px 8px;">

    <h1 style="color:white">Value Score Assessment</h1>
    <p class="lead blog-description" style="margin:8px 0 8px 4px;">Enter your details to take the 5 minute assessment and uncover where you can create more value.</p>
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
    <input type="text" name="org" value="" placeholder="Unique Code for Participating Organisations" size="25"><br/>
</div>
  <div id="two">
  <p class="lead blog-description" style="margin:8px 0 8px -10px;">For A Benchmarking Comparison Select Your Current:</p>

      <label for="size" style="color:white">Revenue in US$:</label><select id="size_list" name="size">
      <option></option>
    </select><br/>
    <label for="country" style="color:white">Country:</label><select id="country_list" name="country">
      <option></option>
    </select><br/>
    <label for="level" style="color:white">Org Level:</label><select id="level_list" name="level">
      <option></option>
    </select><br/>
    <label for="industry" style="color:white">Industry:</label><select id="industry_list" name="industry">
      <option></option>
    </select><br/>
            <script src="{{ URL::asset('js\lists.js') }}"></script>
</div>
</br>
<div class="buttonHolder">
<label for="agree" style="color:white; font-size:12px; margin:0px 0 15px 0px;">I Agree to take and submit my data as part of receiving my results of the Assessment:</label>&nbsp;<input type="checkbox" name="agree" value="agree"><br/>

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
