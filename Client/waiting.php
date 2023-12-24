<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}

input[type=submit]:hover {
  background-color: #45a049;

}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin-left: 25%;
}


.b {
  text-align: center;
  color: red;
}


body{

  background-image: url("final.jpg");
}



</style>
</head>
<body>



<div class="container">
  <form action="waitingdata.php" method="POST">

    <h3 class="b">Car Booking Waiting Form</h3>
    <br></br>

    <label for="">First Name : </label>
    <input type="text" name="fname" required>
    <br></br>

    <label for="">Last Name : </label>
    <input type="text" name="lname" required>
    <br></br>

     <label for="">Email : </label>
    <input type="text" name="email" required>
    <br></br>


    <label for="">Phone : </label>
    <input type="text" name="phone" required>
    <br></br>

    <label for="">Car Name : </label>
    <input type="text" name="carname" required>
    <br></br>

    <label for="">Car Varient : </label>
    <input type="text" name="varient" required>
    <br></br>

    <label for="">Car Delivery Expected Date: </label>
    <input type="text" name="date" placeholder="yyyy/mm/dd" required>
    <br></br>

    <input type="submit" value="Submit" name="submit" align="right">


 

</div>
</form>

</body>
</html>