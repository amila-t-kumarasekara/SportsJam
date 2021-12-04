<?php

include 'db.php';


$sql = "SELECT * from wearstable as w inner join wear_category as wc on w.id_wearcat=wc.id_wearcat inner join wear_sub_cat as wsc on w.id_wearsubcat=wsc.id_wearsubcat where wearID";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>
                          <td>" . $row["wearID"] . "</td>
                          <td>" . $row["wearName"] . "</td>
                          <td>" . $row["wear_name"] . "</td>
                          <td>" . $row["wear_subname"] . "</td>
                          <td>" . $row["wearDesc"] . "</td>
                          <td><form name='f2' action='viewImg.php' method='post' >
                <input name='wearsviewImg'  class='bg-gradient-gray rounded' type='submit' value='View Image' />
                <input type='text' value=".$row['wearImage']." name='wearsImage' id='wearsImage' hidden>
               </form></td>
                          <td>" . $row["wearAvailability"] . "</td>
                          <td>" . $row["wearPrice"] . "</td>
                          <td>
               <form name='f2' action='update.php' method='post' >
                <input name=''  class='bg-blue rounded' type='submit' value='Update' />
                <input type='text' value=".$row['wearID']." name='idcategory' id='idcategory' hidden>
               </form>
                        </td>
                        <td>
               <form name='f2' action='delete.php' method='post' >
                <input name='delete_wears'  class='bg-danger rounded' type='submit' value='Delete' />
                <input type='text' value=".$row['wearID']." name='wearsId' id='wearsId' hidden>
               </form>
                        </td>
                          </tr>";


}