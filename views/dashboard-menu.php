<?php
	include_once('config/database.php'); 
?>

<?php

	//Нийт ангилал
	$sql_category = "SELECT COUNT(*) as num FROM category";
	$total_category = mysqli_query($connect, $sql_category);
	$total_category = mysqli_fetch_array($total_category);
	$total_category = $total_category['num'];


	$sql_product = "SELECT COUNT(*) as num FROM product";
	$total_product = mysqli_query($connect, $sql_product);
	$total_product = mysqli_fetch_array($total_product);
	$total_product = $total_product['num'];


  $sql_company = "SELECT COUNT(*) as num FROM brand";
  $total_company = mysqli_query($connect, $sql_company);
  $total_company = mysqli_fetch_array($total_company);
  $total_company = $total_company['num'];

?>
<div id="content" class="container col-md-12">

<div class="col-md-12">
		<h1>Удирдлагын хэсэг</h1>
		<hr/>
	</div>

 		<a href="category.php">
			<div class="col-sm-6 col-md-2">
	            <div class="thumbnail">    
	              <div class="caption">
	              <center>
	              <img src="public/img/ic_category.png" width="100" height="100">
	                <h3><?php echo $total_category;?></h3>
	                <p class="detail">Ангилалууд</p>  
	                </center>
	              </div>
	            </div>
	         </div>
	    </a>

		<a href="product.php">
          <div class="col-sm-6 col-md-2">
            <div class="thumbnail">    
              <div class="caption">
              <center>
              <img src="public/img/ic_product.png" width="100" height="100">
                <h3><?php echo $total_product;?></h3>
                <p class="detail">Бүтээгдэхүүний жагсаалт</p>  
                </center>
              </div>
            </div>
          </div>
        </a>

		<a href="product.php">
          <div class="col-sm-6 col-md-2">
            <div class="thumbnail">    
              <div class="caption">
              <center>
              <img src="public/img/ic_product.png" width="100" height="100">
                <h3><?php echo $total_company;?></h3>
                <p class="detail">Байгууллагууд</p>  
                </center>
              </div>
            </div>
          </div>
        </a>

        <a href="admin.php">
          <div class="col-sm-6 col-md-2">
            <div class="thumbnail"> 
              <div class="caption">
              <center>
              <img src="public/img/ic_setting.png" width="100" height="100">
                <h3><br></h3>
                <p class="detail">Тохиргоо</p>     
                </center>
              </div>
            </div>
          </div>
        </a>
</div>