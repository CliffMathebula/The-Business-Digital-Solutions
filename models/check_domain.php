<?php
                error_reporting(0);
                if($_POST['domain'] == ''){
                    echo "<strong class='text-danger'>Please Enter A Domain Name To Proceed!";
                }else{
                if(isset($_POST['domain'])){
                    $domain = $_POST['domain'].$_POST['name'];
 
                    if ( gethostbyname($domain) != $domain ) {
                        echo "<strong class='text-warning'>Domain Already Registered!</strong>";
                        
                    }
                    else {
                        echo '<strong class="text-warning">Hurry, your domain <strong>'.$domain.'</strong> is available!  you can register it.
                       </strong>';


                       
                    }
                }
            }

?>
