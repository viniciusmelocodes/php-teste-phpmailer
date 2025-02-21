<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de e-mail</title>
    <script>
        function sendEmail() {
            const email = 'bilodij546@lxheir.com';
            const subject = 'Here is the subject';
            const message = 'This is the message body';

            fetch('send_email.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email, subject, message })
            })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
    <button onclick="sendEmail()">Enviar e-mail</button>
</body>
</html>
