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
    </tr>   
</thead>
<tbody>
    @foreach ($products as $product)
 <tr>
    <td>{{ $products->ProductID; }}</td>
    <td>{{ $products->ProductName; }}</td>
    <td>{{ $products->Description; }}</td>
    <td>{{ $products->Price; }}</td>
    <td>{{ $products->QuantityInStock; }}</td>
</tr> 
    @endforeach
</tbody>

</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Product Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Description</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Price</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
            
            <label class="col"><h6>QuantityInStock</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
           
            <div class="col">
                <select name="type" id="type">
                    <option value="Add" pattern="ADD" >ADD</option>
                    <option value="Remove" pattern="Remove" >REMOVE</option>
                </select>
            </div>
            <div class="col" >
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        <br>
</div>  
@endsection

@section('title')
    Products
@endsection