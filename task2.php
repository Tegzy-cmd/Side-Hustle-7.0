<?php
/*
Task
Write a validation logic for a simple voting system.
Validations to check includes: 
    Check if voter is above 18 years Check if voter has PVC Check if voter’s ward is 020 If all checks out, echo “Voter eligible to vote”. If any fails, echo why it failed. Push Code to Github and submit link
*/
$voterAge = 19; //Voter age
$hasPVC = true; // A boolean variable to indicate if the voter has PVC or not
$voterWard = 020; // ward number of the voter

if ($voterAge > 18) { // First condition to check voter age if greater than 18
    if ($hasPVC) { // Second condition to check if voter has PVC
        if ($voterWard == 020) { // Third condition check if voter ward is 020
            echo "Voter eligible to vote"; // If all 3 conditions check out
        } else {
            echo "Voter ward is not 020"; // If voter ward is not 020
        }
    } else {
        echo "Voter does not have PVC"; // If voter does not have pvc
    }
} else {
    echo "Voter age is not more than 18"; // If voter age is not greater than 18
}
?>