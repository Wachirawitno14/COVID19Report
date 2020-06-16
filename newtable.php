<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css"/>
    
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>

   
</head>
<body  onload="selectFunction()">



<div class="container" >
  <h2>Timeline</h2>
  <label for="shootdate">Date:</label>

  <input type="date" id="shootdate" name="shootdate">
  

  location
      <select name="location" id="location" size="">
        <option value="all">all</option>
      </select>

      
<!-- <button type="button" onclick="searchFunction()">search</button> -->
</br></br>



<div class="display" style="width:80%">

<script>
function selectFunction() {
  var x = document.getElementById("location");
 
  


  <?php
           include("includes/db.php");
           $ref = "timestamp";
           $data = $database->getReference($ref)->getValue();
           $i = 0;
           foreach($data as $key => $data1){
               

              $array[$i] = $data1['Place'];
              //  echo $data1['Place'];
               $i++;
           }
           $arrayuni= array_unique($array);

          $z = 0;
          foreach($arrayuni as $key => $data2){
            $z++;
          // echo  $data2."\n";

         echo "var option".$z." = document.createElement('option');";
         echo " option".$z.".text = '".$data2."';\n";
         echo "x.add(option".$z.");\n";

           }
           ?>
}
</script>
<table id="example" class="display" style="width:100%">
<thead>
      <tr>
      
        <th>ชื่อ - นามสกุล</th>
        <th>สถานที่</th>
        <th>เช็คเข้า</th>
        <th>เช็คออก</th>
        
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

            $CheckIn = $data1['CheckIn'];  
            $Checkout = $data1['Checkout']; 
            $newCheckIn = date("yy-m-d", strtotime($CheckIn));  
            $newCheckout = date("yy-m-d", strtotime($Checkout));  

            // $newCheckIn = date("d F Y / H:i:s", strtotime($CheckIn));  
            // $newCheckout = date("d F Y / H:i:s", strtotime($Checkout));  

           ?>
        
           <tr>
               
               <td><?php echo $data1['name']; ?></td>
               <td><?php echo $data1['Place']; ?></td>
               <td><?php echo $newCheckIn; ?></td>
               <td><?php echo $newCheckout; ?></td>
              
           </tr>
           <?php 
           }
           ?>
       </tbody>
</table>
</div>
<script>
	  		$( function() {
	   			$( "#shootdate" ).datepicker({
	   				maxDate: 0
	   			});
                   $('#example').DataTable();
                    dataTable.draw();
                });
	</script>
<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    // $('#example thead tr').clone(true).appendTo( '#example thead' );

    // $('#example thead tr:eq(1) th').each( function (i) {
    //     var title = $(this).text();
    //     $(this).html( '<input type="date" id ="datepicer" placeholder="Search '+title+'" />' );
 
    //     $( 'input', this ).on( 'keyup change', function () {

    //         if ( table.column(i).search() !== this.value ) {
    //             table
    //                 .column(i)
    //                 .search( this.value )
    //                 .draw();
    //         }
    //     } );
    // } );

    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );  

    $('#shootdate').on( 'change', function () {
        // alert(this.value);
            table.search( this.value ).draw();
            } );
} );

</script>  

<script>

$(document).ready(function() {
    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: true
    } );  

    $('#location').on( 'change', function () {
        // alert(this.value);
            table.search( this.value ).draw();
            } );
    } );

</script>
</body>
</html>