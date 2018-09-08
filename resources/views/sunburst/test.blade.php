@extends ('layouts.master')

@section ('content')

     <div class="col-sm-12 blog-main">

     <h1>Take a quick assessment</h1>
     <hr>
         <form method="POST" action="/posts">
           {{ csrf_field() }}
             <div class="form-group">
               <label for="title">Title</label>
               <input type="text" class="form-control" id="title" placeholder="title" name="title">
             </div>
                 <div class="form-group">
                   <label for="body">Body</label>
                   <textarea id="body" name="body" class="form-control"></textarea>

                 </div>


        <div class="container-fluid" style="margin:8px 0 15px 0;">
        <div class="row test">
          <div class="col-sm-6"><h2 style="color: #000000;text-align: left">ANSWER</h2></div>
          <div class="col-sm-6"><h2 style="color: #000000;text-align: center">QUESTION</h2></div>
        </div>

        <div class="row align-items-center mt-4">
          <div class="col-sm-6">You regularly aim to understand the implications of data and information versus getting bogged down in data.</div>
          <div class="col-sm-6">
            <div class="btn-group" role="group" aria-label="Q1">
            <!--div class="btn-group btn-group-toggle" data-toggle="buttons"-->
            <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0101" id="1A0101" value="0" autocomplete="off">Never
              </label>
              <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0101" id="1A0101" value="4" autocomplete="off"> Rarely
              </label>
              <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0101" id="1A0101" value="6" autocomplete="off"> Sometimes
            </label>
            <label class="btn btn-secondary btn-rounded">
              <input type="radio" name="1A0101" id="1A0101" value="7.5" autocomplete="off"> Often
          </label>
          <label class="btn btn-secondary btn-rounded">
            <input type="radio" name="1A0101" id="1A0101" value="8.5" autocomplete="off"> Mostly
        </label>
        <label class="btn btn-secondary btn-rounded">
          <input type="radio" name="1A0101" id="1A0101" value="10" autocomplete="off"> Always
      </label>
          </div>
          </div>
        </div>

        <div class="row align-items-center mt-4">
          <div class="col-sm-6">You will seek to change a configuration if it means it is a better way to get things done.</div>
          <div class="col-sm-6">
            <div class="btn-group" role="group" aria-label="Q2">
            <!--div class="btn-group btn-group-toggle" data-toggle="buttons"-->
            <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0201" id="1A0201" value="0" autocomplete="off">Never
              </label>
              <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0201" id="1A0201" value="4" autocomplete="off"> Rarely
              </label>
              <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0201" id="1A0201" value="6" autocomplete="off"> Sometimes
            </label>
            <label class="btn btn-secondary btn-rounded">
              <input type="radio" name="1A0201" id="1A0201" value="7.5" autocomplete="off"> Often
          </label>
          <label class="btn btn-secondary btn-rounded">
            <input type="radio" name="1A0201" id="1A0201" value="8.5" autocomplete="off"> Mostly
        </label>
        <label class="btn btn-secondary btn-rounded">
          <input type="radio" name="1A0201" id="1A0201" value="10" autocomplete="off"> Always
      </label>
          </div>
          </div>
        </div>

        <div class="row align-items-center mt-4">
          <div class="col-sm-6">You examine situations from other people's perspectives first then before factoring them into your own perspective.</div>
          <div class="col-sm-6">
            <div class="btn-group" role="group" aria-label="Q3">
            <!--div class="btn-group btn-group-toggle" data-toggle="buttons"-->
            <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0301" id="1A0301" value="0" autocomplete="off" checked>Never
              </label>
              <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0301" id="1A0301" value="4" autocomplete="off"> Rarely
              </label>
              <label class="btn btn-secondary btn-rounded">
                <input type="radio" name="1A0301" id="1A0301" value="6" autocomplete="off"> Sometimes
            </label>
            <label class="btn btn-secondary btn-rounded">
              <input type="radio" name="1A0301" id="1A0301" value="7.5" autocomplete="off"> Often
          </label>
          <label class="btn btn-secondary btn-rounded">
            <input type="radio" name="1A0301" id="1A0301" value="8.5" autocomplete="off"> Mostly
        </label>
        <label class="btn btn-secondary btn-rounded">
          <input type="radio" name="1A0301" id="1A0301" value="10" autocomplete="off"> Always
      </label>
          </div>
          </div>
        </div>

      </div>
     <hr>
     <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
     </div>

   @include ('layouts.errors')

  </form>

  </div>
