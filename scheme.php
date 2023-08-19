<html>


<?php
include("config.php");
$db= $con;
$tableName="schemes";
$columns= ['scheme_id', 'scheme_type','org_id','emp_count','monthlycount','yearlycount'];
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
<u><h1 style="color:blue;">SCHEMES INFO</h1></u>
<table class="styled-table">
       <thead>
        <tr>
            <!-- <th>S.N</th> -->
       <th>SCHEME_ID</th>
         <th>SCHEME_TYPE</th>
         
         <th>ORG_ID</th>
         <th>EMP_COUNT</th>
         <th>MONTHLY_COUNT</th>
         
         <th>YEARLY_COUNT</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      
      <!-- <td><?php echo $data['scheme_id']??''; ?></td> -->
      <td><?php echo $data['scheme_type']??''; ?></td>
      <td><?php echo $data['org_id']??''; ?></td>
      <td><?php echo $data['emp_count']??''; ?></td>
      <td><?php echo $data['monthlycount']??''; ?></td>
      <td><?php echo $data['yearlycount']??''; ?></td>
      
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