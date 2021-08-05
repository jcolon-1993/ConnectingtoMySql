<?php

    // Gets inputs from form
    $first_name = $_POST["firstname"];
    $last_name = $_POST['lastname'];
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $how_many = $_POST['howmany'];
    $alien_description = $_POST['aliendescription'];
    $what_they_did = $_POST['whattheydid'];
    $fang_spotted = $_POST['fangspotted'];
    $other = $_POST['other'];
    $email = $_POST['email'];


           // Connect to the database
           $dbc = mysqli_connect('localhost', 'root', '%0ArSs7UI4#I8op%', 'aliendatabase')
           or die("error connecting to MySQL server.");

           // Create a query string
           $query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened,
                     how_long, how_many, alien_description, what_they_did, fang_spotted,
                     other, email)" .
                     "VALUES ('$first_name ', '$last_name', '  $when_it_happened',
                     '$how_long', '  $how_many', '  $alien_description',
                     '$what_they_did', '$fang_spotted', '$other', '$email')";
           // Query the results
           $result = mysqli_query($dbc, $query)
             or die('Error querying database.');
           // Close connection to the database
           mysqli_close($dbc);

    // Confirmation page
    echo "Thanks for submitting the form.<br />";
    echo "You were abducted " . $when_it_happened;
    echo "and were gone for " . $how_long . "<br />";
    echo "Number of aliens: " . $how_many . "<br />";
    echo "Alien Description: " . $alien_description . "<br />";
    echo "The aliens did this: " . $what_they_did . "<br />";
    echo "Was Fang there? " . $fang_spotted . "<br />";
    echo "Other comments: " . $other . "<br />";
    echo "Your email address is " . $email;



?>
