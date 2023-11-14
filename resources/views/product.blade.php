@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">Manage Products</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>ProductId</th>
        <th>ProductName</th>
        <th>Description</th>
        <th>Price</th>
        <th>QuantityInStock</th>
        <th>Action</th>

    </tr>   
</thead>
<tbody>
    @foreach ($products as $product)
 <tr>
    <td>{{ $product->id; }}</td>
    <td>{{ $product->product_name; }}</td>
    <td>{{ $product->description; }}</td>
    <td>{{ $product->price; }}</td>
    <td>{{ $product->quantityinstock; }}</td>
    <td><a href="{{route('updateProducts', $product->id)}}"><button type="button" class="btn btn-warning">update</button></a></td>
    <td> <a href="{{route('removeProducts', $product->id)}}"><button type="button" class="btn btn-danger">delete</button></a></td>

</tr> 
    @endforeach
</tbody>

</div>

    <div class="row">
        <form action="{{ route('saveProducts') }}" method="POST">
            @csrf
            
            <label class="col"><h6>Product Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here.." name="product_name">
            
            
            <label class="col"><h6>Description</h6></label>
            <input class="inputs" type="text" placeholder="Input here.." name="description">
            
            
            <label class="col"><h6>Price</h6></label>
            <input class="inputs" type="number" placeholder="Input here.." name="price">
            
            <label class="col"><h6>QuantityInStock</h6></label>
            <input class="inputs" type="number" placeholder="Input here.." name="quantityinstock">
           
            <div class="col" >
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
        <br>
</div>  
@endsection

@section('title')
    Products
@endsection