@extends('layout')

@section('Content')
<h1>View page is here</h1>
@if(Session::get('status')) 
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{Session::get('status')}}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
	</div>
@endif	
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">productId</th>
      <th scope="col">productName</th>
      <th scope="col">productPrice</th>
      <th scope="col">productCode</th>
	  <th scope="col">productInstock</th>
	  <th scope="col">productDiscount</th>
	  <th scope="col">productSizes</th>
	  <th scope="col">productDetails</th>
	  <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
	@foreach($data as $item)
    <tr>
      <th scope="row">{{$item->productId}}</th>
      <td>{{$item->productName}}</td>
      <td>{{$item->productPrice}}</td>
      <td>{{$item->productCode}}</td>
	  <td>{{$item->productInstock}}</td>
	  <td>{{$item->productDiscount}}</td>
	  <td>{{$item->productSizes}}</td>
	  <td>{{$item->productDetails}}</td>
	  <td> 
	  <a href="/delete/{{$item->productId}}"><i class="fa fa-trash" style="font-size:25px;"></i>
	  <a href="/edit/{{$item->productId}}"><i class="fa fa-edit" style="font-size:25px;"></i>
	  </td>
    </tr>
	@endforeach
  </tbody>
</table>

@stop