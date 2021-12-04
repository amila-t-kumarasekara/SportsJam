<?php

include 'db.php';


$sql = "SELECT * from wear_sub_cat";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
                              <td>" . $row["id_wearsubcat"] . "</td>
                          <td>" . $row["wear_subname"] . "</td>
                          <td>
               <form name='f2' action='update.php' method='post' >
                <input name=''  class='bg-blue rounded' type='submit' value='Update' />
                <input type='text' value=".$row['id_wearsubcat']." name='idcategory' id='idcategory' hidden>
               </form>
                        </td>
                        <td>
               <form name='f2' action='delete.php' method='post' >
                <input name='delete_wearssubcategory'  class='bg-danger rounded' type='submit' value='Delete' />
                <input type='text' value=".$row['id_wearsubcat']." name='idwearsubcategory' id='idwearsubcategory' hidden>
               </form>
                        </td>
                          </tr>";


}