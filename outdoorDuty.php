<?php
    session_start();
    require "pdo.php";
    
    if ( isset($_POST['submit'] ) &&
        isset($_POST['name'] ) &&                 isset($_POST['date'] ) &&                 isset($_POST['entryTime'] ) &&
        isset($_POST['exitTime'] ) &&
        isset($_POST['reason'] )) 
    {
        /*insert the record in the 'outdoorduty' database*/  
        try
        {
            $stmt = $pdo->prepare('INSERT INTO outdoorduty(name,reason,date,entryTime,exitTime) VALUES(:name, :reason, :date, :entryTime, :exitTime)');
            
            $stmt->execute(array(
            ':name' => $_POST['name'],
            ':reason' => $_POST['reason'],
            ':date' => $_POST['date'],
            ':entryTime' => $_POST['entryTime'],
            ':exitTime' => $_POST['exitTime'])
            );
                   
            $_SESSION['outdoorduty_success_msg']="Sucessfully Submited Outdoor Duty Form!";

            header("Location: index.php");
            return;
        }
        catch(Exception $e)
        {
        $_SESSION['outdoorduty_error_msg']="Something Went Wrong in Outdoor Duty Form, Try Refreshing :(";       
            header("Location: index.php");
            return;
        }
                
            
    }    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--Your css file-->
        <link rel="stylesheet" href="css/styles.css">
        
        <title>Outdoor Duty | General Form</title>

    </head>
    <body>
        <!-- Start of Header-->
        <header>
            <nav id="header-nav" class="navbar navbar-default" >
                <div class="container-fluid">
                    
                    <div class="navbar-header">
                        <!--brand name-->
                      <a href="index.php" class="navbar-brand"> 
                        <h1>General <span>Form</span></h1>
                      </a>
  
                    </div>           
                
                </div>
            </nav>
        </header>  
        <!-- End of Header-->
        
        <div class="container-fluid">
            <div class="row content">

             <div class="parent col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 
                <div class="child col-xs-11 col-sm-7 col-md-6 col-lg-5 ">
                  <h3 class="text-center">Outdoor Duty</h3>
                  <hr>
                  <p>
                    You had to come to office and go out of office work somewhere else.
                  </p>
                  
                    <!--Form creation --> 
                    <form method="post" >      
                    <!--Name-->
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                        </div>
                        
                    <!--Date-->
                    <div class="form-group form-inline">
                        <label class="control-label" for="date">Date:</label>
                        <input type="date" class="form-control form-inline" id="date" name="date" required>
                    </div>
                    
                    <!--Entry Time-->
                    <div class="form-group">
                        <label for="entryTime">Entry Time:</label>
                        <input type="time" id="entryTime" name="entryTime" required>
                        
                        <!--Exit Time-->
                        
                        <label for="exitTime">Exit Time:</label>
                        <input type="time" id="exitTime" name="exitTime" required>
                    </div>
                        
                    
                    <!--Date & Time-->
                   <!-- <div class="form-group">
                        <label for="dateTime">Date and Time:</label>
                        <input type="datetime-local" id="dateTime" name="dateTime">
                    </div>-->
                 
                    <!--Reasons -->
                    <div class="form-group">
                      <label for="reason">Reason:</label>
                      <textarea class="form-control" rows="5" id="reason" name="reason" required></textarea>
                    </div>
                   
                    <!--Submit button-->
                        <button type="submit" class="btn btn-default downlaod" name="submit">Sumbit</button>             
                </form>
                  
                  <hr>
                  <p> 
                    <a class="bottom-links" href="entrySlip.php">Entry Slip</a> |  
                    <a class="bottom-links" href="index.php">General Form</a>
                           
                 </p>
                </div>

             </div>

            </div><!--End ROW content-->
        </div><!--End Container-fluid-->
        
        
        
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>

</html>