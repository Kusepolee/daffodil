@extends('head')
@section('content')

<div class="container">
    <div class="col-md-6 col-md-push-3">
    <div class="panel panel-success">
    <div class="panel-heading">
        <h4 class="panel-title">进货</h4>
    </div>
        <div class="panel-body">								
            <form class="form-horizontal login" action="product/add" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" 
                                       placeholder="产品名称">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">英文</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" 
                                       placeholder="English Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">价格</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" 
                                       placeholder="￥统一零售价">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">数量</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" 
                                       placeholder="数量">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">类别</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" 
                                       placeholder="产品种类,如:吊坠">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">证书</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" 
                                       placeholder="鉴定证书">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">说明</label>
                            <div class="col-sm-10">
                                 <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-success btn-block  bk-margin-top-20">确定</button>
                        </div>									
                </div>
            </form>
        </div>
    </div>
	</div>
@endsection