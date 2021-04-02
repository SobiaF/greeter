<?php
/**
 * @param string $fname
 * @param string $lname optional
 * @return string
 */
function greeter(string $fname, string $lname) : string
{
if ($lname) {
return '<h2>Welcome ' . $fname . ' ' . $lname . ' !</h2';
} else {
    return '<h2>Welcome ' . $fname .' !</h2';
}
}

$welcomeMessage = greeter('Selena', 'Khan');
echo $welcomeMessage;


function greeter($fname, $lname)
{
    echo "Welcome, $fname $lname!";
};

greeter('Selena', 'Khan');
