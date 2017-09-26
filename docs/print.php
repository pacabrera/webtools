
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.scss">
</head>
<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="printarea">
            <div class="header">
                <p><strong>LIBRARY DEPARTMENT</strong></p>
                <p>Holy Angel University</p>
                <p>Angeles City</p>
            </div>  
            <br/>
            <br/>
            <p><strong>INSTRUCTIONAL MEDIA CENTER</strong></p>
            <p><strong>REQUEST FOR USE OF EQUIPMENT</strong></p>
            <p>Date Filed: <?php echo $_POST['datef']?></p> 
            
            <p>ACTIVITY/PURPOSE: <u><?php echo $_POST['purpose']?></u></p>
            <p>DATE & TIME OF ACTIVITY: </p>
            
            <table>
                <tr>
                    <th>AV EQUIPTMENT</th>
                </tr>
                
<?php
if(!empty($_POST['equiptment'])) {
    foreach($_POST['equiptment'] as $check) {
            echo '<tr><td>'.$check.'</tr></td>'; 
    }
}
?>
            </table>
            
            <p><strong>REQUESTED BY</strong></p>
            <p>NAME OF BORROWER:</p>
            <p>Signature:___________</p>
            
        </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
