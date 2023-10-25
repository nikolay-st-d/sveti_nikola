<?php
$title='Галерия | Kъща за гости Свети Никола';
$description='Галерия снимки от къща за гости Свети Никола - Жеравна. Разгледайте прекрасните гледки от къщата и природата наоколо.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?php echo $description; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="styles.css" rel="stylesheet" type="text/css">
<META NAME="ROBOTS" content="index, follow">
<meta name="GOOGLEBOT" content="index, follow">
<meta name="language" content="Български">
<meta http-equiv="content-language" content="bg">
<link rel="shortcut icon" href="images/favicon.png" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/lightbox.min.css">
</head>
<?php
echo '<body>';
echo '<div class="container">';
include("includes/header.php");
echo '</div">';
?>
<div class="container">
	<div class="gallery_header">
        <h1>Галерия снимки</h1>
        <h2>Къща за гости СВЕТИ НИКОЛА - Жеравна</h2>
        <p class="small_text">СЪВЕТ: Ако разглеждате галерията на компютър, натиснете F11 за да преминете на Full Screen режим и да виждате още по-големи снимки.</p>
        <div class="gallery">
            <?php
            $directory = "gallery";
            $images = glob($directory . "/*.webp");
            foreach($images as $image)
            {
            echo '<a href="'.$image.'" data-lightbox="gallery" title="Къща Свети Никола"><div class="gallery_thumbs"><img src="'.$image.'" alt="Къща за гости Свети Никола - Жеравна" /></div></a>';
            }
            ?>
        </div>
	</div>
</div>

</div>
<?php include("includes/footer.php"); ?>
<script src="js/lightbox-plus-jquery.min.js"></script>
</body>
</html>