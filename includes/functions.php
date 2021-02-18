<?php

function get_item_html($id, $item) {
    $output = "<li><a href='#'><img src='" 
                . $item["img"] . "' alt='" 
                . $item["title"] . "' />" 
                . "<p>View Details</p>" ."</a></li>";
    return $output;
}

function array_category($catalog, $category) {
    if($category == null) {
        return array_keys($catalog);
    }

    $output = array();

    foreach ($catalog as $id => $item) {
        if(strtolower($category) == strtolower($item["category"])) {
            $sortByTitle = $item["title"];
            $sortByTitle = ltrim($sortByTitle, "The ");
            $sortByTitle = ltrim($sortByTitle, "A ");
            $sortByTitle = ltrim($sortByTitle, "An ");
            $output[$id] = $sortByTitle;
        }
    }

    asort($output);
    return array_keys($output);
}