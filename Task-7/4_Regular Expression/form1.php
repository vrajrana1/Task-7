<html>
<head>
  <title>Regular Expression Example</title>
</head>
<body>
  <h1>Regular Expression Example</h1>
  <form method="post">
    <label>String: <input type="text" name="string"></label><br>
    <input type="submit" name="submit" value="Remove">
  </form>
  
  <?php
  if (isset($_POST['submit'])) {
    $string = $_POST['string'];
    $numeric_only = preg_replace("/[^0-9]/", "", $string);
    echo "<p>Original string: $string</p>";
    echo "<p>After removing non-numeric characters: $numeric_only</p>";
  }
  ?>
</body>
</html>
