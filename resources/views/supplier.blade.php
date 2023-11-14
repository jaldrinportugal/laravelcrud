@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">Manage Supplier</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thead>
    <tr>
        <th>SupplierId</th>
        <th>SupplierName</th>
        <th>ContactInfo</th>
        <th>Address</th>
    </tr>   
</thead>

 @foreach ($suppliers as $supplier )
 <tr>
    <td>{{ $suppliers->SupplierID; }}</td>
    <td>{{ $suppliers->SupplierName; }}</td>
    <td>{{ $suppliers->ContactNo; }}</td>
    <td>{{ $suppliers->Address; }}</td>
</tr> 
    @endforeach

</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Supllier Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Contact Info</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col" ><h6>Address</h6></label>
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
    Supplier
@endsection