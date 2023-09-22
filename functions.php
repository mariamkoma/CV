<?php
function displayHeader($name, $title) {
    echo "<header>";
    echo "<h1>$name</h1>";
    echo "<p>$title</p>";
    echo "</header>";
}

function displayAboutSection($intro) {
    echo "<section class='about'>";
    echo "<h2>About Me</h2>";
    echo "<p>$intro</p>";
    echo "</section>";
}

function displayEducationSection($educationItems) {
    echo "<section class='education'>";
    echo "<h2>Education</h2>";
    echo "<ul>";
    foreach ($educationItems as $item) {
        echo "<li><strong>{$item['institution']}</strong>";
        echo "<p>{$item['degree']}</p>";
        echo "<p>{$item['startDate']} - {$item['endDate']}</p>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</section>";
}

function displayExperienceSection ($experiensItems){
    echo "<section class='experience'>";
    echo "<h2>Experience</h2>";
    echo "<ul>";
    foreach (experienceItems as $item){
        echo "<li>";
        echo "<h3>{$item["title"]}</h3>";
        echo "<p><strong>{$item["company"]}</strong></p>";
        echo "</li>";
    }
    echo "</ul>";
    echo "</section>";
}
?>
