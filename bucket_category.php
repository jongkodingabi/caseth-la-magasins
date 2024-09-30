        <!-- bucket product -->
        <?php 
        // $sql = "SELECT * FROM tblproduct WHERE category = 'bucket' AND detail-category IN ('pita-satin', 'kawat-bulu')";
        $sql = "SELECT * FROM tblproduct WHERE detail_category = 'pita_satin'";
        $query = mysqli_query($conn, $sql);
          while($row=mysqli_fetch_array($query)) {
      ?>
         <div class="item pita_satin col-md-4 col-lg-3 my-4">
                <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                    New
                </div> -->
                <div class="card position-relative">
                    <form id="productForm<?php echo $row['id']; ?>" action="singleproduct.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <a href="#" onclick="document.getElementById('productForm<?php echo $row['id']; ?>').submit();">
                        <img src="../admin-pkwu/template/images/<?php echo $row["picture"];?>" class="img-fluid rounded-4" alt="image" style="width: 345px; height: 330px;"></a>
                        </a>
                    </form>
                    <div class="card-body p-0">
                        <a href="singleproduct.php?id=<?php echo $row['id']; ?>">
                            <h3 class="card-title pt-4 m-0"><?php echo $row['name']; ?></h3>
                        </a>
                        <div class="card-text">
                            <span class="rating secondary-font">
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                5.0
                            </span>
                            <h3 class="secondary-font text-primary"><?php echo $row['price']; ?></h3>
                            <div class="d-flex flex-wrap mt-3">
                                <a href="singleproduct.php?id=<?php echo $row['id']; ?>" class="btn-cart me-3 px-4 pt-3 pb-3">
                                    <h5 class="text-uppercase m-0">See more</h5>
                                </a>
                                <a href="#" class="btn-wishlist px-4 pt-3">
                                    <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    


        <?php 
        // $sql = "SELECT * FROM tblproduct WHERE category = 'bucket' AND detail-category IN ('pita-satin', 'kawat-bulu')";
        $sql = "SELECT * FROM tblproduct WHERE detail_category = 'kawat_bulu'";
        $query = mysqli_query($conn, $sql);
          while($row=mysqli_fetch_array($query)) {
      ?>
         <div class="item kawat_bulu col-md-4 col-lg-3 my-4">
                <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
                    New
                </div> -->
                <div class="card position-relative">
                    <form id="productForm<?php echo $row['id']; ?>" action="singleproduct.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <a href="#" onclick="document.getElementById('productForm<?php echo $row['id']; ?>').submit();">
                        <img src="../admin-pkwu/template/images/<?php echo $row["picture"];?>" class="img-fluid rounded-4" alt="image" style="width: 345px; height: 330px;"></a>
                        </a>
                    </form>
                    <div class="card-body p-0">
                        <a href="singleproduct.php?id=<?php echo $row['id']; ?>">
                            <h3 class="card-title pt-4 m-0"><?php echo $row['name']; ?></h3>
                        </a>
                        <div class="card-text">
                            <span class="rating secondary-font">
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                                5.0
                            </span>
                            <h3 class="secondary-font text-primary"><?php echo $row['price']; ?></h3>
                            <div class="d-flex flex-wrap mt-3">
                                <a href="singleproduct.php?id=<?php echo $row['id']; ?>" class="btn-cart me-3 px-4 pt-3 pb-3">
                                    <h5 class="text-uppercase m-0">See more</h5>
                                </a>
                                <a href="#" class="btn-wishlist px-4 pt-3">
                                    <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </section>
