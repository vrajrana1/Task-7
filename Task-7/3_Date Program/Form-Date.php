<html>
<head>
  <title>Date Difference Calculator</title>
</head>
<body>
  <h1>Date Difference Calculator</h1>
  <form method="post">
    <label>First Date: <input type="date" name="date1"></label><br>
    <label>Second Date: <input type="date" name="date2"></label><br>
    <input type="submit" name="submit" value="Calculate">
  </form>
  
  <?php
  if (isset($_POST['submit'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    $time1 = strtotime($date1);
    $time2 = strtotime($date2);

    $diff = abs($time2 - $time1);

    $years = floor($diff / (365 * 60 * 60 * 24));
    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

    $month1 = date('F', $time1);
    $month2 = date('F', $time2);
    $day1 = date('l', $time1);
    $day2 = date('l', $time2);

    echo "<p>The difference between $date1 and $date2 is:</p>";
    echo "<ul>";
    echo "<li>$years years</li>";
    echo "<li>$months months ($month1 to $month2)</li>";
    echo "<li>$days days ($day1 to $day2)</li>";
    echo "</ul>";
  }
  ?>
</body>
</html>
