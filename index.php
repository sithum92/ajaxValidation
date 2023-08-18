<!-- index.php -->
<?php
include './mail.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <!-- ... (head content) ... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $.ajax({ //Start the ajax request
                    url: "mail.php",
                    method: "POST",
                    data: {
                        name: name,
                        email: email,
                        gender: gender,
                        message: message,
                        submit: submit
                    }, //Handel the response from the server
                    success: function(response) {
                        $(".form-message").html(response);//replace the content of the element
                    }
    </script>
    <title>Document</title>
</head>

<body>
     <!-- ... (form fields) ... -->
    <form action="mail.php" method="POST">

        <input id="mail-name" type="text" name="name" placeholder="Full name">
        <br>
        <input id="mail-email" type="text" name="email" placeholder="E-mail">
        <br>

        <select name="gender" id="mail-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <br>
        <textarea name="message" placeholder="Message" id="male-message" cols="30" rows="10"></textarea>
        <br>
        <button id="mail-submit" type="submit" name="submit">Send e-mail</button>
        <br>
    </form>
 <!-- ... (rest of the body content) ... -->
 <p id="form-message"></p>
</body>

</html>