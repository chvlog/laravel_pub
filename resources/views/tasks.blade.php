
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
    <input type="text" class="form-control"  name="name" placeholder="Enter Task" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="DATE" class="form-control"  name="date" placeholder="Enter DATE" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Time</label>
    <input type="Time" class="form-control"  name="time" placeholder="Enter TIME" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date Picker</label>
    <select name="datepicker">
        <option>AM</option>
        <option>PM</option>

   </select>
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
       <th scope="col">Date</th>
      <th scope="col">Time</th>
     <th scope="col">Date Picker</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($tasks as $item)
    <tr>
      <th scope="row">{{ $item['id'] }}</th>
      <td>{{ $item['name'] }}</td>
      <td>{{ $item['date'] }}</td>
      <td>{{ $item['time'] }}</td>
      <td>{{ $item['datepicker'] }}</td>
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

