@extends('patient.master')

@section('content')
      <div class="row">
           <header class="text-center">
           <span class="side-toggle" onclick="openNav()">{{ Html::image("patient/images/toggle-btn.png",'alt')}}</span>    
           <a href="index.html">{{ Html::image("patient/images/logo.png")}}</a>
           </header>
          <div class="progress-section">PROGRESS</div>
          
          <div class="main-steps">
          <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span>STEP 1</span> Order Your Impression Kit</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="col-md-6 text-center">{{ Html::image("patient/images/impression-kit-img.png",'alt') }}</div>
            <div class="col-md-6 text-center"><a href="#" class="submit-btn">Get Impression Kit</a></div>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
    <form name="formimage" id="formimage" action="{{ route('savepatientimage') }}" method="post" enctype="multipart/form-data">
     @csrf
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span>STEP 2</span> Take / Upload Selfies</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="col-md-12 text-center">
            <p>Watch the video turtorial for help on snapping your selfies.</p>
            {{ Html::image("patient/images/video.png") }}
            <hr />
            <p>First, upload each of the required images, then, when you’ve got them all uploaded, hit submit all.</p>
            <div class="row upload-section"> 
                    <div class="col-md-3">
                        <strong>Front Profile (No Smile)</strong>
                        {{ Html::image("patient/images/img1.jpg","alt") }} 
                         
                         @if($patientimage->userimage!=NULL)
                        <img src="{{ $patientimage->userimage->image1 }}" >
                        @else 
                         <img id="image-preview"  style="height:100px; width:100px;"  src="" >
                         @endif
                        
                         <input style="display:none" id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0])" type="file" name="image1" id="image1" class="left"  accept="image/jpeg, image/png">

                        <p>A picture of your full front face without a smile.</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick('input-image-hidden');">UPLOAD</a>
                    </div>
                   
                 

                    <div class="col-md-3">
                        <strong>Front Profile (With Smile)</strong>
                        {{ Html::image("patient/images/img2.jpg", "alt") }}
                         @if($patientimage->userimage!=NULL)
                        <img src="{{ $patientimage->userimage->image2 }}" >
                        @else 
                         <img id="image-preview1"  style="height:100px; width:100px;"  src="" >
                         @endif

                        <p>A picture of your full front face with a smile.</p>
                       <a href="#" class="submit-btn" onclick="HandleBrowseClick1('input-image-hidden1');">UPLOAD</a>
                    </div>
                     <input style="display:none" id="input-image-hidden1" onchange="document.getElementById('image-preview1').src = window.URL.createObjectURL(this.files[0])" type="file" name="image2" accept="image/jpeg, image/png">


                    <div class="col-md-3">
                        <strong>Side Profile (No Smile)</strong>
                        {{ Html::image("patient/images/img3.jpg","alt") }}
                           @if($patientimage->userimage!=NULL)
                        <img src="{{ $patientimage->userimage->image3 }}" >
                        @else 
                         <img id="image-preview2"  style="height:100px; width:100px;"  src="" >
                         @endif
                        <p>A picture of your full front face without a smile.</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick2('input-image-hidden2');">UPLOAD</a>
                    </div>
                    <input style="display:none" id="input-image-hidden2" onchange="document.getElementById('image-preview2').src = window.URL.createObjectURL(this.files[0])" type="file" name="image3" accept="image/jpeg, image/png">

                    <div class="col-md-3">
                        <strong>Front Smile</strong>
                        {{ Html::image("patient/images/img4.jpg", "alt" )}}
                       @if($patientimage->userimage!=NULL)
                        <img src="{{ $patientimage->userimage->image4 }}" >
                        @else 
                         <img id="image-preview3"  style="height:100px; width:100px;"  src="" >
                         @endif
                        <p>Capture your full smile from the front showing your teeth</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick3('input-image-hidden3');">UPLOAD</a>
                    </div>
                    <input style="display:none" id="input-image-hidden3" onchange="document.getElementById('image-preview3').src = window.URL.createObjectURL(this.files[0])" type="file" name="image4" accept="image/jpeg, image/png">
            </div>
            <br />
            <br />
            <div class="row upload-section"> 
                    <div class="col-md-3">
                        <strong>Smile Right Side</strong>
                        {{ Html::image("patient/images/img5.jpg","alt" ) }}
                        @if($patientimage->userimage !=NULL)
                        <img src="{{ $patientimage->userimage->image5}}" >
                        @else 
                         <img id="image-preview4"  style="height:100px; width:100px;"  src="" >
                         @endif
                        <p>Capture the right side of your smile showing your teeth</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick4('input-image-hidden4');">UPLOAD</a>
                    </div>
                    <input style="display:none" id="input-image-hidden4" onchange="document.getElementById('image-preview4').src = window.URL.createObjectURL(this.files[0])" type="file" name="image5" accept="image/jpeg, image/png">

                    <div class="col-md-3">
                        <strong>Smile Left Side</strong>
                        {{ Html::image("patient/images/img6.jpg", "alt" ) }}
                         @if($patientimage->userimage !=NULL)
                        <img src="{{ $patientimage->userimage->image6 }}" >
                        @else 
                         <img id="image-preview5"  style="height:100px; width:100px;"  src="" >
                         @endif
                        <p>Capture the left side of your smile showing your teeth</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick5('input-image-hidden5');">UPLOAD</a>
                    </div>
                    <input style="display:none" id="input-image-hidden5" onchange="document.getElementById('image-preview5').src = window.URL.createObjectURL(this.files[0])" type="file" name="image6" accept="image/jpeg, image/png">
                    
                    <div class="col-md-3">
                        <strong>Open Upper Smile</strong>
                        {{ Html::image("patient/images/img7.jpg", "alt" ) }}
                        @if($patientimage->userimage !=NULL)
                        <img src="{{ $patientimage->userimage->image7 }}" >
                        @else 
                         <img id="image-preview6"  style="height:100px; width:100px;"  src="" >
                         @endif
                        <p>Capture your full upper arch with a fully open mouth</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick6('input-image-hidden6');">UPLOAD</a>
                    </div>
                    <input style="display:none" id="input-image-hidden6" onchange="document.getElementById('image-preview6').src = window.URL.createObjectURL(this.files[0])" type="file" name="image7" accept="image/jpeg, image/png">
                    <div class="col-md-3">
                        <strong>Front Profile</strong>
                        {{ Html::image("patient/images/img8.jpg", "alt" ) }}
                        @if($patientimage->userimage!=NULL)
                        <img src="{{ $patientimage->userimage->image8 }}" >
                        @else 
                         <img id="image-preview7"  style="height:100px; width:100px;"  src="" >
                         @endif
                        <p>Capture your full lower arch with a fully open mouth</p>
                        <a href="#" class="submit-btn" onclick="HandleBrowseClick7('input-image-hidden7');">UPLOAD</a>
                    </div>
                     <input style="display:none" id="input-image-hidden7" onchange="document.getElementById('image-preview7').src = window.URL.createObjectURL(this.files[0])" type="file" name="image8" accept="image/jpeg, image/png">
            </div>
            <div class="col-md-12"><br /><br /><br /><br /><a href="#" class="submit-btn bottom-submit">SUBMIT ALL</a>
            <input type="submit" name="submit" value="SUBMIT ALL" class="submit-btn bottom-submit">
            </div>
            </div>
        </div>
      </div>
        </form>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span>STEP 3</span> Take / Post Impressions</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="col-md-12 text-center">
            <p>Watch the video turtorial for help on taking your impressions.</p>
            {{ Html::image("patient/images/video2.jpg")}}
            <hr />
            <br />
            <div class="row impression-section"> 
                <div class="col-md-6">
                    <div class="col-md-4 text-left">
                        <strong>Good Impression</strong><br />
                        <span>Single, clear model of your teeth</span>
                        <span>Gumline Present all the way through</span>
                        <span>Back molars are present</span>
                    </div>
                    <div class="col-md-8">{{ Html::image("patient/images/good-impression.png","alt") }}</div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-4 text-left">
                        <strong>Bad Impression</strong><br />
                        <span>Gumline isn't present throughout</span>
                        <span>Putty isn't mixed properly</span>
                        <span>Uneven pressure applied from front to back</span>
                    </div>
                    <div class="col-md-8">{{ Html::image("patient/images/bad-impression.png" ) }}</div>
                </div>
            </div>
            <br />
            <hr />
            <br />
            <p>Let us know when you have shipped your impressions back to us.</p>
            <form name="impression" id="impression" action="{{ route('saveimpressionshipped') }}" method="post">
             @csrf
            <div class="form-group options">
            <div class="col-md-4">
                <div class="impression-img">{{ Html::image("patient/images/impression-upper.png", "alt")}} 
                <p>2* Upper Impression</p>
                </div>

                <div class="impression-select"><input type="checkbox" name="impressionshipped[]" id="imp" value="2* Upper Impression" required="" /></div>
            </div>
            <div class="col-md-4">
                <div class="impression-img">{{ Html::image("patient/images/impression-lower.png","alt")}}
                 <p>2* Lower Impression</p>
                </div>
                <div class="impression-select"><input type="checkbox" name="impressionshipped[]" id="lower" value="2* Lower Impression" required="" /></div>
            </div>
            <div class="col-md-4">
                <div class="impression-img">{{ Html::image("patient/images/impression-shipped.png", "alt")}}
               <p>Impression shipped</p>
                </div>
               
                <div class="impression-select"><input type="checkbox" name="impressionshipped[]" value="Impression shipped" id="shipped" @if(in_array('Impression shipped',$proddata)) {{'checked="checked"'}} @endif required=""  /></div>
            </div>
            </div>
            <div class="col-md-12"><br /><br /><br /><br /><a href="#" class="submit-btn bottom-submit">SUBMIT ALL</a>
            <input type="submit" name="submit1" value="SUBMIT ALL" class="submit-btn bottom-submit">
             </form>

            <br /><br /><br />
                <p>When we recieve them we’ll let you know right away.</p>
            </div>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span>STEP 4</span> Check Treatment Plan</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">
              <div class="product-slider">
  <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class=" col-md-12 text-center">
          <p><span style="color:#0bc7f4;">Barry White</span>, meet your new smile!<br />All you have to do now is confirm you're ready to begin, then, get excited!</p>
      <br />
      </div>
      
    <div class="carousel-inner">
      <div class="item active"> <img src="http://placehold.it/1600x700?text=Product+01"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+02"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+03"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+04"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+05"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+06"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+07"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+08"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+09"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+10"> </div>
    </div>
  </div>
  <div class="clearfix">
    <div id="thumbcarousel" class="carousel slide" data-interval="false">
      <!-- /carousel-inner --> 
      <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a>
      <div class="carousel-inner">
        <div class="item active">
          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+01"></div>
          <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+02"></div>
          <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+03"></div>
          <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+04"></div>
          <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+05"></div>
        </div>
        <div class="item">
          <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+06"></div>
          <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+07"></div>
          <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+08"></div>
          <div data-target="#carousel" data-slide-to="8" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+08"></div>
          <div data-target="#carousel" data-slide-to="9" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+10"></div>
        </div>
      </div>
    </div>
    <!-- /thumbcarousel --> 
    
  </div>
