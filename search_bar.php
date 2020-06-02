<?php
  session_start();
  require_once('assets/snippets/db.php');

  if(isset($_GET['term'])){

      // Prepare a select statement
      $sql = "SELECT * FROM item WHERE name LIKE ?";
      if( $query = $connect->prepare($sql) ){
          // Bind variables to the prepared statement as parameters
          $query->bind_param('s', $param_term);
          // Set parameters
          $param_term = $_GET['term'];

          $param_term = $connect->real_escape_string($param_term);
          $param_term = '%'.$param_term.'%';
          // Attempt to execute the prepared statement

          $query->execute();
          $result = $query->get_result();

          // Check number of rows in the result set
          $row = $result->num_rows;

          if($row > 0){
            echo "<div class='list-group'>";
              // Fetch result rows as an associative array
              while($item = $result->fetch_assoc()){
                //needs the link to the product
                  echo "<a href='product-detail.php?var={$item['item_id']}' class='list-group-item list-group-item-action search_item'>".$item['name']."</a>";
              }
              echo "</div>";
          } else{
              echo "<p>No matches found</p>";
          }

      }
  }
 ?>
