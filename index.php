<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        h1 {
            margin-top: 20px;
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        .gallery img {
            width: 250px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
    </style>
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
