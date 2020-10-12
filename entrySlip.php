<?php
    session_start();
    require "pdo.php";
    
    if ( isset($_POST['submit'] ) &&
        isset($_POST['name'] ) &&                 isset($_POST['entryTime'] ) &&           isset($_POST['exitTime'] ) &&
        isset($_POST['reason'] )) 
    {
        /*insert the record in the 'entryslip' database*/  
        try
        {
            $stmt = $pdo->prepare('INSERT INTO entryslip(name,reason,entryTime,exitTime) VALUES(:name, :reason, :entryTime, :exitTime)');
            
            $stmt->execute(array(
            ':name' => $_POST['name'],
            ':reason' => $_POST['reason'],
            ':entryTime' => $_POST['entryTime'],
            ':exitTime' => $_POST['exitTime'])
            );
                   
            $_SESSION['entryslip_success_msg']="Sucessfully Submited Entry Slip Form!";

            header("Location: index.php");
            return;
        }
        catch(Exception $e)
        {
        $_SESSION['entryslip_error_msg']="Something Went Wrong in Entry Slip form, Try Refreshing :( )";       
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
        
        <title>Entry Slip | General Form</title>

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
                 
                <div class="child col-xs-10 col-sm-7 col-md-5 col-lg-4 ">
                  <h3 class="text-center">Entry Slip</h3>
                  <hr>
              
                <!--Form creation --> 
                <form method="post">      
                    <!--Name-->
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" required>
                        </div>

                    <!--Entry Time-->
                    <div class="form-group">
                        <label for="entryTime">Entry Time:</label>
                        <input type="time" id="entryTime" name="entryTime" required>
                        
                        <!--Exit Time-->
                        
                        <label for="exitTime">Exit Time:</label>
                        <input type="time" id="exitTime" name="exitTime" required>
                    </div>
                
                    <br>
                    <!-- Choose Reasons-->
                    <h4>Reason for not punching card:-
                    </h4>
                    <div class="form-group">
                        
                        <input type="radio" id="cardLost" name="reason" value="Cart Lost">
                        <label for="cardLost">Cart Lost</label><br>
                    
                        <input type="radio" id="forgetSwipe" name="reason" value="Forget to Swipe">
                        <label for="forgetSwipe">Forget to Swipe</label><br>
                        
                        <input type="radio" id="forgetHome" name="reason" value="Card Lost at Home">
                        <label for="forgetHome">Card Lost at Home</label><br>
                        
                        <input type="radio" id="notIssue" name="reason" value="Card hasn't been issued">
                        <label for="notIssue">Card hasn't been issued</label><br>    
                    
                    </div>
                    <!--Submit button-->
                        <button type="submit" class="btn btn-default downlaod" name="submit">Sumbit</button>             
                </form>
                  <hr>
                  <p> 
                    <a class="bottom-links" href="outdoorDuty.php">Outdoor Duty</a> |  
                    <a class="bottom-links" href="index.php">General Form</a>
                           
                 </p>
             </div>
             
         </div><!-- End of row content-->
        </div><!-- End of container-fluid-->


        
        
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

    </body>
</html>
