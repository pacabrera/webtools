<!DOCTYPE html>
<html>
    <head>
        <title>ICM</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>

<h3>INSTRUCTIONAL MEDIA CENTER</h3>
<h4>REQUEST FOR USE OF EQUIPMENT</h4>

<div class="container">
  <form class="form-style-7" method="post" action="print.php">
<ul>
<li>
    <label for="name">Name</label>
    <input type="text" name="name" maxlength="100">
    <span>Enter your full name here</span>
</li>
<li>
    <label for="datef">Date Filed</label>
    <input type="date" name="datef" maxlength="100" value="<?php echo date('Y-m-d'); ?>">
    <span>Enter the date filed</span>
</li>
<li>
    <label for="dater">DATE & TIME OF THE ACTIVTY</label>
    <input type="datetime-local" name="dater" maxlength="100">
    <span>Enter the Date and time of the activity</span>
</li>
<li>
    <label for="purpose">Activity / Purpose</label>
    <input type="text" name="purpose" maxlength="100">
    <span>Enter the activity or purpose</span>
</li>
<li>
    <label>Equipments</label><br>
       <input type="checkbox" name="equiptment[]"   value="AMPLIFIER (TRANSMITTER,LAPEL,POWER CORD)">AMPLIFIER (TRANSMITTER,LAPEL,POWER CORD)<br/>
       <input type="checkbox" name="equiptment[]"   value="AUDIO JACK ">AUDIO JACK <br/>
       <input type="checkbox" name="equiptment[]"   value="BATTERY (9 VOLTS)">BATTERY (9 VOLTS)<br/>
       <input type="checkbox" name="equiptment[]"   value="BATTERY (AA)">BATTERY (AA)<br/>
       <input type="checkbox" name="equiptment[]"   value="BATTERY (AAA)">BATTERY (AAA)<br/>
       <input type="checkbox" name="equiptment[]"   value="CD/CASSETTE PLAYER/MULTIPLAYER">CD/CASSETTE PLAYER/MULTIPLAYER<br/>
       <input type="checkbox" name="equiptment[]"   value="COMPUTER PACKAGE">COMPUTER PACKAGE<br/>
       <input type="checkbox" name="equiptment[]"   value="EXTENSION CORD">EXTENSION CORD<br/>
       <input type="checkbox" name="equiptment[]"   value="MICHROPHONE (WIRED)">MICHROPHONE (WIRED)<br/>
       <input type="checkbox" name="equiptment[]"   value="MICHROPHONE (WIRELESS)">MICHROPHONE (WIRELESS)<br/>
       <input type="checkbox" name="equiptment[]"   value="MULTIMEDIA PROTECTOR">MULTIMEDIA PROTECTOR<br/>
       <input type="checkbox" name="equiptment[]"   value="REMOTE CONTROL(PROJECTOR/PLAYER)">REMOTE CONTROL(PROJECTOR/PLAYER)<br/>
       <input type="checkbox" name="equiptment[]"   value="PROJECTOR SCREEN">PROJECTOR SCREEN<br/>
       <input type="checkbox" name="equiptment[]"   value="VGA CONNECTOR">VGA CONNECTOR<br/>
    
</li>
<li>
    <input type="submit" value="Send This" >
</li>

</ul>
</form>
</div>
</body>
   
</html>
