<?php

include 'db.php';


    $sql = "SELECT * from item_category";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                          <td>" . $row["id_category"] . "</td>
                          <td>" . $row["cat_name"] . "</td>
                          <td>
               <form name='f2' action='update.php' method='post' >
                <input name=''  class='bg-blue rounded' type='submit' value='Update' />
                <input type='text' value=".$row['id_category']." name='idcategory' id='idcategory' hidden>
               </form>
                        </td>
                        <td>
               <form name='f2' action='delete.php' method='post' >
                <input name='delete_category'  class='bg-danger rounded' type='submit' value='Delete' />
                <input type='text' value=".$row['id_category']." name='idcategory' id='idcategory' hidden>
               </form>
                        </td>
                          </tr>";


}


