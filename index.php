<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Your CV</title>
</head>
<body>
    <?php
    include ('functions.php');

    displayHeader ("Your Name", "Web Developer");

    displayAboutSection ("Your introduction goes here.");
    
    $educationItems = array (
        array("institution"=>"University name", "degree"=> "Degree", "gradYear"=>"Graduation Year",),
        array ("institution" => "High School", "degree"=>"Degree", "gradYear"=>"Graduation Year",),
    );
    displayEducationSection ($educationItems);

    $experienceItems = array (
        array (
            "title" => "Job Title",
            "company" => "Company Name",
            "startDate" => "Start Date",
            "endDate" => "End Date",
            "description" => "Description of your responsibilities and achievments."
    ),
    array (
        "title" => "Job Title",
        "company" => "Company Name",
        "startDate" => "Start Date",
        "endDate" => "End Date",
        "description" => "Description of your responsibilities and achievments."
    ),
);
    displayExperienceSection ($experienceItems);
    ?>
</body>
</html>