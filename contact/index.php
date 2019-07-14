<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto - Yanire Gutiérrez</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/fonts.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/script.js" defer></script>
</head>
<body>
    <div class="container center contact">
        <div class="content">
            <div class="info">
                <div class="infotop">
                    Puedes contactar a través de estos métodos
                </div>
                <div class="infobottom">
                    <div>
                        <h3>Teléfono</h3>
                        <p>6666666666</p>
                    </div>
                    <div>
                        <h3>Correo electrónico</h3>
                        <p>Hola@gmail.com</p>
                    </div>
                </div>
                
            </div>
            <div class="contactForm flexColumn">
                <h1>Formulario de contacto</h1>
                <form class="flexColumn">
                    <label for="name">Nombre (requerido)</label>
                    <input type="text" name="name" required>

                    <label for="surname">Apellidos </label>
                    <input type="text" name="surname">
                
                    <label for="name">Correo electrónico (requerido)</label>
                    <input type="email" name="mail" required>
                    
                    <label for="message">Mensaje (requerido)</label>
                    <textarea name="message" required></textarea>
                    
                    <input type="submit" name="sendForm" value="Enviar mensaje" class="submit-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>