<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

<?php
class Movie {
   public $genre;
   public $title;
   public $duration;
   private $rating;
   
   function __construct($_genre, $_title, $_duration, $rating){
        $this->genre = $_genre;
        $this->title = $_title;
        $this->duration = $_duration;
        $this->setRating($rating);
        
   }
   
   public function setRating($rating){
    if($rating >= 3 && $rating < 6){
        $this->rating = 'Buono';
    }elseif($rating === 3){
        $this->rating = 'Mediocre';
    }elseif($rating < 3 ){
       $this->rating = 'Scarso'; 
    }
   }

   public function getRaiting(){
    return $this->rating;
   }


};

$troy= new Movie('action', 'Troy', '120 min', 5);
var_dump($troy);

$Snatch= new Movie('action', 'The Snatch', '90 min', 3);
var_dump($Snatch);