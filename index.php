

<!DOCTYPE html>
<html>
<head>
   <title>Page Title</title>
</head>
<body>



   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   <!-- Include the above in your HEAD tag -->



   <div class="container">

       <div class="row">

           <div class="col-md-6 col-md-offset-3">

               <div class="well well-sm">

                   <form class="form-horizontal" action="login.php" method="post">

                       <fieldset>

                           <legend class="text-center">Login</legend>



                           <!-- Username input-->

                           <div class="form-group">

                               <label class="col-md-3 control-label" for="name">Username</label>

                               <div class="col-md-9">

                                   <input id="Username" name="Username" type="text" placeholder="Username" class="form-control">

                               </div>

                           </div>



                           <!-- Password input-->

                           <div class="form-group">

                               <label class="col-md-3 control-label" for="email">Password</label>

                               <div class="col-md-9">

                                   <input id="Password" name="Password" type="password" placeholder="Password" class="form-control">

                               </div>

                           </div>
                 

                           <!-- Form actions -->

                           <div class="form-group">

                               <div class="col-md-12 text-right">

                                   <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>

                               </div>

                           </div>

                       </fieldset>

                   </form>

               </div>

           </div>

       </div>

   </div>

</body>
</html>