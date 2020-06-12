<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Covid19</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="timeline.php">Timeline</a></li>
      <li class="active"><a href="location.php">Location</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container" >
  <h2>Insert Location</h2>
   </div>
   <div class="col-md-9" >
            <form action="add_loc.php" method="post" enctype="multipart/form-data">
       <div class="form-group">
           <label for="exampleFormControlInput1">สถานที่</label>
           <input type="text" class="form-control" name="location" placeholder="สถานที่">
       </div>
       <div class="form-group">
           <label for="exampleInputEmail1">ที่อยู่</label>
           <input type="text" class="form-control" name="address"  placeholder="ที่อยู่">
       </div>
       <button type="submit" name="push" class="btn btn-primary">Submit</button>
   </form>
   </div>
</body>
</html>