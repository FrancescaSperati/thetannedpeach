<?php
    require_once('db.php');
    $user_id = $_SESSION['user_id'];

    $sql_bag="SELECT bag.bag_id as bid, bag.user_id as uid, bag.item_id as iid, item.name as name, item.price as price, image.url as image FROM bag INNER JOIN item ON bag.item_id = item.item_id INNER JOIN image ON bag.item_id = image.item_id WHERE bag.user_id = 2 AND url LIKE '%a.%' GROUP BY bag.item_id";
    $result_bag_menu = $connect->query($sql_bag);
    if($result_bag_menu->num_rows > 0) {
        while($row_bag = $result_bag_menu->fetch_assoc()) {
            $bag_items = <<<DELIMITER
                <div class="row p-3" id="rowbag-{$row_bag['bid']}">
                    <div class="col-10">
                    <a class="px-0" href="product-detail.php?var={$row_bag['iid']}" id="bag">
                    <div class="row">
                        <div class="col-4 p-0 text-center">
                        <img class="image" height="100px" src="{$row_bag['image']}">
                        </div>
                        <div class="col-8 my-auto"">
                        <div><h6>{$row_bag['name']}</h6></div> <div><h6 class="text-muted text-right">\${$row_bag['price']}</h6></div>
                        </div>
                    </div>
                    </a>
                    </div>
                    <div class="col-2">
                    <a href="#" class="p-0" onclick="deleteItemBag({$row_bag['iid']})"><i class="fal fa-times"></i></a>
                    </div>
                </div>
DELIMITER;
    echo $bag_items;
    }
  } else {
    echo "No items in the bag";
  }
?>