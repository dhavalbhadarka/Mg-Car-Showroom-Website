<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking</title>
  <style type="text/css">
body{
  text-align: center;
}

table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

h2{
  font-size: 50px;
}

td, th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

 tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #000;
  color: white;
}


.center {
  margin-left: auto;
  margin-right: auto;
}

.button {
  padding: 10px 12px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #0066ff;
  border: none;
  border-radius: 12px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  
  transform: translateY(4px);
}

.button1 {
  padding: 10px 12px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color:  #ff0000;
  border: none;
  border-radius: 12px;
  
}

.button1:hover {background-color: #3e8e41}

.button1:active {
  background-color: #3e8e41;
  
  transform: translateY(4px);
}

button.ab{

  margin-top: 150px;
padding: 10px 12px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  background-color:#BC243C ;
   border-radius: 12px;
  

}
.ab:hover {background-color: #98B4D4}

.ab:active {
  background-color: #3e8e41;
  transform: translateY(4px);
}
.abc{
  color:white;
}


  </style>
</head>
<body>
 <h2 class="text-center pt-5">Booking Detail Show</h2>

 
 <table class="center" style="width: 1000px" border="1px solid black">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">car</th>
      <th scope="col">varient</th>
      <th scope="col">fueltype</th>
      <th scope="col">Trasmission</th>
      <th scope="col">color</th>
      <th scope="col">state</th>
      <th scope="col">city</th>
      <th scope="col">dealer</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $temp=mysqli_query($con,"SELECT * FROM booking");
    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
       <th scope="col"><?php echo $data['id']; ?></th>
       <td scope="col"><?php echo $data['car']; ?></td>
       <td scope="col"><?php echo $data['varient']; ?></td>
       <td scope="col"><?php echo $data['fueltype']; ?></td>
       <td scope="col"><?php echo $data['transmission']; ?></td>
       <td scope="col"><?php echo $data['color']; ?></td>
       <td scope="col"><?php echo $data['state']; ?></td>
       <td scope="col"><?php echo $data['city']; ?></td>
       <td scope="col"><?php echo $data['dealer']; ?></td>
       <td scope="col"><?php echo $data['name']; ?></td>
       <td scope="col"><?php echo $data['email']; ?></td>
       <td scope="col"><?php echo $data['phone']; ?></td>
        <td scope="col"><?php echo $data['address']; ?></td>
        <td><a href="booking_update.php?id=<?php echo $data['id']; ?>"
          class="button">Update</a></td>
          <td><a href="booking_delete.php?uidi=<?php echo $data['id']; ?>" 
            class="button1">Delete</a></td>
          </tr>
        </tbody>
        <?php
      }
      ?>
    </table>
    <button class="ab"><a href="booking_insert.php" class="abc"> Booking DETAIL</a></button>
 <br> <br>
  </body>
  </html>