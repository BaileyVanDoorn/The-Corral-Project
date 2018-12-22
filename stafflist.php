<?php
 	$PageTitle = "Staff List";
	require "header_staff.php";
  require "getcampus.php";
?>

<h2>Staff Information</h2>
<style>
    tr:nth-child(odd) {
        background-color: #f4f4f4;
    }
    tr:nth-child(even) {
        background-color: #ececec;
    }
</style>
<?php
require_once "connectdb.php";

$sql="SELECT * FROM STAFF ORDER BY STAFF_ID ASC";
$res=mysqli_query($CON, $sql);

echo "<form name='staffListForm' action='staffuser.php' method='get'>
    <table width='1250px' border='1px' cellpadding='8px' align='center'>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Location</th>
      <th>Email</th>
      <th>Update</th>
    </tr>";

while ($row=mysqli_fetch_assoc($res)){
    echo "<tr>
            <td align='center' width='190px'>".$row['STAFF_FIRSTNAME']."</td>
            <td align='center' width='190px'>".$row['STAFF_LASTNAME']."</td>
            <td align='center' width='180px'>".getcampus($row["STAFF_LOCATION"])."</td>
            <td align='center' width='500px'>".$row['STAFF_EMAIL']."</td>
            <td align='center'><button value ='".$row['STAFF_ID']."' name='staffid' class='inputButton'>Update</button></td>
          </tr>";
}

echo "</table></form>";
mysqli_free_result($res);
mysqli_close($CON);
require "footer.php"; ?>
