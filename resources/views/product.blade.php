@extends('head')
@section('content')

<div class="container">
	<div class="col-md-12">
		<ul id="myTab" class="nav nav-tabs">
			<li class="active"><a href="#products" data-toggle="tab">产品</a></li>
            <li><a href="#export" data-toggle="tab">导出</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade active in" id="products">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
                            <tr>
                                <th>#</th>
                                <th>名称</th>
                                <th>英文名</th>
                                <th>价格</th>
                                <th>类别</th>
                                <th>说明</th>                        
                                <th>店面</th>
                                <th>编号</th>
                                <th>证书</th>
                            </tr>
                        </thead>
                        <tbody>
	                        @foreach($recs as $rec)
	                            <tr>
	                                <td>{{ $rec->id }}</td>
	                                <td><a href="/product/edit/{{ $rec->id }}" class="btn btn-info ">{{ $rec->name }}</a></td>
	                                <td>{{ $rec->name_en }}</td>
	                                <td>{{ floatval($rec->price) }}</td>
	                                <td>{{ $rec->type }}</td>
	                                <td>{{ $rec->content }}</td>
	                                <td>{{ $rec->shop }}</td>
	                                <td>{{ $rec->sn }}</td>
	                                <td>{{ $rec->ca }}</td>
	                            </tr>
	                        @endforeach
	                    </tbody>
					</table>
					<div> 
                    {!! $recs->render() !!}
                    </div>
				</div>
			</div>
			<p></p>
            <div class="tab-pane fade" id="export">
                <div class="col-md-4 col-sm-4" id="excel_div">
                    <div class="panel panel-success">
	                    <div class="panel-heading">
	                        <i class="glyphicon glyphicon-th"></i>&nbsp&nbspExcel
	                    </div>
	                    <div class="panel-body">
	                        <span id="info_txt"></span>
		                        <blockquote>
		                        <small>将产品信息保存为Excel文件</small>
		                        </blockquote>
	                                <!-- form excel -->
	                                <form name="" id="excel_get" action="/product/excel" method="post">{{ csrf_field() }}
							        </form>
	                                <!-- end of form excel -->
	                    </div>
	                    <div class="panel-footer">
	                    	<a class="btn btn-sm btn-success btn-block" href="javascript:getExcel();">保存</a>
	                    </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<script>
    // excel
function getExcel(){
  $("#excel_get").submit();
}
</script>

@endsection