<?php
//php fait toujours reference au meme object dans la memoire
// $date = new DateTime;
// echo $date->format('d/m/Y').PHP_EOL;
// $newDate =$date->modify('+1 day');

// echo $date->format('d/m/Y').PHP_EOL;
// echo $newDate->format('d/m/Y').PHP_EOL;

// $formateDate = $date->modify('+1 day')->format('d/m/Y');
// echo $formateDate.PHP_EOL;
//2
// $date = new DateTimeImmutable(); //immutable permet de ne pas modifier l'objet
// $newDate = $date->modify('+1 day');

// echo $date->format('d/m/Y').PHP_EOL;
// echo $newDate->format('d/m/Y').PHP_EOL;
//3
// $s = '
//     {
//     "date":"2021-03-23 07:35:44.011207",
//     "timezone_type":3,
//     "timezone":"Europe/Paris"
//     }
// ';
// //Php est tres permisif, il permet aux variables de
// // changer de type au cours de leurs vie dans le script
// // donc pour eviter des erreur, lorsqu'une class n'est
// // pas specifiee, il utilise la class stdclass
// var_dump(json_decode($s));

//Créez vos propres classes

// declare(strict_types=1);//pour forcer le typage des variables
// class User 
// {
//  public float $longitude = 0.0;
// }
// $user = new User();
// // $user->longitude = "48.8534";
// var_dump($user);

// class Tablier
// {
//     function __construct(public int $longueur, public int $largeur)
//     {
//     }
// }

// class Pont
// {
//     function __construct(private string $name, private Tablier $tablier)
//     {
//     }

    

//     public function __toString(): string
//     {
//         return sprintf(
//             'Le pont %s a un tablier de %s m de longueur et %s m de largeur',
//             $this->name,
//             $this->tablier->longueur,
//             $this->tablier->largeur
//         );
//     }
// }

// $pont = new Pont('Pont Ngaliema', new Tablier(23, 45));
// $pont1 = clone $pont;
// //echo $pont1;


// class A
// { 
//     protected int $model = 33; 
//     public function setModel(int $model): void 
//     { 
//         $this->model = $model; 
//     } 

//     public function getModel(): int 
//     { 
//         return $this->model; 
//     }
// }

// class B extends A
// { 
//     protected int $model = 42; 

//     public function setModel(int $model): void 
//     { 
//         $this->model = $model;
//     } 

//     public function getModel(): int { 
//         return $this->model; 
//     }
// }

// $b = new B();
// $b->setModel(806);
// echo $b->getModel();

// $s = '
// {
//     "date":"2021-03-23 07:35:44.011207",
//     "timezone_type":3,
//     "timezone":"Europe/Paris"
// }
// ';

// var_dump(json_decode($s));

// use Classes\static_beding\ChildClass;
// use Classes\static_beding\ParentClass;



// $parent =new ParentClass();
// $child = new ChildClass();

// var_dump(ParentClass::getName(), ChildClass::getName());

// use Classes\Traits\ExpressoMaker;
// use Classes\Traits\IrishCoffee;

// $expresso = new ExpressoMaker();
// $irish = new IrishCoffee();

// var_dump(
//     $expresso->makeExpresso(),
//     $irish->makeIrishCoffee()
// );

// use Classes\Exceptions\Login;
// use Classes\Exceptions\User;
// use Classes\Exceptions\UserNotVerifiedException;

// require "./vendor/autoload.php";

// $user = new User('patrick', "123456");
// $login = new Login($user);

// try {
//     var_dump($login->login());
// } catch (UserNotVerifiedException $e) {
//     echo $e->getMessage().', on the line'.$e->getLine().' in the file'.$e->getFile();
// }

use Classes\Router\Router;

require "./vendor/autoload.php";

echo 'home';

$router = new Router();

$router->register('/', function() {
    return 'HomePage';
});

$router->register('contact', function() {
    return 'Contact Page';
});

echo '<pre>';
var_dump($router);
echo '</pre>';

//$router->resolve();
