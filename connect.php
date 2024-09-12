<?php
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $contact= $_POST['contact'];
    $whatsapp  = $_POST['whatsapp'];
    $city= $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $language = $_POST['language'];
    $fluency = $_POST['fluency'];
    $writing = $_POST['writing'];
    $intro = $_POST['intro'];
    $source = $_POST['source'];
    $motivation = $_POST['motivation'];
    $meeting_date = $_POST['meeting-date'];
    $meeting_time = $_POST['meeting-time'];
    $platform = $_POST['platform'];

    //Database connection

    $conn = new mysqli('localhost','root','','ivms_userdata');
    if ($conn->connect_error) {
      die('connecting failed : ', .$conn->connect_error);  
    } else {
        $stmt = $conn->prepare("INSERT INTO registration (name, email, contact, whatsapp, city, state, country, language, fluency, writing, intro, motivation, meeting_date, meeting_time, platform) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")i 
        $stmt->blind_param("ssiissssissssiis", $name, $email, $contact, $whatsapp, $city, $state, $country, $langugae, $fluency, $writing, $intro, $motivation, $meeting_date, $meeting_time, $platform);
        echo "registration successull";
        $stmt->close();
        $conn->close();
    }


    // Handle data (e.g., store it, send an email, or display it)
    echo "<h1>Submitted Data</h1>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Contact: " . htmlspecialchars($contact) . "<br>";
    echo "WhatsApp: " . htmlspecialchars($whatsapp) . "<br>";
    echo "City: " . htmlspecialchars($city) . "<br>";
    echo "State: " . htmlspecialchars($state) . "<br>";
    echo "Country: " . htmlspecialchars($country) . "<br>";
    echo "Language: " . htmlspecialchars($language) . "<br>";
    echo "Fluency: " . htmlspecialchars($fluency) . "<br>";
    echo "Writing Skill: " . htmlspecialchars($writing) . "<br>";
    echo "Introduction: " . htmlspecialchars($intro) . "<br>";
    echo "Source: " . htmlspecialchars($source) . "<br>";
    echo "Motivation: " . htmlspecialchars($motivation) . "<br>";
    echo "Meeting Date: " . htmlspecialchars($meeting_date) . "<br>";
    echo "Meeting Time: " . htmlspecialchars($meeting_time) . "<br>";
    echo "Platform: " . htmlspecialchars($platform) . "<br>";

?>