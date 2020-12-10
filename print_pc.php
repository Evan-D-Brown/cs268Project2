<?php
// Get a connection for the database
require_once('sql_conn.php');

// Create a query for the database
//$query = "SELECT origin, destination, duration FROM flights";
$query = "SELECT * FROM pc";


// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Customer ID</b></tr>
<td><td align="left"><b>First Name</b></td>
<td align="left"><b>Last Name</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Department</b></td>
<td align="left"><b>Comments</b></td>';


// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 

$row['Id'] . '</td><td align="left">' . 


$row['firstname'] . '</td><td align="left">' . 
$row['lastname'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' .
$row['budget'] . '</td><td align="left">' .
$row['comment'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>