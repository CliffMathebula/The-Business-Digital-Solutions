
<?php
error_reporting(0);
if($_POST['domain'] == ''){
    echo "<strong class='text-warning'>Please Enter A Domain Name To Proceed!";
}
if(isset($_POST['domain'])){
    $domain = $_POST['domain'];
    $name = $_POST['name'];


    $names = array('90.00'=>'.co.za','230.00'=>'.com','290.00'=>'.org','350.00'=>'.info','440.00'=>'.mobi', '286.00'=>'.net', '360.00'=>'.biz', '180.00'=>'.de', '160.00'=>'.icu', '600.00'=>'.me', '210.00'=>'.top',
'385.00'=>'.club', '200.00'=>'.cn', '195.00'=>'.uk', '605.00'=>'.site', '585.00'=>'.blog', '305.00'=>'.vip',
'210.00'=>'.nl', '260.00'=>'.xyz', '190.00'=>'.co.uk', '235.00'=>'.online');

    foreach($names as $key => $value){
        if($value != $name){
            $choosen_domain = $domain.$value;
            $price = $key;
            $billing_cycle ="Annually";
            if ( gethostbyname($domain) == $domain ) {
                echo "
                <tr>
                <td><strong><p class='text-success'>".$choosen_domain."</p></strong></td> <td><strong><p>R".$price."</p></strong></td>
                <td><strong><p>".$billing_cycle."</p></strong></td>
                <tr>";
            }
        }
    }
}
?>


