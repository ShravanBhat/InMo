@extends('layouts.system')
@section('content')
<!-- Default checked -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="container my-5">
  <table class="table table-striped table-bordered border-1">
    <thead>
      <tr>
        <th scope="col">Sr. No.</th>
        <th scope="col">Fire</th>
        <th scope="col">Temperature</th>
        <th scope="col">Humidity</th>
        <th scope="col">MQ2</th>
        <th scope="col">Sound</th>
        <th scope="col">Location</th>
        <th scope="col">Time</th>

      </tr>
    </thead>
    <tbody>
      @foreach($sensorvalues as $sensorvalue)
      <tr>
        <td class="col">{{$sensorvalue->id}}</td>
        <td class="col">{{$sensorvalue->fire}}</td>
        <td class="col">{{$sensorvalue->temperature}}</td>
        <td class="col">{{$sensorvalue->humidity}}</td>
        <td class="col">{{$sensorvalue->sound}}</td>
        <td class="col">{{$sensorvalue->location}}</td>
        <td class="col">{{$sensorvalue->created_at}}</td>

        
        <td>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection