<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Image Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>My Dynamic Image Gallery</h1>
    
    <div class="gallery">
        <?php
            $image_folder = "images/"; // ইমেজ ফোল্ডারের নাম
            $images = glob($image_folder . "*.{jpg,png,jpeg,gif}", GLOB_BRACE);

            if (count($images) > 0) {
                foreach ($images as $image) {
                    echo "<img src='$image' alt='Gallery Image'>";
                }
            } else {
                echo "<p>No images found!</p>";
            }
        ?>
    </div>

</body>
</html>
