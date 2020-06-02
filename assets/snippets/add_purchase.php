<?php
    require_once('db.php');
    $user_id = $_SESSION['user_id'];
    // GET total and tracking number from the form
    $amount = $_GET['amount'];
    $tracking = $_GET['tracking'];

    // Fetch User details from User table
    $sql_user = "SELECT * FROM user WHERE user_id=?";

    if($stmt_user = $connect->prepare($sql_user)){

        //execute the query and extract results
        $stmt_user->bind_param("i", $user_id);
        $stmt_user->execute();
        $res_user = $stmt_user->get_result();

        if($res_user->num_rows>0){

            $user = $res_user->fetch_assoc();
            $fullname = $user['fname']." ".$user['surname'];
            $full_address = $user['add_full'];
            $suburb = $user['add_suburb'];
            $state = $user['add_state'];
            $postal = $user['add_postal'];
            $phone = $user['phone'];
            // 24 hours dispach of the order
            $tomorrow = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
            $shipped_date = date('Y-m-d',$tomorrow);

            // Create a purchase ID to be able to associate Purchase_item table
            $sql_addPurchase = "INSERT INTO purchase(`user_id`, `amount`, `fullname`, `full_address`, `suburb`, `state`, `postal`, `phone`, `shipped_date`, `tracking_number`)VALUES(?,?,?,?,?,?,?,?,?,?)";
            if($stmt_addPurchase = $connect->prepare($sql_addPurchase)){
                //execute the query and extract results
                $stmt_addPurchase->bind_param("idssssiisi", $user_id, $amount, $fullname, $full_address, $suburb, $state, $postal, $phone, $shipped_date, $tracking);

                if ($stmt_addPurchase->execute()) {
                    $purchase_id = $connect->insert_id;
                    echo "New record created successfully in the Purchase table. Last inserted ID is: " . $purchase_id;
                } else {
                    echo "Error: " . $sql_addPurchase . "<br>" . $connect->error;
                }

                $sql_selectItemPurchased = "SELECT item_id, COUNT(item_id) as qty, size_id FROM bag WHERE user_id = ? GROUP BY item_id";
                if($stmt_selectItemPurchased = $connect->prepare($sql_selectItemPurchased)){
                    //execute the query and extract results
                    $stmt_selectItemPurchased->bind_param("i", $user_id);
                    $stmt_selectItemPurchased->execute();
                    $res_selectItemPurchased = $stmt_selectItemPurchased->get_result();


                    if($res_selectItemPurchased->num_rows > 0){
                        while($bag = $res_selectItemPurchased->fetch_assoc()){
                            $item_id = $bag['item_id'];
                            $size_id = $bag['size_id'];
                            $qty = $bag['qty'];
                            $sql_addItemPurchased = "INSERT INTO purchase_items(`purchase_id`, `item_id`, `size_id`, `qty`)VALUES(?,?,?,?)";
                            if($stmt_addItemPurchased = $connect->prepare($sql_addItemPurchased)){
                                //execute the query and extract results
                                $stmt_addItemPurchased->bind_param("iiii", $purchase_id, $item_id, $size_id, $qty);

                                if ($stmt_addItemPurchased->execute()) {
                                    echo "New record created successfully in the Purchase Items table. ";
                                } else {
                                    echo "Error: " . $sql_addItemPurchased . "<br>" . $connect->error;
                                }
                            }
                        }

                        

                        // Email content
                        $message = "Your tracking number: $tracking. \n\n
                        If you want to keep track of your orders you can access all details on your account page. \n\n
                        Thank you for shopping with us! \n\n
                        The Monkey Development Team";
                        $to      = $user['email'];
                        $subject = 'Your order confirmation';
                        $headers = 'From: verde.ecommerce@gmail.com' . "\r\n" .
                            'Reply-To: verde.ecommerce@gmail.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
                        header('Location: thank-you.html');
                    } else {
                        echo "No record found for user ID ".$user_id;
                    }
                }
            } else {
                echo "User not in the DB";
            }
        }
    }


    


?>