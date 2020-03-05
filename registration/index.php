<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
    include '../includes/db.inc.php';
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
    if (isset($_POST['event'])) {
        $myEvent = $_POST['event'];
        $myAthleteVolunteer = $_POST['athleteVolunteer'];
		$myFullName = $_POST['name'];
		$myAge = $_POST['age'];
        $myEmail = $_POST['myEmail'];
		$myGender= $_POST['gender'];
		$myLastName = $_POST['lname'];
		$myContactName = $_POST['contName'];
		$myContactNumber = $_POST['contNumber'];
		$myContactAge = $_POST['contAge'];
        $myAccomodations = $_POST['accomodations'];

        // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

        // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
        try
        {
            $sql = 'INSERT INTO registration SET
                
                event = :event,
				athleteVolunteer = :athleteVolunteer,
				name = :name,
                age = :age,
                email = :email,
				gender = :gender,
				contName = :contName,
                contNumber = :contNumber,
				contAge = :contAge,
                accomodations = :accomodations';

            $s = $pdo->prepare($sql);
            $s->bindValue(':event', $myEvent);
            $s->bindValue(':athlete', $myAthleteVolunteer);
            $s->bindValue(':name', $myName );
			$s->bindValue(':age', $myAge);
			$s->bindValue(':email', $myEmail);
			$s->bindValue(':gender', $myGender);
			$s->bindValue(':contName', $myContactName);
			$s->bindValue(':contNumber', $myContactName);
            $s->bindValue(':contAge', $myContactAGe);
            $s->bindValue(':accomodations', $myAccomodations);
            $s->execute();
        }
        catch (PDOException $e)
        {
            $error = 'Error adding submitted fields : ' . $e->getMessage();
            include '../includes/error.html.php';
            exit();
        }
        // load the thank you page after the INSERT runs
            include 'success.html.php';
        // Add an else to load the initial page if the initial (line 19) if statement is false
    } else {

        include 'registration.html.php'; //Modify this to include the initial file for this folder
    }
?>
