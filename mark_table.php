<!DOCTYPE html>
<html>
    <head>
        <title>
            Mark validation
        </title>
        <link rel="stylesheet" href="mark_table.css">
    </head>
    <body>
        <table style="border: 1px;">
            <tr>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td> <select name = "thirda[]">
                        <option value = "CO1">CO1</option>
                        <option value = "CO2">CO2</option>
                        <option value = "CO3">CO3</option>
                        <option value = "CO4">CO4</option>
                        <option value = "CO5">CO5</option>
                    </select>
                </td>
                <td> <select name = "thirdb[]">
                        <option value = "CO1">CO1</option>
                        <option value = "CO2">CO2</option>
                        <option value = "CO3">CO3</option>
                        <option value = "CO4">CO4</option>
                        <option value = "CO5">CO5</option>
                    </select>
                </td>
                <td> <select name = "foura[]">
                        <option value = "CO1">CO1</option>
                        <option value = "CO2">CO2</option>
                        <option value = "CO3">CO3</option>
                        <option value = "CO4">CO4</option>
                        <option value = "CO5">CO5</option>
                    </select>
                </td>
                <td> <select name = "fourb[]">
                        <option value = "CO1">CO1</option>
                        <option value = "CO2">CO2</option>
                        <option value = "CO3">CO3</option>
                        <option value = "CO4">CO4</option>
                        <option value = "CO5">CO5</option>
                    </select>
                </td>
                <td> <select name = "fivea[]">
                        <option value = "CO1">CO1</option>
                        <option value = "CO2">CO2</option>
                        <option value = "CO3">CO3</option>
                        <option value = "CO4">CO4</option>
                        <option value = "CO5">CO5</option>
                    </select>
                </td>
                <td> <select name = "fiveb[]">
                        <option value = "CO1">CO1</option>
                        <option value = "CO2">CO2</option>
                        <option value = "CO3">CO3</option>
                        <option value = "CO4">CO4</option>
                        <option value = "CO5">CO5</option>
                    </select>
                </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
                <td>    </td>
            </tr>
            <tr>
                <td> S.no           </td>
                <td> Stud_name      </td>
                <td> 1              </td>
                <td> 2              </td>
                <td> 3a)            </td>
                <td> 3b)            </td>
                <td> 4a)            </td>
                <td> 4b)            </td>
                <td> 5a)            </td>
                <td> 5b)            </td>
                <td> CO1            </td>
                <td> CO2            </td>
                <td> CO3            </td>
                <td> CO4            </td>
                <td> CO5            </td>
                <td> AVG            </td>
                <td>                </td>
            </tr>
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "krishna") or die("Error: Connection not established");
                    //$db = mysqli_select_db("krishna") or die("Error: Database not found ");
                    $query = 'SELECT * FROM student';
                    $data = mysqli_query($connection, $query);
                    if(mysqli_num_rows($data)>0)
                    {
                       while($row = mysqli_fetch_row($data))
                        {
                            echo "<tr>";
                            echo "<td> $row[0] </td>
                                  <td> $row[1] </td>
                                  <td> $row[2] </td>
                                  <td> $row[3] </td>
                                  <td> $row[4] </td>
                                  <td> $row[5] </td>
                                  <td> $row[6] </td>
                                  <td> $row[7] </td>
                                  <td> $row[8] </td>
                                  <td> $row[9] </td>
                                  <td> $row[10]</td>
                                  <td> $row[11]</td>
                                  <td> $row[12]</td>
                                  <td> $row[13]</td>
                                  <td> $row[14]</td>
                                  <td> $row[15]</td>
                                  <td> <input type = 'button' value = 'Edit'></td>";

                             echo "</tr>";
                        }
                    }
                else{
                    echo "NO row found";
                }
                mysqli_close($connection);
                ?>
        </table> 
    </body>
</html>
