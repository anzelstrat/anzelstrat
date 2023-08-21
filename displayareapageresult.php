<?php
  //urlpara
  if(isset($_GET['transactionid'])) {
    $transactionid = $_GET['transactionid'];

  // Connect to the database
  $conn = mysqli_connect("host", "hjqkcmasfe", "qPQZs6E9ft", "hjqkcmasfe");
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  // Select the data from the database
  $sql = "SELECT 'Content' FROM AREAPAGES WHERE 'TransactionID'=".$transactionid;
  $result = mysqli_query($conn, $sql);
  // Check if there is any data returned
  if (mysqli_num_rows($result) > 0) {
      // Loop through the data
      while($row = mysqli_fetch_assoc($result)) {
          echo $row["Content"]. "<br>";
      }
  } else {
      echo "0 results";
  }
// Close the connection
mysqli_close($conn);
?>
