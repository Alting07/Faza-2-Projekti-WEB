<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact us.css"></link>
</head>
<body>
    <div class="main">
        <nav>
            <?php
                include 'Subcomponents/logo2.php';
                include 'Subcomponents/nav-links.php';
            ?>
        </nav>

        <div class="contact-section">
            <form>
                <h2>Na kontaktoni</h2>
                <input type="text" class="input-field" placeholder="Your Name">
                <input type="email" class="input-field" placeholder="Your Email">
                <input type="text" class="input-field" placeholder="Subject">
                <textarea type="text" class="input-field textarea-field" placeholder="Your Message"></textarea>
                <button type="button" class="btn">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>