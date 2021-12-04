<?php

include 'db.php';


$sql = "SELECT * from equipmentstable as e inner join item_category as ic on e.equ_cat=ic.id_category inner join item_subcat as isc on e.equ_sub_cat=isc.idSubCat where equipmentID";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
                          <td>" . $row["equipmentID"] . "</td>
                          <td>" . $row["equipmentName"] . "</td>
                          <td>" . $row["cat_name"] . "</td>
                          <td>" . $row["sub_name"] . "</td>
                          <td>" . $row["equipmentDesc"] . "</td>
                          <td><form name='f2' action='viewImg.php' method='post' >
                <input name='viewImg'  class='bg-gradient-gray rounded' type='submit' value='View Image' />
                <input type='text' value=".$row['equipmentImage']." name='equImage' id='equImage' hidden>
               </form></td>
                          <td>" . $row["equipmentAvailability"] . "</td>
                          <td>" . $row["equipmentPrice"] . "</td>
                          <td>
               <form name='f2' action='update.php' method='post' >
                <input name=''  class='bg-blue rounded' type='submit' value='Update' />
                <input type='text' value=".$row['id_category']." name='idcategory' id='idcategory' hidden>
               </form>
                        </td>
                        <td>
               <form name='f2' action='delete.php' method='post' >
                <input name='delete_equ'  class='bg-danger rounded' type='submit' value='Delete' />
                <input type='text' value=".$row['equipmentID']." name='equId' id='equId' hidden>
               </form>
                        </td>
                          </tr>";


}