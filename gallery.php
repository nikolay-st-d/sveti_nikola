<?php
$title = 'Галерия от Kъща за гости Свети Никола - Жеравна';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" type="text/css">
    <META NAME="ROBOTS" content="index, follow">
    <meta name="GOOGLEBOT" content="index, follow">
    <meta name="language" content="Български">
    <meta http-equiv="content-language" content="bg">
    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans:wght@400;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/lightbox.min.css">
</head>
<?php
echo '<body>';
include("includes/header.php");
?>
<div class="container">
    <div class="gallery_header">
        <h1>Къща за гости Св. Никола - Жеравна</h1>
        <h2>Галерия снимки</h2>
        <div class="small_text">СЪВЕТ: Ако разглеждате галерията на компютър, натиснете F11 за
            да преминете на Full Screen
            режим и да виждате още по-големи снимки.</div>
        <div class="gallery">
            <?php
            $directory = "gallery";
            $images = glob($directory . "/*.webp");
            foreach ($images as $image) {
                //echo '<a href="' . $image . '" data-lightbox="gallery" title="Къща Свети Никола - Жеравна"><div class="gallery_thumbs"><img src="' . $image . '" alt="Къща за гости Свети Никола - Жеравна" /></div></a>';
                echo '<div class="gallery_thumbs"><a href="' . $image . '" data-lightbox="gallery" title="Къща Свети Никола - Жеравна"><img src="' . $image . '" alt="Къща за гости Свети Никола - Жеравна" /></a></div>';
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