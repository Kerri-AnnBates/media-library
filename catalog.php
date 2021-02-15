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
    

    include("./partials/header.php"); 
?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("./partials/footer.php"); ?>