<?php


        $conn = new mysqli('localhost','root','');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        mysqli_select_db($conn,"moviedb");
        $sql = "SELECT * FROM movie";

        $result = $conn->query($sql);
   


?>

<!DOCTYPE html>
<html>
<title>
<head> Fetch data from database</head>
</title>

<body>
<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="6"><h2>Movie Record</h2></th>
</tr>
<t>
<th>Movie ID</th>
<th>Movie Name</th>
<th>Lead Actor</th>
<th>Actress</th>
<th>Year Of Release</th>
<th>Director Name</th>
</t>
<?php
                        $count=1;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                print "<tr><th scope='row'>";
                                echo $count++; 
                                print "</th> <td>";								
                                echo $row["movie_name"]; 
								print "</td> <td>";
                                echo $row["lead_actor"]; 
                                print "</td> <td>";
                                echo $row["actress"]; 
                                print "</td> <td>";
                                echo $row["year_of_release"]; 
                                print "</td> <td>";
                                echo $row["director_name"]; 
                                print "</td> ";
                                }

                            }
                        else
                            echo '<tr><td colspan="8">No Movie Details Found</td></tr>';
                        ?>
</table>
</body>
</html>