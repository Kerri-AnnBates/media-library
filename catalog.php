<?php

    $pageTitle = "Full Catalog";
    $section = null;

    if(isset($_GET["cat"])) {
        switch($_GET["cat"]) {
            case "books":
                $pageTitle = "Books";
                $section = "books";
                break;
            case "movies":
                $pageTitle = "Movies";
                $section = "movies";
                break;
            case "music":
                $pageTitle = "Music";
                $section = "music";
                break;
            default:
            $scetion = null;
            $pageTitle = "Full Catalog";
        }
    }
    

    include("./includes/header.php");
    include("./includes/data.php");
?>

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php echo $pageTitle; ?></h1>
        <ul>
            <?php 
                foreach ($catalog as $item) {
                    echo "<li>" . $item["title"] . "</li>";
                }
            ?>
        </ul>
    </div>
</div>

<?php include("./includes/footer.php"); ?>