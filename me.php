<?php // test1.php

    $username = "Fred Smith";
    echo $username;
    echo "<br>";
    $current_user = $username;
    echo $current_user;

    echo "<br>";
    $oxo = array(array('x', ' ', 'o'),
                array('o', 'o', 'x'),
                array('x', 'o', ' '));

    echo $oxo[2][1];

    echo "<br>";
    $author = "Bill Gates";

    $text = "Measuring programming progress by lines of code is like
    measurinng aircraft building process by weight.

    - $author.";
    echo $text;

    echo "<br>";
    function longdate($timestamp){
        return date("l F jS Y", $timestamp);
    }

    $temp = "The date is: ";
    echo $temp . longdate(time());

    echo "<br>";
    $days_to_new_year = 365 - $day_number;
    if ($days_to_new_year < 30){
        echo "No long until New Year's Day";
    }
    else {
        echo "Still got a-ways until New Year's";
    }

?>