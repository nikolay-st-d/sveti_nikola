<?php
$title = 'Галерия | Kъща за гости Свети Никола';
$description = 'Галерия снимки от къща за гости Свети Никола - Жеравна. Разгледайте прекрасните гледки от къщата и природата наоколо.';
?>
<!DOCTYPE html>
<html lang="bg">

<head>
    <title>
        <?php echo $title; ?>
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <META NAME="ROBOTS" content="index, follow">
    <meta name="GOOGLEBOT" content="index, follow">
    <meta name="language" content="Български">
    <meta http-equiv="content-language" content="bg">
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"
        type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;800&display=swap" rel="stylesheet">

</head>
<?php
echo '<body>';
echo '<div class="container">';
include("includes/header.php");
echo '</div">';
?>
<div class="container">
    <div class="main-full-height">
        <div class="main_left">
            <h1>ERROR 404</h1>
            <h2>Търсената страница не е намерена на сървъра!</h2>
            <p>Моля, използвайте менюто, за да откриете търсената от Вас информация.</p>
        </div>
        <div class="main_right">
            <img src="images/sn_01.webp" alt="Къща Свети Никола - Жеравна" title="Къща Свети Никола - Жеравна" />
        </div>
    </div>
</div>

</div>
<?php include("includes/footer.php"); ?>
</body>

</html>