</div>

          </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span>STEP 5</span> Get Your Aligners</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body text-center">
              <p>That's it! You've done the hard work.<br />Now you're ready for your new smile!</p>
              <br />
            <div class="col-md-6 text-center">{{ Html::image("patient/images/get-kit-img.png", "alt" ) }}</div>
            <div class="col-md-6 text-center"><a href="#" class="submit-btn">Get Impression Kit</a></div>
          </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><span>STEP 6</span> Start Wearing Your Aligners</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body text-center">
              <p>Now your aligners are on the way, here’s what you can expect.</p>
              {{ Html::image("patient/images/wearing-video.png") }}
          </div>
      </div>
    </div>
  </div> 
              
              </div>
          
      </div>
 <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#formimage" ).validate({
  rules: {
    image1: {
      required: true,
      accept: "jpg/*"
    }
  }
});
</script>
     

@endsection
<script type="text/javascript">
function HandleBrowseClick(input_image)
    
{     
    var fileinput = document.getElementById(input_image);
    fileinput.click();
}
function HandleBrowseClick1(input_image1)
{
    var fileinput = document.getElementById(input_image1);
    fileinput.click();
} 
function HandleBrowseClick2(input_image2)
{
    var fileinput = document.getElementById(input_image2);
    fileinput.click();
} 
function HandleBrowseClick3(input_image3)
{
    var fileinput = document.getElementById(input_image3);
    fileinput.click();
}  
function HandleBrowseClick4(input_image4)
{
    var fileinput = document.getElementById(input_image4);
    fileinput.click();
}

function HandleBrowseClick5(input_image5)
{
    var fileinput = document.getElementById(input_image5);
    fileinput.click();
}
function HandleBrowseClick6(input_image6)
{
    var fileinput = document.getElementById(input_image6);
    fileinput.click();
}
function HandleBrowseClick7(input_image7)
{
    var fileinput = document.getElementById(input_image7);
    fileinput.click();
} 

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $(function(){
    var requiredCheckboxes = $('.options :checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
  });
  })
</script>
