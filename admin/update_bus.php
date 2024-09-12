<?php

$conn = mysqli_connect("localhost","root","","online bus ticket booking system");

?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d9c78b6614.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<h1>Update Bus...</h1>
    <hr>
    <form action="update.php" method="post">
        <table>
            <?php 
                if ($_GET['Regd_number']) {
                    $Regd_number = $_GET['Regd_number'];
                    $sql = "select * FROM `add_bus` WHERE `Regd_number` = '$Regd_number'";
                    $qry = mysqli_query($conn,$sql);

                    while($req = mysqli_fetch_array($qry)){
            ?>
            <tr>
                <td>Bus Name</td>
                <td>:</td>
                <td><input type="text" name="b_name" id="" pattern="\w{1,20}" required value="<?php echo$req['B_Name'] ?>"></td>
                <td></td>
                <td>Bus ID</td>
                <td>:</td>
                <td colspan="2"><input type="text" name="regd" id="" placeholder="Regd number(ex:OR05 0007)" pattern="O[R,D]\d{2}\s\d{4}" required value="<?php echo$req['Regd_number'] ?>"></td>
            </tr>
            <tr>
                <td>Route ID</td>
                <td>:</td>
                <td><input type="text" name="route" id="" placeholder="4digit number" pattern="\d{4}" required value="<?php echo$req['Route_id'] ?>"></td>
                <td></td>
                <td>Bus Type</td>
                <td>:</td>
                <td>
                    <select name="bus_type[]" id="">
                        <option value="A/C" <?php ($req['Bus_type'][0]=="A/C,")?selected: 0; ?> >A/C</option>
                        <option value="Non A/C" <?php ($req['Bus_type'][0]=="Non A/C,")?selected: 0; ?> >Non A/C</option>
                    </select>
                </td>
                <td>
                    <select name="bus_type[]" id="">
                        <option value="Sleeper" <?php ($req['Bus_type'][1]=="Sleeper,")?selected:0; ?> >Sleeper</option>
                        <option value="Seater" <?php ($req['Bus_type'][1]=="Seater,")?selected:0; ?> >Seater</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Departure Time</td>
                <td>:</td>
                <td><input type="time" name="d_time" id="" value="<?php echo$req['Deparature_time']?>"></td>
                <td></td>
                <td>Arrival Time</td>
                <td>:</td>
                <td colspan="2"><input type="time" name="a_time" id="" value="<?php echo$req['Deparature_time']?>"></td>
            </tr>
            <tr>
                <td>Facilities</td>
                <td>:</td>
                <td colspan="6"><input type="checkbox" name="Facilities[]" id="" style="width: 3%;margin-left: 7%;" value="WIFI">WIFI
                        <input type="checkbox" name="Facilities[]" id="" style="width: 3%;margin-left: 7%;" value="Water Bottle">Water Bottle
                        <input type="checkbox" name="Facilities[]" id="" style="width: 3%;margin-left: 7%;" value="Blanket">Blanket
                        <input type="checkbox"name="Facilities[]" id="" style="width: 3%;margin-left: 7%;margin-top: 2%;" value="Charging Point">Charging Point</td>
            </tr>
            <?php } }; ?>
        </table>
        <div class="btn" style="display:flex;justify-content:center;">
            <button class="update" style="border:none;border-radius: 5px;padding:.5rem 2rem .5rem 2rem;font-size:20px;">Update</button>
        </div>
    </form>
</body>

</html>