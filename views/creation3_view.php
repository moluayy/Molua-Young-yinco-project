
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
<section >

    <main>
        

        <form method ="post" action =../model/creation3_model.php class ="creation3">
        <h2>
            Repeat your character's name
        </h2>
<!-- the page behaves much as the previous two-->
<label for="CharName">Name</label>
        <input type="text" name="CharName">
    <h2>
        Next, write down your aspirations, touchstones, Needle and Thread and merits
    </h2>

    <label for="Aspirations">Aspirations</label> </br>
    <input type="text" name="Aspirations"> </br>

    <label for="Touchstones">Touchstones:</label> </br>
    <input type="text" name="Touchstones"> </br>

    <label for="Merits">Merits:</label></br>
    <input type="text" name="Merits"> </br>

    <label for="Needle">Needle:</label></br>
    <input type="text" name="Needle"> </br>

    <label for="Thread">Thread:</label></br>
    <input type="text" name="Thread"> </br>   

    ​<input type="submit" value="Submit">

        </form>
    </main>
</section>

</body>
</html>