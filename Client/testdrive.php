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
  <form action="testdrivedata.php" method="POST">

    <h3 class="b">Test Drive Booking Form</h3>
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



    <label for="">Select Car : </label>
  <select name="car" required>
    <option selected disabled>-- Select Car --</option>
    <option value="hector">Hector</option>
    <option value="hector plus 6 str">Hector Plus 6str</option>
    <option value="hector plus 7 str">Hector Plus 7str</option>
    <option value="zs ev 2021">ZS EV 2021</option>
    <option value="gloster">Gloster</option>
  </select>
  <br></br>


    <label for="">Select Varient : </label>
  <select name="varient" required>
    <option selected disabled>-- Select Varient --</option>
    <option value="sharp">Sharp</option>
    <option value="smart">Smart</option>
    <option value="super">Super</option>
    <option value="style">Style</option>
  </select>
  <br></br>


    <label for="">Select Fuel Type : </label>
  <select name="fueltype" required>
    <option selected disabled>-- Select Fuel Type --</option>
    <option value="petrol">Petrol</option>
    <option value="diesel">Diesel</option>
    <option value="electric">Electric</option>
  </select>
  <br></br>



    <label for="">Select Trasmission : </label>
  <select name="transmission" required>
    <option selected disabled>-- Select Transmission --</option>
    <option value="automatic">Automatic</option>
    <option value="manual">Manual</option>
    <option value="cvt">CVT</option>
  </select>
  <br></br>



   <label for="">Select Car Color : </label>
  <select name="color" required>
    <option selected disabled>-- Select Car Color --</option>
    <option value="white">White</option>
    <option value="grey">Grey</option>
    <option value="black">Black</option>
    <option value="red">Red</option>
  </select>
  <br></br>
</div>



<div class="container">
 <h3 class="b">Location Of Test-Drive</h3>
  <br></br>

    <label for="">Address : </label>
    <textarea  name="address" placeholder="Write address here.." style="height:200px" required></textarea>

    <label for="">City : </label>
    <input type="text" name="city" required>
    <br></br>

    <label for="">State : </label>
    <input type="text" name="state" required>
    <br></br>

    <label for="">Pin-Code : </label>
    <input type="text" name="pincode" required>
    <br></br>

</div>


<div class="container">
  
  <h3 class="b">Preffered Date & Time Slots</h3>
   <br></br>


   <label for="">Preffered Date : </label>
    <input type="text" name="date" placeholder="yyyy/mm/dd" required>
    <br></br>

     <label for="">Select Time Slot : </label>
  <select name="time" required>
    <option selected disabled>-- Select Time Slots --</option>
    <option value="12:00-14:00">12:00-14:00</option>
    <option value="14:00-16:00">14:00-16:00</option>
    <option value="16:00-18:00">16:00-18:00</option>
  </select>
  <br></br>

    <input type="submit" value="Submit" name="submit" align="right">


 

</div>
</form>

</body>
</html>
