@extends('head')

@section('content')

<div class="container">
  <div class="col-md-4 col-md-offset-4">
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-barcode"></i>&nbsp登录
      </div>
      <div class="panel-body">
        <form name="" action="/login" method="post">{{ csrf_field() }}
          <input type="text" name="workid" placeholder="编号" class="form-control">
          <p></p>
          <input type="password" name="password" placeholder="密码" class="form-control">
          <p></p>
      		@if (isset($redirect_path))
      	  <input type="hidden" name="redirect_path" value="{{ $redirect_path }}" >
          @endif
          <input type="submit" value="确定" class="btn btn-default btn-block">
        </form>
      </div>
    </div>
      
  </div>
</div>

@endsection