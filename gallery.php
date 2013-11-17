<!doctype html>
<?php
$photo_dir = "";
if(isset($_GET["gallery"]))
    $photo_dir = "./photos/".($_GET["gallery"])."/";
$gallery_photos = glob($photo_dir . "*.jpg");
$gallery_videos = glob($photo_dir . "*.mp4");

$stats = NULL;
if(isset($_GET["gallery"])){
    $stats = fopen("./photos/".$_GET["gallery"]."/stats.ini","rw");
    $stats_array = array(0);
    while ($line = fgets($stats)) {
      $stats_array[$line] ++;
    }
    fclose($stats);
}
else
    echo "Error 404";
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title><?php if (isset($_GET["gallery"])) echo str_replace("_", " ", $_GET["gallery"]); else echo "Error 404"; ?></title>
    
    <meta name="description" content="$_GET["gallery"]" />
    <meta name="author" content="Bartek Szopka" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />

    <!--
        
        Impress.js doesn't depend on any external stylesheet. Script adds all styles it needs for
        presentation to work.
        
        This style below contains styles only for demo presentation. Browse it to see how impress.js
        classes are used to style presentation steps, or how to apply fallback styles, but I don't want
        you to use them directly in your presentation.
        
        Be creative, build your own. We don't really want all impress.js presentations to look the same,
        do we?
        
        When creating your own presentation get rid of this file. Start from scratch, it's fun!
        
    -->
    <link href="css/art.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
    <script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
</head>

<body class="impress-not-supported">

<script type="text/javascript">
Shadowbox.init({
    handleOversize: "resize",
    modal: true,
    displayNav: false,
    overlayOpacity: 1,
    overlayColor: "#282828"
});
</script>

<script>
    slide_pos = 0;
    image_number = 1;
    image_shift = document.documentElement.clientWidth * .125;
</script>
<!--
    For example this fallback message is only visible when there is `impress-not-supported` class on body.
-->
<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>

<!--
<div id="bottom"><h1>The Galleries Online</h1>
    <ul>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="submit.html">Submit</a></li>
        <li><a href="donate.html">Donate</a></li>
    </ul>
</div>
-->
<div id="impress">
    <?php
        foreach($gallery_photos as $image)
        {
            list($img_width, $img_height) = getimagesize($image);
            $ratioed_width = $img_width*500/$img_height;
            //echo "$ratioed_width\n";
            echo "<script>";
                echo 'document.write("<div id=\"p"+image_number+"\" class=\"step slide\" data-x= \"" + slide_pos + "\" data-y=\"0\">")'."\n";
                //echo 'document.writer("")'."\n";
                    echo 'document.write("<a href=\"'.$image.'\" rel=\"shadowbox\"> <img src=\"'.$image.'\" alt=\"Photo "+image_number+"\" /> </a>")'."\n";
                //echo 'dcoument.write("</a>")'."\n";
            echo "</script>";
                    echo '<div class="description">';
                        echo '<p class = "artist">';
                            echo 'Artist';
                        echo '</p>';
                        echo '<p class = "title">';
                            echo 'Title';
                        echo '</p>';
                        echo '<p class = "date">';
                            echo 'Date';
                        echo '</p>';
                        echo '<p class = "likes">';
                            if (isset($stats_array[$image]))
                                echo "<a href=\"temp\">$stats_array[$image] Likes</a>";
                            else
                                echo "<a href=\"temp\">0 Likes</a>";
                        echo '</p>';
                        echo '<div class="donate">';
                            echo '<a  data-button-style="custom_small" href="https://coinbase.com/checkouts/b6aedbf8095bf93c83405886d7879dbd" target="_blank">Donate Bitcoins to Artist</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>';
                        echo '</div>';
                    echo '</div>';
                    
        echo '<div class="homeButton">';
        echo '<a href="index.html">Return to Index</a>';
        echo '</div>';
            echo "<script>";
                echo 'document.write("</div>")'."\n";
                echo "slide_pos += image_shift + 900;\n";
                echo "image_number++;\n";
            echo "</script>";
        }
        
        if(isset($_GET["gallery"]) && ($_GET["gallery"]) == "hack_duke"){
            echo "<script>";
                echo 'document.write("<div id=\"p"+image_number+"\" class=\"step slide\" data-x= \"" + slide_pos + "\" data-y=\"0\">")'."\n";
                //echo 'document.writer("")'."\n";
                echo 'document.write("<iframe width=\"90%\" height=\"90%\" src=\"//www.youtube.com/embed/azgTUSWVj5M\" frameborder=\"0\" allowfullscreen></iframe>")'."\n";
                //echo 'dcoument.write("</a>")'."\n";
            echo "</script>";
            echo "<script>";
                echo 'document.write("</div>")'."\n";
                echo "slide_pos += image_shift + 900;\n";
                echo "image_number++;\n";
            echo "</script>";
        }

    ?>
    <div class="hint">
        <p>Use a spacebar or arrow keys to navigate</p>
    </div>
<script>
if ("ontouchstart" in document.documentElement) { 
    document.querySelector(".hint").innerHTML = "<p>Tap on the left or right to navigate</p>";
}
</script>

<script src="js/impress.js"></script>
<script>impress().init();</script>
</body>
</html>
