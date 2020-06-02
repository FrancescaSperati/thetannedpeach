<?php
  require_once('db.php');

  $user_id = $_SESSION['user_id'];
  $sql_sidebar_items = "SELECT favourite.user_id as UID, item.item_id as ID, item.name as name, item.price as price, image.url as url FROM favourite INNER JOIN item ON favourite.item_id = item.item_id INNER JOIN image ON item.item_id = image.item_id WHERE favourite.user_id = $user_id AND url LIKE '%a.%' GROUP BY item.item_id";
  $result_sidebar_items = $connect->query($sql_sidebar_items);
  if ($result_sidebar_items->num_rows > 0) {
    while($row_fav_items = $result_sidebar_items->fetch_assoc()) {
      $fav_item = <<<DELIMITER
      <div class="row pl-3" id="rowfav-{$row_fav_items['ID']}">
        <div class="col-10">
          <a class="px-0" href="product-detail.php?var={$row_fav_items['ID']}">
          <div class="row">
            <div class="col-4 p-0 text-center">
              <img class="image" height="100px" src="{$row_fav_items['url']}">
            </div>
            <div class="col-8 my-auto"">
              <div><h6>{$row_fav_items['name']}</h6></div> <div><h6 class="text-muted text-right">\${$row_fav_items['price']}</h6></div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-2">
          <a href="#" class="p-0" onclick="deleteFavItem({$row_fav_items['ID']}, $user_id)"><i class="fal fa-times"></i></a>
        </div>
     </div>
     
DELIMITER;
    echo $fav_item;
    }
  } else {
    echo "No results";
  }
?>
