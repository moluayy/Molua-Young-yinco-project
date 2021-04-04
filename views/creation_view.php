
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
            Choose Seeming and Court, then input Kith. Finally add your character's name!
        </h2>
        <form method ="post" action =../model/creation1_model.php>
       Seeming
        <select id="Seeming" name="Seeming">
        <option value="Fairest">Fairest</option>
        <option value="Beast">Beast</option>
        <option value="Elemental">Elemental</option>
        <option value="Darkling">Darkling</option>
        <option value="Ogre">Ogre</option>
        <option value="Wizened">Wizened</option>
        </select> </br>
        Court 
        <select id="Court" name="Court">
        <option value="Spring">Spring</option>
        <option value="Summer">Summer</option>
        <option value="Autumn">Autumn</option>
        <option value="Winter">Winter</option>
        <option value="Unaligned">Unaligned</option>
        </select></br>
        <label for="Kith">Kith:</label>
        <input type="text" name="Kith">
        </br>
        Wyrd
        <select id="Wyrd" name="Wyrd">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select></br>
        <label for="Name">Name:</label>
        <input type="text" name="Name">
    <h2>
        Next, add your attribute dots!
    </h2>

    <h3>
        Physical
    </h3>
    
    <label for="Strength">Strength:</label>
        <select id="Strength" name="Strength">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        <label for="Dexterity">Dexterity:</label>
        <select id="Dexterity" name="Dexterity">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        <label for="Stamina">Stamina:</label>
        <select id="Stamina" name="Stamina">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>
    <h3>
        Social
    </h3>
        Presence
        <select id="Presence" name="Presence">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Manipulation
        <select id="Manipulation" name="Manipulation">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Composure
        <select id="Composure" name="Composure">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

    <h3>
        Mental
    </h3>

        Intelligence
        <select id="Intelligence" name="Intelligence">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Wits
        <select id="Wits" name="Wits">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Resolve
        <select id="Resolve" name="Resolve">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>
        ​<input type="submit" value="Submit">

        </form>
        </section>
    </main>
</body>
</html>