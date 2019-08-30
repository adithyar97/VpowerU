<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<style>
        .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #4CAF50;
        border-radius: 12px;
    }
    
    .button1:hover {
        opacity: 0.8;
        background-color: #4CAF50;
        color: white;
    }
    .button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
    border-radius: 12px;
}

.button3:hover {
    opacity: 0.8;
    background-color: #f44336;
    color: white;
}
.button5 {
    
        display: inline-block;
        background-color:black;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 300px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;

      
    border-radius: 12px;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
.button5 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button5 span:after {
  content: '\00bb';
  position: relative;
  opacity: 1;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
    
</style>
<body>
    <script>
        function myFunction4() {
            alert("This will take you to the update");
        }function myFunction5() {
            alert("Are you sure you wamt to exit");
        }
        </script>


<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4></h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Profile Page</h1>
    
</header>

<div id="id01" class="w3-modal"text-align="justify">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright">×</span>
        <h4>Oh snap! We couldn't Recognise you......</h4>
        
      </header>
      <div class="w3-padding">
        <p>Access Denied</p>
        <p>Please Make Sure You Provide The Right Credentials <a class="w3-btn" href="/w3css/default.asp"></a></p>
      </div>
      <footer class="w3-container w3-theme-l1">
        <p>Thank You</p>
      </footer>
    </div>
</div>

<div id ="main3" class="w3-third" text-align="justify";>
  <div id ="main4" class="w3-card w3-container" style="min-height:460px" text-align: center; width = 100px;>
        <h3 >Profile Details<h3><br>
             
             <?php 
include("./connect_DB.php");
$sql = "SELECT fname,lname,pmp_id,email,role,organization,invite_status from pmp_users where pmp_id=200";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "Name: " . $row["fname"]." ".$row['lname']. "pmp_id: " . $row["pmp_id"]. " Email: " . $row["email"]. " Role: ".$row["role"]." Organization: ".$row["organization"]." Invite Status: ".$row["invite_status"]."<br>";
        echo "<p id ='name'>NAME: ".$row["fname"]." ".$row['lname']."</p>";
        echo "<p id = 'id'>ID: ".$row["pmp_id"]."</p>";
        echo "<p id = 'mail_id'>MAIL ID: ".$row["email"]."</p>";
        echo "<p id = 'role'> ROLE: ".$row["role"]."</p>";
        echo "<p id ='org'>ORGANIZATION: ".$row["organization"]."</p>";
        echo "<p id ='status'> STATUS: ".$row["invite_status"]."</p>";
    }
} else {
    echo "No results found!";
}
$conn->close();

?>

  </div>
  <button class="button button1" onclick='window.location.href="./update.php"'>UPDATE</button><button class="button button3" onclick="myFunction5()" style="align:center;">EXIT</button>
</div>
</div>
<button onclick="myAccFunc('Demo2')" class="w3-padding-16 w3-theme w3-button w3-block w3-left-align"> FAQs</button>
</body>
</html>



