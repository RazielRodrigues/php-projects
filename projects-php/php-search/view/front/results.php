<?php
    require 'header.php';
    include '../../controller/SearchController.php';
    $search = new SearchController();
    $result = $search->getAll();
    foreach ($result as $row) {
        echo "<table>";
            echo "<tbody>";
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
                echo "<tr>";
                    echo "<td>".$row['site_image']."</td>";
                echo "</tr>";
            echo "</tbody>";
        echo "</table>";
    }
?>