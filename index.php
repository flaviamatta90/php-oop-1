<?php

class User {
    public $name;
    public $lastname;
    public $adress;
    public $phoneNumber;
    public $email;
    public $password;


    public function __construct($_name, $_lastname, $_email, $_password){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
    }
}

$user1 = new User( "Flavia", "Matta", "ssskf.gmail.com", "123456");

$user2 = new User("Franco", "Neri", "sfhyj.gmail.com","789101");

$user3 = new User("Bianca", "Verdi", "ooiuy.gmail.com","112131");

$user4 = new User("Mario", "Rossi", "kutg.gmail.com", "415161");

$user5 = new User("Aldo", "Gialli", "werrr.gmail.com", "718192");

$users = [$user1, $user2, $user3, $user4, $user5];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php foreach($users as $user){?>
    <ul>
        <li> <strong>NOME: </strong> <?php echo $user->name; ?></li>
        <li> <strong>COGNOME: </strong> <?php echo $user->lastname; ?></li>
        <li> <strong>EMAIL: </strong> <?php echo $user->email; ?></li>
        <li> <strong>PASSWORD: </strong> <?php echo $user->password; ?></li>
    </ul>
    <?php } ?>
</body>
</html>