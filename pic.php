<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="file" id="image" name="image" >
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php

$uploadDir = __DIR__ . "/images/";
$uploadFile = $uploadDir . basename($_FILES['image']['name']);

move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);
?>
echo "# internship-ala" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/alachaudhary/internship-ala.git
git push -u origin main