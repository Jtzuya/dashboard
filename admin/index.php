<?php $directory = dirname(__FILE__); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet/less" type="text/css" href="/admin/assets/styles.less" />
    <script src="https://cdn.jsdelivr.net/npm/less" defer="defer"></script>
</head>

<body>
    <?php include($directory . '/sections/nav.php'); ?>
    <?php include($directory . '/sections/main.php'); ?>
</body>

</html>