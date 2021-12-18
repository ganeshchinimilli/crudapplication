<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <h1>Update form</h1>
    <div class="container">
    <form method="POST" action="/edit">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Name</label>
          <input type="text" class="form-control"  value="{{$data['name']}}" name="name" id="first">
        </div>
      </div>
      <div class="col-md-6">
      

<div class="form-group">
  <label for="email">Email address</label>
  <input type="text" class="form-control" id="email" name="email"value="{{$data['email']}}" >

</div>
    </div>
    </div>


    <div class="row">
        <div class="col-md-6">

    <label for="gender">
        Gender
    </label>
    <div class="radio">
      <label>
        <input type="radio" name="gender" id="contact-preference" value="male" checked>male
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="gender" id="contact-preference" value="female" >
      </label>female
    </div>
</div>
    <div class="col-md-6">

<div class="form-group">
  <label for="phone">Phone Number</label>
  <input type="tel" class="form-control" id="phone" value="{{$data['phone']}}" name="phone">
</div>
</div>
</div>

 


    <div class="row">
  
      <div class="col-md-6">
      <div class="form-group">
     
    <label for="description">description</label>
    <textarea class="form-control" name="description" rows="3"> {{$data['description']}}</textarea>
  </div>
  </div>
<div class="col-md-6">
    <div class="form-group">     
    <label for="dropdown">select your language</label>

         <select class="form-control" name="language" value="{{$data['language']}}">
  <option>Java</option>
  <option>C++</option>
  <option>python</option>
</select>
</div>
</div>
    </div>

<div class="row">

<div class="col-md-4">
        <div class="form-group">     
    <label for="dropdown">country</label>

         <select class="form-control" name="country" value="{{$data['country']}}">
  <option>India</option>
  <option>America</option>
  <option>SouthAfrica</option>
  <option>Australia</option>
  <option>Newzealand</option>
  <option>WestIndies</option>
</select>
</div>
</div>
    <div class="col-md-4">
        
        <div class="form-group">     
    <label for="dropdown">state</label>

         <select class="form-control" name="state" value="{{$data['state']}}">
  <option>Ap</option>
  <option>Telangana</option>
  <option>Rajasthan</option>
  <option>Mumbai</option>
  <option>odisha</option>
  <option>chennai</option>
</select>

</div>
</div>
<div class="col-md-4">
        
        <div class="form-group">     
    <label for="dropdown">city</label>

         <select class="form-control" name="city" value="{{$data['city']}}">
  <option>Tadepalligudem</option>
  <option>Ganapavaram</option>
  <option>Bhimavaram</option>
  <option>Tanuku</option>
</select>
</div>

        

</div>
</div>
  <div class="form-group">
    <label for="file">upload file</label>
    <input type="file" class="form-control-file" name="file" value="{{$data['file']}}">
  </div>



    <button type="submit" class="btn btn-primary">update</button>
    </form>
</div><br>
    <br>
    <br>

</body>
</html>