
<?php

if ($_POST['domain'] == '') {
    echo "<strong class='text-warning'>Please Enter A Domain Name To Proceed!";
}

if (isset($_POST['domain'])) {
    $domain = $_POST['domain'];
    $name = $_POST['name'];


    $names = array(
        '90.00' => '.co.za', '230.00' => '.com', '290.00' => '.org', '350.00' => '.info', '440.00' => '.mobi', '286.00' => '.net', '360.00' => '.biz', '180.00' => '.de', '160.00' => '.icu', '600.00' => '.me', '210.00' => '.top',
        '385.00' => '.club', '200.00' => '.cn', '195.00' => '.uk', '605.00' => '.site', '585.00' => '.blog', '305.00' => '.vip',
        '210.00' => '.nl', '260.00' => '.xyz', '190.00' => '.co.uk', '235.00' => '.online'
    );

    foreach ($names as $key => $value) {
        if ($value != $name) {
            $choosen_domain = $domain . $value;


            if (gethostbyname($choosen_domain) == $choosen_domain) {

                $price = $key;
                $billing_cycle = "Annually";
                if (gethostbyname($domain) == $domain) {
                    echo "
                <tr>
                <td><strong><p class='text-white'>" . $choosen_domain . "</p></strong></td> <td><strong><p class='text text-white'>R" . $price . "</p></strong></td>
                <td><strong ><p class='text-white'>" . $billing_cycle . "</p></strong></td>
                <td><button  class='flex-c-m size4 bg-info bo-rad-23 hov1 s-text1 trans-0-4'>
                Add To Cart
            </button></td>
                <tr>";
                }
            }
        }
    }
}
?>


