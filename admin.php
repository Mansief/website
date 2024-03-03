<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
  <nav>
    
    <ul>
      <li><a href="#home">messages</a></li>
      <li><a href="#about">About me</a></li>
      <li><a href="index.php">portfolio</a></li>
      <li><a href="#"></a></li>
    </ul>
  </nav>
  <section id="home">
  <div class="table-container">
        <h2>Data Entries</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php include 'display_data.php'; ?>
        </table>
    </div>
  </section>
  <section id="about">
  
  </section>
  

</body>
</html>