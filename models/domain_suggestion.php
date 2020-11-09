<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();



if ($_POST['domain'] == '') {
    echo "<strong class='text-warning'>Please Enter A Domain Name To Proceed!";
}

if (isset($_POST['domain'])) {
    $domain = $_POST['domain'];
    $name = $_POST['name'];


    $names = $db_handle->runQuery("SELECT * FROM `domain_names` ORDER BY code ASC");



    foreach ($names as $key => $value) {
        if ($names[$key]['dot_name'] != $name) {
            
          $suggested_domain = $domain . $names[$key]['dot_name'];
          

            if (gethostbyname($suggested_domain) == $suggested_domain) {

                $price = $names[$key]['price'];
                $billing_cycle = "Annually";
                if (gethostbyname($domain) == $domain) {
                    ?>

                    <form id='add_domain_cart_form' name='add_domain_cart_form' >
                            
                    <tr>
                <td><strong><p class='text-white'> <?php echo $suggested_domain;  ?></p></strong></td>
                <td><strong><p class='text text-white'>R<?php echo $price;  ?></p></strong></td>
                <td><strong ><p class='text-white'><?php echo $billing_cycle; ?></p></strong></td>
                
            <input type='hidden' name='quantity' value='1' />
            <input type='hidden' name='action' value='add_domain'  />
            <input type='hidden' name='code' value=<?php echo $names[$key]['code']; ?> size='2' />
            
            <td><button class='flex-c-m size4 bg-info bo-rad-23 hov1 s-text1 trans-0-4'>
            Add To Cart
        </button></td>
        </form>
        <tr>
        
        <?php
                }
            }
        }
    }
}
