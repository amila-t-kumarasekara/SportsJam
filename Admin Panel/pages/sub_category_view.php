<?php

include 'db.php';


$sql = "SELECT * from item_subcat";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
                          <td>" . $row["idSubCat"] . "</td>
                          <td>" . $row["sub_name"] . "</td>
                          <td>
               <form name='f2' action='update.php' method='post' >
                <input name=''  class='bg-blue rounded' type='submit' value='Update' />
                <input type='text' value=".$row['idSubCat']." name='idcategory' id='idcategory' hidden>
               </form>
                        </td>
                        <td>
               <form name='f2' action='delete.php' method='post' >
                <input name='delete_subcategory'  class='bg-danger rounded' type='submit' value='Delete' />
                <input type='text' value=".$row['idSubCat']." name='idsubcategory' id='idsubcategory' hidden>
               </form>
                        </td>
                          </tr>";


}