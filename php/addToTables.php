<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "collectTheTitans";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 
    "INSERT INTO `scoutregiment` 
    (`id`, `firstname`, `lastname`, `rank`, `species`, `status`, `powerlevel`, `bio`, `special`) 
    VALUES (
        '000', 
        'Eren', 
        'Jaeger ', 
        'Scout/Attack Titan/Founding Titan/Warhammer Titan', 
        'Human/Titan', 
        'Alive', 
        '???', 
        'Eren Jaeger is a former member of the Scout Regiment and the main protagonist of Attack on Titan. He is the only son of Grisha and Carla Jaeger, the younger paternal half brother of Zeke Jaeger, and the current holder of the Attack Titan, Founding Titan, and the War Hammer Titan.', 
        'The Rumbling: a cataclysmic event involving Karl Fritz\'s Wall Titans marching across the earth, destroying all life upon it.'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>