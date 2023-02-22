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
    $alpha_space_only = preg_replace("/[^a-zA-Z\s]/", "", $string);

    echo "<p>Original string: $string</p>";
    echo "<p>After removing non-alphabet and non-space characters: $alpha_space_only</p>";
  }
  ?>
</body>
</html>
