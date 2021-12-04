<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-light rounded my-2 py-2">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include 'db.php';



                    $sql="SELECT * from item_category";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                          <td>".$row["id_category"]."</td>
                          <td>".$row["cat_name"]."</td>
                          <td>
               <form name='f2' action='javascript:select()' >
                <input id='edit' type='submit' name='edit' value='Edit' />
               </form>
           </td>
                          </tr>";

                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $('table').DataTable();
    });

</script>
</body>
</html>