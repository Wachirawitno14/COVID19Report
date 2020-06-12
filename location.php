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
      <li class="active"><a href="insert_loc.php">Add Location</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>Location</h2>
    <table class="table">
    <thead>
      <tr>
        <th>สถานที่</th>
        <th>ที่อยู่</th>
        <th>QRCode</th>
      </tr>
    </thead>
<tbody>
    <?php
           include("includes/db.php");
           $ref = "Place";
           $data = $database->getReference($ref)->getValue();
           $i = 0;
           foreach($data as $key => $data1){
               $i++;
           ?>
           <tr>
               <td><?php echo $data1['location']; ?></td>
               <td><?php echo $data1['address']; ?></td>
               <td><?php  echo '<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl='.$data1['location'].'&choe=UTF-8"/>'; ?></td>
           </tr>
           <?php 
           }
           ?>
       </tbody>
   </table>
   </div>
   </div>
</body>
</html>
