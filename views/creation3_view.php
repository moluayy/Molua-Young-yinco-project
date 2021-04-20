
<head>
<link rel="stylesheet" href="stylesheet.css">
<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Creation</title>
    <style>
    </style>
</head>

<body>
    <main>
        <section class="creation">
        
        <h2>
            Repeat your character's name
        </h2>
        <form method ="post" action =../model/creation3_model.php>

        Name
        <input type="text" name="CharName">
    <h2>
        Next, write down your aspirations, touchstones and merits
    </h2>

    <label for="Aspirations">Aspirations:</label>
    <input type="text" name="Aspirations">

    <label for="Touchstones">Touchstones:</label>
    <input type="text" name="Touchstones">

    <label for="Merits">Merits:</label>
    <input type="text" name="Merits">

    <label for="Needle">Needle:</label>
    <input type="text" name="Needle">

        <label for="Thread">Thread:</label>
    <input type="text" name="Needle">    

    ​<input type="submit" value="Submit">

        </form>
        </section>
    </main>

</body>
</html>