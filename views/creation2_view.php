
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
<!-- the name is repeated each time, to ensure a single variable can be used to retrieve data later on-->
<!-- the name is repeated to avoid having session variables exist early in the process, as it could interfere with later logic-->
        <section class="creation">
        <h2>
            Repeat your character's name
        </h2>
        <form method ="post" action =../model/creation2_model.php>

        Name
        <input type="text" name="Name">
    <h2>
        Next, add your ability dots!
    </h2>

    <h3>
        Physical
    </h3>
        Athletics
        <select id="Athletics" name="Athletics">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Brawl
        <select id="Brawl" name="Brawl">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Drive
        <select id="Drive" name="Drive">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Firearms
        <select id="Firearms" name="Firearms">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>
        
        Larceny
        <select id="Larceny" name="Larceny">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        
        Stealth
        <select id="Stealth" name="Stealth">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        
        Survival
        <select id="Survival" name="Survival">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        
        Weaponry
        <select id="Weaponry" name="Weaponry">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>
    <h3>
        Social
    </h3>
        Animal Ken
        <select id="AnimalKen" name="AnimalKen">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Empathy
        <select id="Empathy" name="Empathy">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Expression
        <select id="Expression" name="Expression">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>
        
        Intimidation
        <select id="Intimidation" name="Intimidation">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Persuasion
        <select id="Persuasion" name="Persuasion">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Socialize
        <select id="Socialize" name="Socialize">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Streetwise
        <select id="Streetwise" name="Streetwise">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Subterfuge
        <select id="Subterfuge" name="Subterfuge">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>


    <h3>
        Mental
    </h3>

        Academics
        <select id="Academics" name="Academics">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Computer
        <select id="Computer" name="Computer">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Crafts
        <select id="Crafts" name="Crafts">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>
        
        Investigation
        <select id="Investigation" name="Investigation">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        Medicine
        <select id="Medicine" name="Medicine">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        
        Occult
        <select id="Occult" name="Occult">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>


        Politics
        <select id="Politics" name="Politics">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

        
        Science
        <select id="Science" name="Science">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
        </select></br>

    <h3>
        Select your Seeming Regalia, and a second favoured Regalia
    </h3>

    Seeming Regalia
    <select id="SeemingReg" name="SeemingReg">
        <option value=Sword>Sword</option>
        <option value=Crown>Crown</option>
        <option value=Jewels>Jewels</option>
        <option value=Mirror>Mirror</option>
        <option value=Shield>Shield</option>
        <option value=Steed>Steed</option>
        </select></br>

    Favoured Regalia
    <select id="FaveReg" name="FaveReg">
        <option value=Sword>Sword</option>
        <option value=Crown>Crown</option>
        <option value=Jewels>Jewels</option>
        <option value=Mirror>Mirror</option>
        <option value=Shield>Shield</option>
        <option value=Steed>Steed</option>
        </select></br>
        ​<input type="submit" value="Submit">

        </form>
        </section>
    </main>

</body>
</html>