<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory system</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div>
  <table class="table table-dark table-striped">
<thread>
    <tr>
        <th>Id</th>
        <th>Item Name</th>
        <th>Item Type</th>
        <th>Product Id</th>
    </tr>   
</thread>

<tbody>
    <td >asdas</td>
    <td>asdasd</td>
    <td>asdasd</td>
    <td>asdasd </td>
</tbody>

<tbody>
    <td >asdas</td>
    <td>asdasd</td>
    <td>asdasd</td>
    <td>asdasd </td>
</tbody>
</div>

    <div class="row">
        <form>
            
            <label class="col" for="first_name"><h6>Item Name</h6></label>
            <input class="inputs" type="text" name="first_name" placeholder="Input here..">
            
            
            <label class="col" for="middle_name"><h6>Item Type </h6></label>
            <input class="inputs" type="text" name="middle_name" placeholder="Input here..">
            
            
            <label class="col"  for="lastname"><h6>Product Id</h6></label>
            <input class="inputs" type="text" name="last_name" placeholder="Input here..">
           
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
</body>
</html>