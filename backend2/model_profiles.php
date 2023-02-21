<?php
$sql = "SELECT * FROM profiles";

$statement = $conn->query($sql); //query metoden av mysqli objektet returnerar mysqli_result objektet

if ($statement->num_rows > 0)  //mysqli_result objektet har en egenskap som heter num_rows
{
    while($row = $statement->fetch_assoc()) 
    {
        print("Användarnamn: ".$row['username']);
    }
} 


//toDo kör sql kod på databasen