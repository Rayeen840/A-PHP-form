<?php
    session_start();
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
        
        <title>General Form</title>

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
                 
                <div class="child col-xs-8 col-sm-7 col-md-5 col-lg-4 ">
                  <h3 class="text-center">General Form</h3>
                  <hr>    
                  <ul>
                    <li>
                        <a class="bottom-links"href="outdoorDuty.php">Outdoor Duty</a>
                    </li>
                    <li>
                        <a class="bottom-links"href="entrySlip.php">Entry Slip</a>
                    </li>
                </ul>
                    
                  <div class="text-center"> 
              <?php
                
                /*Outdoor Duty form*/
                if( isset ($_SESSION['outdoorduty_success_msg']) )
                {
                    echo('<p style="color: green;">'.$_SESSION['outdoorduty_success_msg']."</p>\n");
                    unset($_SESSION['outdoorduty_success_msg']);
                }
                else if( isset ($_SESSION['outdoorduty_error_msg']) )
                {
                    echo('<p style="color: red;">'.$_SESSION['outdoorduty_error_msg']."</p>\n");
                    unset($_SESSION['outdoorduty_error_msg']);
                }
                  
                /*Entry Slip form message*/
                 if( isset ($_SESSION['entryslip_success_msg']) )
                {
                    echo('<p style="color: green;">'.$_SESSION['entryslip_success_msg']."</p>\n");
                    unset($_SESSION['entryslip_success_msg']);
                }
                else if( isset ($_SESSION['entryslip_error_msg']) )
                {
                    echo('<p style="color: red;">'.$_SESSION['entryslip_error_msg']."</p>\n");
                    unset($_SESSION['entryslip_error_msg']);
                }
             ?>
                 </div>
               </div>
               
              
              </div>
         </div><!-- End of row content-->
        </div><!-- End of container-fluid-->

        
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

    </body>
</html>
