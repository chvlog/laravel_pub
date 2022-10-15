
 <!doctype html>
<html lang="en">
 @include('layouts.app');
  <body>

<div class="container">
<div class="row">
<div class="col-md-12">
<form action="addtask" method="POST"  enctype="multipart/form-data"  class="card-body" tabindex="500">
									@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Task</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter Task">
  </div>
 
  <button type="submit" class="btn btn-primary">Add Task</button>
</form>

</div>
</div>
</div>
  
 <div class="container">
<div class="row">
<div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task Name</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($tasks as $item)
    <tr>
      <th scope="row">{{ $item['id'] }}</th>
      <td>{{ $item['name'] }}</td>
      <td> <a href="delete/{{$item->id}}"  class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i>Delete</a>

</td>
    
    </tr>
       @endforeach
  </tbody>
</table>

</div>
</div>
</div>

  </Body>
</html>

