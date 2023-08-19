<html>
<div class="header">
  <a href="header.php" class="logo">EMPLOYEE MANAGEMENT SYSTEM</a>
  <div class="header-right">
    
  <a class="active" href="login.php">LOGIN</a>
    <a  href="index.php">SIGN UP</a>
    <a  href="users.php">USERS</a>
    <a href="org.php">STATS</a>
    <a href="contactus.php">CONTACT</a>
    
  </div>
</div>

<?php
include("config.php");
$db= $con;
$tableName="organization";
$columns= ['org_id', 'org_name','Investment','org_address'];
$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{
$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName";
$result = $db->query($query);
if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>


<center>
<h1>ORGANISATION TABLE</h1>
<table class="styled-table">
       <thead><tr><th>S.N</th>
       <th>ORG_ID</th>
         <th>ORG_NAME</th>
         <th>Investment</th>
         <th>ORG_ADDRESS</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
     
      <td><?php echo $data['org_id']??''; ?></td>
      <td><?php echo $data['org_name']??''; ?></td>
      <td><?php echo $data['Investment']??''; ?></td>
      <td><?php echo $data['org_address']??''; ?></td>
      
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
     </center>
<style>
    .header {
  overflow: hidden;
  background-color: lightblue;
  padding: 20px 10px;
  
}
h1{
    font-size: 50px;
    background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}

.styled-table {
    width: 70%;
    height: 50%;
   
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
/* Style the header links */
.header a {
  float: left;
  color: lightblue;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

</style>
</html>