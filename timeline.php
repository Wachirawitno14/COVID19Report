<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/sorttable.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Covid19</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="timeline.php">Timeline</a></li>
      <li><a href="location.php">Location</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container" >
  <h2>Timeline</h2>
    <table class="table sortable">
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>ชื่อ - นามสกุล</th>
        <th>สถานที่</th>
        <th>สถานะ</th>
        <th>วันที่-เวลา</th>
      </tr>
    </thead>
<tbody>
    <?php
           include("includes/db.php");
           $ref = "timestamp";
           $data = $database->getReference($ref)->getValue();
           $i = 0;
           foreach($data as $key => $data1){
               $i++;
           ?>
           <tr>
               <th scope="row"><?php echo $i; ?></th>
               <td><?php echo $data1['name']; ?></td>
               <td><?php echo $data1['Place']; ?></td>
               <td><?php echo $data1['Check']; ?></td>
               <td><?php echo $data1['date']; ?> &nbsp; <?php echo $data1['time']; ?></td>
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