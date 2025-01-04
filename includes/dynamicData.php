<?php
$menuactive = basename($_SERVER['PHP_SELF']);

// Set default values based on the active page
switch ($menuactive) {
    case 'index.php':
        $title = "Home - Default Page Title";
        $description = "Welcome to our homepage. Discover our services and offerings.";
        $keywords = "home, services, default keywords";
        break;

    default:
        $title = "Default Page Title";
        $description = "Default page description.";
        $keywords = "default, keywords";
        break;
}
?>

