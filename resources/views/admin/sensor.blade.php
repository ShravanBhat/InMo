@extends('layouts.system')
@section('content')
<style>
  #sen {
    background-color: skyblue;
    font-weight: bold;
  }
</style>
<!-- Default checked -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="container">
  <table class="table table-striped table-bordered border-1 my-5">
    <thead>
      <tr>
        <th scope="col">Sensor</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($sensors as $sensor)
      <tr>
        <td class="col">{{$sensor->name}}</td>
        
        
        <td class="px-5">
          <input data-id="{{$sensor->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $sensor->status=="true" ? 'checked' : '' }}>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
  <script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? true : false; 
          var id = $(this).data('id'); 
           
          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'id': id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>
@endsection