


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
<h1>USER REGISTRATION DETAILS</h1>
<form action="">
<div class="col-md-6">
  <div class="form-group" class="col-md-6">
    <input type="text" name="search" placeholder="Search Here by name....." class="form-control" value={{$search}}>
  
    <button   class=" btn btn-primary " style="margin-top:10px;">search</button>

  </div> </div>
</form>
<a href="{{ url('form') }}"><button class=" btn btn-outline-primary float-right" style="margin-right:5em">Add User</button></a>

<table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">gender</th>
      <th scope="col">language</th>
      <th scope="col">country</th>
      <th scope="col">state</th>
      <th scope="col">city</th>
      <th scope="col">file</th>

      <th scope="col">description</th>
      
      <th  colspan="3" scope="colgroup" style="text-align:center">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($members as $member)
        <tr>
          
            <td>{{$member['name']}}</td>
            
            <td>{{$member['email']}}</td>
            
            <td>{{$member['phone']}}</td>
            
            <td>{{$member['gender']}}</td>
            
            <td>{{$member['language']}}</td>
            
            <td>{{$member['country']}}</td>
            
            <td>{{$member['state']}}</td>

            
            <td>{{$member['city']}}</td>
            <td>{{$member['file']}}</td>
            
            <td>{{$member['description']}}</td>
<td><a href={{"edit/".$member['id']}} class="btn btn-default">edit</a></td>

<td><a href={{"delete/".$member['id']}} class="btn btn-default">delete</a></td>
        </tr>
        
        @endforeach
      
  </tbody>
</table>
<span>
</span>
    
{{$members->links('pagination::bootstrap-4') }}
</body>
</html>