<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SEARCH ENGINE PROJECT: INSERT SITE</title>

    <!-- TODO - SOME CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
<main>
    <form action="insert_site.php" method="post" enctype="multipart/form-data">
        <table width="800" cellspacing="2">

            <tr>
                <td><h2>Inserting new website</h2></td>
            </tr>

            <tr id="site_title">
                <td>Site Title</td>
                <td>
                    <input type="text" name="site_title" >
                </td>
            </tr>

            <tr id="site_link">
                <td>Site Link</td>
                <td>
                    <input type="text" name="site_link">
                </td>
            </tr>

            <tr id="site_keyword">
                <td>Site Keywords</td>
                <td>
                    <input type="text" name="site_keyword" >
                </td>
            </tr>

            <tr id="site_description">
                <td>Site Description</td>
                <td>
                    <input type="text" name="site_description" >
                </td>
            </tr>

            <tr id="site_image">
                <td>Site Image</td>
                <td>
                    <input type="file" name="site_image">
                </td>
            </tr>

            <tr id="submit">
                <td>
                    <input type="submit" name="submit" >
                </td>
            </tr>

        </table>
    </form>
</main>
</body>
</html>
<?php

$host = 'mysql:host=localhost;dbname=search';
$user = 'root';
$password = '';

    try {
        $database = new PDO($host, $user, $password);

        foreach($database->query('SELECT * from sites') as $row) {
            echo "<table> ";
                echo "<tr>";
                    echo "<td>".$row['site_title']."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>".$row['site_link']."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>".$row['site_keyword']."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>".$row['site_description']."</td>";
                echo "</tr>";
                echo "<td>";
                    echo "<td>".$row['site_image']."</td>";
                echo "</tr>";
            echo "</table>";
        }

        if (isset($_POST['submit'])) {

            if (
                !empty($_POST['site_title']) &&
                !empty($_POST['site_link']) &&
                !empty($_POST['site_keyword']) &&
                !empty($_POST['site_description']) &&
                !empty($_FILES['site_image']['name'])
            ){

                $data = array(
                    'site_title' => $site_title = $_POST['site_title'],
                    'site_link' => $site_link = $_POST['site_link'],
                    'site_keyword' => $site_keyword = $_POST['site_keyword'],
                    'site_description' => $site_description = $_POST['site_description'],
                    'site_image' => $site_image = $_FILES['site_image']['name']
                );

            }else{
                echo 'TODOS OS CAMPOS PRECISAM SER PREENCHIDOS';
                die();
                exit();
            }

            if (isset($data) && !empty($data)) {
                move_uploaded_file($_FILES['site_image']['tmp_name'],"view/storage/{$data['site_image']}");
                $insertSite = "
                    INSERT INTO sites (site_title, site_link, site_keyword, site_description, site_image)
                    VALUES (:site_title, :site_link, :site_keyword, :site_description, :site_image);"
                ;
                $database->prepare($insertSite)->execute($data);
                die();
                unset($_POST);
                header("Location: ".$_SERVER['REQUEST_URI']);
            }
        
        }

        $database = null;
    } catch (PDOException $e) {
        print "Error with database!: " .__FILE__. $e->getMessage() . "<br/>";
        die();
    }
    
?>