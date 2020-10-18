<?php
                error_reporting(0);
                if($_POST['domain'] == ''){
                    echo "<strong class='text-warning'>Please Enter A Domain Name To Proceed!";
                }
                if(isset($_POST['domain'])){
                    $domain = $_POST['domain'].$_POST['name'];
 
                    if ( gethostbyname($domain) != $domain ) {
                        echo "<strong class='text-warning'>Domain Already Registered!</strong>";
                    }
                    else {
                        echo '<strong>Hurry, your domain is available!, you can register it.
                       </strong>';
                    }
                }

?>
