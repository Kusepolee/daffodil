<?php 
    $w = new RestRose\Wechat\Enterprise\Api;
    $http_head = Config::get('daffodil')['service_ssl'] ? 'https' : 'http';
    $url = $http_head."://res.wx.qq.com/open/js/jweixin-1.1.0.js";

?>
@extends('head')
@section('content')

<div class="container">
    <div class="col-md-6 col-md-push-3">
    <div class="panel panel-success">
    <div class="panel-heading">
        <h4 class="panel-title">进货</h4>
    </div>
        <div class="panel-body">
            @if (isset($old))
            <form class="form-horizontal login" action="/product/update/{{ $old->id }}" method="post">
            @else								
            <form class="form-horizontal login" action="/product/store" method="post">
            @endif
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" 
                                       placeholder="产品名称" value="{{ isset($old) ? $old->name : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">英文</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_en" name="name_en" 
                                       placeholder="English Name" value="{{ isset($old) ? $old->name_en : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">价格</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="price" name="price" 
                                       placeholder="￥统一零售价" value="{{ isset($old) ? $old->price : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">数量</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="lastname" name="amount" 
                                       placeholder="数量" value="{{ isset($old) ? $old->amount : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">类别</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" name="type" 
                                       placeholder="产品种类,如:吊坠" value="{{ isset($old) ? $old->type : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">店面</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" name="shop" 
                                       placeholder="产品所属店面" value="{{ isset($old) ? $old->shop : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">证书<a href="javascript:wx.scanQRCode();" class="btn btn-success">扫描</a></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ca" name="ca" 
                                       placeholder="鉴定证书" value="{{ isset($old) ? $old->ca : null }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">说明</label>
                            <div class="col-sm-10">
                                 <textarea class="form-control" rows="5" name="content" >{{ isset($old) ? $old->content : null }}</textarea>
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
            @if($errors->any())  
            <div class="panel-body">
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>错误: {{ $error }}</p>
            @endforeach
            </div>
            </div>
                      
        @endif
<script src={{ $url }} type="text/javascript" ></script>
<script type="text/javascript" >
    wx.config(<?php echo $w->getSignature(false,['scanQRCode']); ?>);

    wx.scanQRCode({
        needResult: 1, // 默认为0，扫描结果由微信处理，1则直接返回扫描结果，
        scanType: ["qrCode","barCode"], // 可以指定扫二维码还是一维码，默认二者都有
        success: function (res) {
            var result = res.resultStr; // 当needResult 为 1 时，扫码返回的结果
            $("#ca").val(result);
        }
    });


    function close()
    {
      wx.closeWindow();
    }

</script>
@endsection
















