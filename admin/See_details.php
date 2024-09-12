<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");

?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d9c78b6614.js" crossorigin="anonymous"></script>
    <style>
        
        th,td{
                padding: .3rem;
                font-size: .9rem;
            }
        td{
            background-color: wheat;
        }
        .edit{
            text-align:center;
        }
        .edit i{
            padding: 1rem;
        }
        .delete{
            text-align:center;
        }
        .delete i{
            padding: 1rem;
        }
        .edit a:hover{
            color: green;
            filter: drop-shadow(1px 1px 7px green);
        }
        .delete a:hover{
            color: red;
            filter: drop-shadow(1px 1px 7px red);
        }
    </style>
</head>

<body>
    <h1>Bus Registered...</h1>
    <hr>
    <div class="add">
    <table class="table table-striped">
        <tr class="table-info">
            <th>S. No.</th>
            <th>Bus Name</th>
            <th>REGD No.</th>
            <th>Route Id</th>
            <th>Bus type</th>
            <th>Deparature Time</th>
            <th>Arrival Time</th>
            <th>Facilities</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php

            $sql = "select * from `add_bus`";
            $qry = mysqli_query($conn,$sql);
            $i=0;
            while($req = mysqli_fetch_array($qry)){
                $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo$req['B_Name'] ?></td>
            <td><?php echo$req['Regd_number'] ?></td>
            <td><?php echo$req['Route_id'] ?></td>
            <td><?php echo$req['Bus_type'] ?></td>
            <td><?php echo$req['Deparature_time'] ?></td>
            <td><?php echo$req['Arrival_time'] ?></td>
            <td><?php echo$req['Facilities'] ?></td>
            <td class="edit"><a href="update_bus.php?Regd_number=<?php echo $req['Regd_number'] ?>"><i class="fas fa-pencil"></a></td>
            <td class="delete"><a href="delete.php?Regd_number=<?php echo $req['Regd_number'] ?>" onclick="confirm('Are you sure!')"><i class="fas fa-trash"></a></td>
        </tr>
        <?php }; ?>
    </table>
</div>
<script>
function myFunction() {
  let text = "Are you sure?";
  if (confirm(text) == true) {
    text = "You pressed OK!";
  } else {
    text = "You canceled!";
  }
  document.getElementById("demo").innerHTML = text;
}
</script>
</body>

</html>