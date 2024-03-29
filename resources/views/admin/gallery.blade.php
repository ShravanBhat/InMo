@extends('layouts.system')
@section('content')
<style>
    #gall {
      background-color: skyblue;
      font-weight: bold;
    }
  </style>

<!-- Classic tabs -->
<div class="classic-tabs">

  <ul class="nav tabs-cyan" id="myClassicTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link  waves-light active show" id="profile-tab-classic" data-toggle="tab" href="#profile-classic"
        role="tab" aria-controls="profile-classic" aria-selected="true">Images</a>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-light" id="follow-tab-classic" data-toggle="tab" href="#follow-classic" role="tab"
        aria-controls="follow-classic" aria-selected="false">Video</a>
    </li>
  </ul>
  <div class="tab-content border-right border-bottom border-left rounded-bottom" id="myClassicTabContent">
    <div class="tab-pane fade active show" id="profile-classic" role="tabpanel" aria-labelledby="profile-tab-classic">
      <!-- Grid row -->
<div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
              <!--Linkedin-->
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
          data-toggle="modal" data-target="#modal1"></a>
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
              <!--Linkedin-->
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video"
          data-toggle="modal" data-target="#modal6"></a>
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
              <!--Linkedin-->
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
          data-toggle="modal" data-target="#modal4"></a>
  
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
  
  <!-- Grid row -->
  <div class="row">
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GUEZCxBcM78"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
              <!--Linkedin-->
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-4.jpg" alt="video"
          data-toggle="modal" data-target="#modal2"></a>
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PjGkVCAo8Fw"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
              <!--Linkedin-->
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-5.jpg" alt="video"
          data-toggle="modal" data-target="#modal5"></a>
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-4">
  
      <!--Modal: Name-->
      <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
  
          <!--Content-->
          <div class="modal-content">
  
            <!--Body-->
            <div class="modal-body mb-0 p-0">
  
              <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
                  allowfullscreen></iframe>
              </div>
  
            </div>
  
            <!--Footer-->
            <div class="modal-footer d-block d-md-flex justify-content-center">
              <span class="mr-4">Spread the word!</span>
              <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
              <!--Twitter-->
              <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
              <!--Google +-->
              <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
              <!--Linkedin-->
              <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
  
              <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
  
            </div>
  
          </div>
          <!--/.Content-->
  
        </div>
      </div>
      <!--Modal: Name-->
  
      <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-6.jpg" alt="video"
          data-toggle="modal" data-target="#modal3"></a>
  
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
    </div>
    <div class="tab-pane fade" id="follow-classic" role="tabpanel" aria-labelledby="follow-tab-classic">
      <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
        aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
        quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    </div>
  </div>

</div>
<!-- Classic tabs -->
@endsection