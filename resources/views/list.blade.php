@extends('head')
@section('content')

<div>
	<form class="navbar-form navbar-left" role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="货号/名称..">
		</div>
		<button type="submit" class="btn btn-default">搜索</button>
	</form>
</div>
<table class="table table-striped">
	<thead>
		<tr>
			<th>图片</th>
			<th>品名</th>
			<th>价格</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><img id="tu1" src="custom/default.png" alt=""></td>
			<td>Bangalore</td>
			<td>560001</td>
		</tr>
		<tr>
			<td><img id="tu1" src="custom/default.png" alt=""></td>
			<td>Mumbai</td>
			<td>400003</td>
		</tr>
		<tr>
			<td><img id="tu1" src="custom/default.png" alt=""></td>
			<td>Pune</td>
			<td>411027</td>
		</tr>
	</tbody>
</table>

@endsection