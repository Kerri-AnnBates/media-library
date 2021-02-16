<?php
    include("./includes/data.php");
    include("./includes/functions.php");

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
?>

<div class="section catalog page">
    <div class="wrapper">
        <h1><?php echo $pageTitle; ?></h1>
        <ul class="items">
            <?php 
                foreach ($catalog as $id => $item) {
                    echo get_item_html($id, $item);
                }
            ?>
        </ul>
    </div>
</div>

<?php include("./includes/footer.php"); ?>