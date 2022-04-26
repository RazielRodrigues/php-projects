<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CHAT SYSTEM</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js"></script>
</head>
<body onload="getChat();">
    <main id="container">
        <center>
            <h1>GLOBAL AJAX CHAT</h1>
            <br>
        </center>
        <section id="chat-box">
            <div id="chat">
                Loading messages...
            </div>
        </section>

        <form action="controller/chat.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter name" required>
            <textarea name="message" id="message"></textarea>
            <input type="submit" name="send" id="send" value="send" required>
        </form>
        
    </main>
</body>
</html>