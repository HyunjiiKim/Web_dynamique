<?php
$current_page = '1';
include 'includes/header.php';
include  'includes/dbConnect.php'
?>

<div class="container">
<?php include 'includes/edito.php'; ?>

    <?php
    $query = $pdo->query("SELECT * FROM `cars` order by price;")->fetchAll();

    foreach ($query as $car) {
	    $discount = 'no-discount';
	    $price = $car['price'];
	    if($car['discount']){
		    $discount = 'discount';
            $price = $car['price'] - $car['price']*0.20;
        }
    ?>
  <div class="car <?php echo $discount; ?>">
    <h3><?php echo $car['name']; ?></h3>
    <img src="<?php echo $car['img']; ?>" alt="2023 Fastback Turbo">
    <p>Make: <?php echo $car['brand']; ?></p>
    <p>Model: <?php echo $car['model']; ?></p>
    <p>Year: <?php echo $car['year']; ?></p>
    <p class="price">$<?php echo $price; ?></p>
  </div>
    <?php } ?>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
