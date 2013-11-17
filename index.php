<!doctype html>
<?php
$photo_dir = "./photos/";
$gallery_photos = glob($photo_dir . "*.jpg");
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>impress.js | presentation tool based on the power of CSS3 transforms and transitions in modern browsers | by Bartek Szopka @bartaz</title>
    
    <meta name="description" content="impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com." />
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
<<<<<<< HEAD
<<<<<<< HEAD
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="stylesheet" type="text/css" href="js/shadowbox/shadowbox.css">
    <script type="text/javascript" src="js/shadowbox/shadowbox.js"></script>
</head>

<body class="impress-not-supported">

<script type="text/javascript">
Shadowbox.init({
    handleOversize: "drag",
    modal: true,
    autoplayMovies: false,
    displayNav: false,
    overlayOpacity: 1,
    overlayColor: "#282828"
});
</script>

=======
=======
>>>>>>> 51220b070a43233c47d8b8419e06fb52a237e42c
    
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
</head>

<body class="impress-not-supported">
<<<<<<< HEAD
>>>>>>> 51220b070a43233c47d8b8419e06fb52a237e42c
=======
>>>>>>> 51220b070a43233c47d8b8419e06fb52a237e42c
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


<div id="impress">
    <?php
        foreach($gallery_photos as $image)
        {
            list($img_width, $img_height) = getimagesize($image);
            $ratioed_width = $img_width*500/$img_height;
            //echo "$ratioed_width\n";
            echo "<script>";
                echo 'document.write("<div id=\"p"+image_number+"\" class=\"step slide\" data-x= \"" + slide_pos + "\" data-y=\"0\">")'."\n";
<<<<<<< HEAD
<<<<<<< HEAD
                //echo 'document.writer("")'."\n";
                    echo 'document.write("<a href=\"'.$image.'\" rel=\"shadowbox\"> <img src=\"'.$image.'\" alt=\"Photo "+image_number+"\" /> </a>")'."\n";
                //echo 'dcoument.write("</a>")'."\n";
            echo "</script>";
                    echo '<div class="description"';
                        echo '<p class = "artist">';
                            echo 'Darren Divecha';
                        echo '</p>';
                        echo '<p class = "title">';
                            echo 'Cookies';
                        echo '</p>';
                        echo '<p class = "date">';
                            echo 'today';
                        echo '</p>';
                    echo '</div>';
            echo "<script>";
                echo 'document.write("</div>")'."\n";
                echo "slide_pos += image_shift + 900;\n";
                echo "image_number++;\n";
=======
=======
>>>>>>> 51220b070a43233c47d8b8419e06fb52a237e42c
                echo 'document.write("<img src=\".'.$image.'\" alt=\"Photo "+image_number+"\" />")'."\n";
            echo "</script>";
                    echo '<p class = "artist">';
                    echo 'Darren Divecha';
                    echo '</p>';
                    echo '<p class = "title">';
                    echo 'Cookies';
                    echo '</p>';
                    echo '<p class = "date">';
                    echo 'today';
                    echo '</p>';
            echo "<script>";
            echo 'document.write("</div>")'."\n";
            echo "slide_pos += image_shift + 900;\n";
            echo "image_number++;\n";
<<<<<<< HEAD
>>>>>>> 51220b070a43233c47d8b8419e06fb52a237e42c
=======
>>>>>>> 51220b070a43233c47d8b8419e06fb52a237e42c
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