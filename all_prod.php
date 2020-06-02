<?php
    require_once('assets/snippets/db.php');
    require_once('assets/snippets/check_session.php');
    $where = "";
    //get filters
    if( isset($_GET['sizes']) )
    {
      if( !empty($_GET['sizes']) )
      {

        $string_size = $_GET['sizes'];

        if (substr(rtrim($string_size), -1) == "-") {
          $string_size = substr($string_size, 0, -1);
        }

        $sizes = explode('-', $string_size);
        $where .= " AND stock.size_id IN (";
        $i = 0;
        foreach ($sizes as $s) {
          $i++;
          $where .= "$s";
          $where .= ($i >= count($sizes))? "" : ", ";
        }
        $where .= ")";
      }
    }

    if( isset($_GET['categories']) )
    {
      if( !empty($_GET['categories']) )
      {
        $string_cat = $_GET['categories'];
        if (substr(rtrim($string_cat), -1) == "-") {
          $string_cat = substr($string_cat, 0, -1);
        }

        $cat = explode('-', $string_cat);

        $where .= " AND category.cat_id IN (";
        $j = 0;
        foreach ($cat as $c) {
          $j++;
          $where .= "$c";
          $where .= ($j >= count($cat))? "" : ", ";
        }
        $where .= ")";
      }
    }

    //$sql = "SELECT item.item_id as id, item.name as name,item.description as description, category.name as category, item.price as price, image.url as url, size.name as size FROM item INNER JOIN image ON item.item_id = image.item_id INNER JOIN category ON category.cat_id = item.cat_id INNER JOIN stock ON item.item_id = stock.item_id INNER JOIN size ON stock.size_id = size.size_id WHERE url LIKE '%a.%'";
    $sql = "SELECT DISTINCT item.item_id as id, item.name as name,item.description as description,
      category.name as cat, item.price as price, GROUP_CONCAT(DISTINCT image.url SEPARATOR '|') as url,
      GROUP_CONCAT(DISTINCT stock.size_id SEPARATOR '-') as size FROM item
      INNER JOIN category ON category.cat_id = item.cat_id
      INNER JOIN image ON item.item_id = image.item_id
      INNER JOIN stock ON item.item_id = stock.item_id WHERE stock.quantity > 0";

    $sql .= $where;
    $sql .= " GROUP BY item.item_id";
    if($logged){
      $user_id = $_SESSION['user_id'];
    }
    else {
      $user_id = "";
    }
    if( $query = $connect->prepare($sql) ){
      $query->execute();
      $result = $query->get_result();
      if ($result->num_rows > 0){
        while($item = $result->fetch_assoc()) {
          $images = explode("|", $item['url']);
          $product = <<<DELIMITER
          <div class="col-sm-4 single_product" data-price={$item['price']}>
            <div class="card" >
              <a href="product-detail.php?var={$item['id']}">
                <img class="card-img-top" src="{$images[0]}">
              </a>
              <div class=" card-body d-flex align-items-center">
                <div class="text-left">
                  <h6 class="card-title">{$item['name']}</h6>
                  <p class="card-text price" >AUD$ {$item['price']}</p>
                </div>
                <div class=" favourite-card ml-auto">
                  <input type="hidden" value={$item['id']} class="found_fav">
                  <i class="material-icons fav" id={$item['id']}>favorite_border</i>
                </div>
              </div>
           </div>
         </div>
DELIMITER;
        echo $product;
        }
      }else{
        echo "No results";
      }
    }
 ?>