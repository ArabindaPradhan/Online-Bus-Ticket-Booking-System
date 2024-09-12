<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");

?>

<html>
    <head>
        <style>
            th,td{
                border : 1px solid black;
                padding: 1rem;
            }
        </style>
    </head>
    <body>
    <table>
        <tr>
            <th>Bus Name</th>
            <th>REGD No.</th>
            <th>Route Id</th>
            <th>Bus type</th>
            <th>Deparature Time</th>
            <th>Arrival Time</th>
            <th>Facilities</th>
        </tr>
        <?php

            $sql = "select * from `add_bus`";
            $qry = mysqli_query($conn,$sql);
            while($req = mysqli_fetch_array($qry)){
    
        ?>
        <tr>
            <td><?php echo ($req['B_Name']) ?></td>
            <td><?php echo$req['Regd_number'] ?></td>
            <td><?php echo$req['Route_id'] ?></td>
            <td><?php echo$req['Bus_type'] ?></td>
            <td><?php echo$req['Deparature_time'] ?></td>
            <td><?php echo$req['Arrival_time'] ?></td>
            <td><?php echo$req['Facilities'] ?></td>
        </tr>
        <?php }; ?>
    </table>
    </body>
</html>