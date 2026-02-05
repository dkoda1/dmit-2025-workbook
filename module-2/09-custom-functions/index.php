<?php


// to get the age of majority

// $birthdate = new DateTime('2001-04-28');
// $today = new DateTime ();

// $age = $today -> diff($birthdate) -> y;

// if ($age >= 18) {
//     echo "<p>person is of legal age</p>";
// } else {
//     echo "<p>person is a minor</p>";
// }

// function

function ageOfMajority($user_date)
{
    $province = 'AB';
    $user_date_converted = strtotime($user_date);
    $today = strtotime(date('y-m-d'));

    $seconds_per_year = 365 * 24 * 60 * 60;

    $calculation = floor(abs($today - $user_date_converted) / $seconds_per_year);

    switch ($province) {
        case 'AB':
        case 'QC':
        case 'MB':
            $are_you_an_adult_age = 18;
            break;

        default:
            $are_you_an_adult_age = 19;
            break;
    }

    if ($calculation >= $are_you_an_adult_age) {
        $message = 'you are an adult';
    } else {
        $message = 'you are still a baby';
    }
    return $message;
}

// this is to come later from the form
$user_input = '2001-04-28';
$result = ageOfMajority($user_input);

echo $result;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Functions</title>
</head>
<body>
    <div class="container">
    
    </div>
</body>
</html>
