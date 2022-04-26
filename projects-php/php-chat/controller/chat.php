<?php
//TODO: FORMAT DATE
//TODO: CONSTRUCT A CLASS
require '../model/db.php';
$query = "SELECT * FROM CHAT ORDER BY ID DESC";
$chatSelect = $chatDB->query($query)->fetchAll();
foreach ($chatSelect as $data) {
?>
<div id="chat-data">
    <span style="color: green;"><?=$data['NAME']?>:</span>
    <span style="color: brown;"><?=$data['MESSAGE']?></span>
    <!-- TODO: FORMAT DATE -->
    <span style="float: right;"><?=$data['DATE']?></span>
</div>
<?php } ?>
<?php
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $chatInsert = "INSERT INTO CHAT(ID, NAME, MESSAGE) VALUES('DEFAULT', '$name', '$message');";
    $insertMessage = $chatDB->query($chatInsert);
    if ($insertMessage) {
        echo "<embed loop ='false' src='assets/sounds/chat.mp3' hidden='true' autoplay='true'/>"; 
        header('location: ../index.php');
    }
}
?>