<?php 

    switch($_GET["cat"]) {
        case "books":
            $pageTitle = "Books";
            break;
        case "movies":
            $pageTitle = "Movies";
            break;
        case "music":
            $pageTitle = "Music";
            break;
        default:
            $pageTitle = "Full Catalog";
    }

    include("./partials/header.php"); 
?>

<div class="section page">
    <h1><?php echo $pageTitle; ?></h1>
</div>

<?php include("./partials/footer.php"); ?>