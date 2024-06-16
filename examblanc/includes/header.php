<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $current_page; ?> - Fake Car Dealership</title>
	<link href="css/main.css" rel="stylesheet" />
</head>

<body>
<header>
    <h1>Fake Car Dealership</h1>
    <nav>
        <a href="index.php" style="color: #fff; margin: 0 15px;" <?php if($current_page == 1){ ?> class="active" <?php } ?> >Home</a>
        <a href="team.php" style="color: #fff; margin: 0 15px;" <?php if($current_page == 3){ ?> class="active" <?php } ?>>Team</a>
        <a href="contact.php" style="color: #fff; margin: 0 15px;" <?php if($current_page == 2){ ?> class="active" <?php } ?>>Contact</a>
    </nav>
</header>