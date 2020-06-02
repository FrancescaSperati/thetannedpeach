<div class="col">
  <div class="card">
    <div class="card-body p-2">
      <h4 class="card-title">
        Refine
        <button type="reset" class="btn btn-default btn-link text-right" rel="tooltip" title="" data-original-title="Reset Filter">
          <i class="material-icons">cached</i>
        </button>
      </h4>
        <div class="card card-collapse">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Price Range
                <i class="material-icons icn_price">keyboard_arrow_up</i>
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              <p>
                <label for="amount">Price range:</label>
                <input type="text" id="amount" style="border:0; color:#b3b3b3; font-weight:bold;" disabled>
              </p>
              <div id="slider"></div>
              <button type="button" id="btnReset" class="btn btn-sm btn-outline-info mt-3">Reset</button>
            </div>
          </div>
        </div>
        <div class="card card-collapse">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Categories
                <i class="material-icons icn_cat">keyboard_arrow_down</i>
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="allCat" type="checkbox" value="" checked> All
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <?php
                require_once('assets/snippets/db.php');
                $sql = "SELECT * from category";
                $query = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($query))
                { ?>
                  <div class="form-check">
                    <label class="form-check-label text-capitalize">
                      <input class="form-check-input categories" type="checkbox" value="<?php echo $row['cat_id']; ?>"> <?php echo $row['name']; ?>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div>
                  <?php
                }
                ?>
            </div>
          </div>
        </div>
        <div class="card card-collapse">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Size
                <i class="material-icons icn_size">keyboard_arrow_down</i>
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">
              <div class="form-check">
                <label class="form-check-label">
                  <input id="allSizes" class="form-check-input" type="checkbox" value="All" checked> All
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <?php
                require_once('assets/snippets/db.php');
                $sql = "SELECT * from size";
                $query = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_array($query))
                { ?>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input sizes" type="checkbox" value="<?php echo $row['size_id']; ?>"> <?php echo $row['name']; ?>
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                  </div><?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
