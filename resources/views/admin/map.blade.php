@extends('layouts.system')
@section('content')
<style>
  #map {
    background-color: skyblue;
    font-weight: bold;
  }
</style>
<div class="container my-5">
<div class="text-center">
  <h3>Navigation</h3>
</div>
    <!-- Section: Block Content -->
    <section class="mb-4">
  
      <style>
        .map-container {
          overflow: hidden;
          position: relative;
          height: 0;
        }
  
        .map-container iframe {
          left: 0;
          top: 0;
          height: 100%;
          width: 100%;
          position: absolute;
        }
      </style>
  
      <div class="card">
  
        <div class="row my-md-1 py-md-4 ">
          <div class="col-md-10 mx-auto">
  
            <!-- Google Maps -->
            <div id="map-within-card" class="map-container" style="height: 400px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1613.164456516079!2d72.88982784492845!3d19.045419239477884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf84f9a1d240e5de6!2sVivekanand%20Education%20Society&#39;s%20Institute%20of%20Management%20Studies%20and%20Research!5e1!3m2!1sen!2sin!4v1580464902435!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <!-- Google Maps -->
  
          </div>
        </div>
  
      </div>
  
    </section>
    <!-- Section: Block Content -->
  
    <div class="container">
        <div class="alert alert-info">
            <ul>
                <li>Immediately pull the nearest fire alarm pull station as you exit the building.</li>
                <li>When evacuating the building, be sure to feel doors for heat before opening them to be sure there is no fire danger on the other side.</li>
                <li>If there is smoke in the air, stay low to the ground, especially your head, to reduce inhalation exposure. Keep on hand on the wall to prevent disorientation and crawl to the nearest exit.</li>
                <li>Once away and clear from danger, call your report contact and inform them of the fire.</li>
                <li>Go to your refuge area and await further instructions from emergency personnel.</li>
            </ul>
        </div>
    </div>
  </div>
@endsection