@extends('layouts.system')
@section('content')
<head>
  <meta charset="utf-8">
  ...
  {{-- ChartScript --}}
  @if($usersChart)
  {!! $usersChart->script() !!}
  @endif
</head>
<style>
  #dash {
    background-color: skyblue;
    font-weight: bold;
  }
</style>

    <div class="jumbotron m-5 p-0 shadow bg-white rounded"> 
    <div class="p-0">
    <div class="bg-warning m-0 p-3">
      <ul>
          <h3 style="color:white">System 1</h3>
          <h5 style="color:white">Shravan Bhat</h5>
      </ul>
    </div>
      <div class="bg-white text-center p-3"> 
        <form action="change.php" method="post">
          <button class="btn btn-success">Change Status</button>
        </form>
        <div class="d-flex justify-content-between px-5">
          <div class="border-right-2 text-center mx-auto">
            <div class="font-weight-bold">10</div>
            <div>Sensors</div>
          </div>
          <div class="border-right-2 secondary text-center mx-auto">
            <div class="font-weight-bold">0</div>
            <div>Flags</div>
          </div>
          <div class="border-right-2 secondary text-center mx-auto">
            <div class="font-weight-bold">25</div>
            <div>Safe Days</div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="card-header">Line chart</div>

    <!--Card content-->
    <div class="card-body">

     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRlvIxvAmAUoosJAF8tDTueViRIU_cBuA6iAzsa9W_7Th01gbpF" alt="">

    </div>
    {{-- <div style="width: 100%">
      {!! $usersChart->container() !!}
  </div> --}}
  </div>
@endsection
