<?php
    class Movie {
        public $title;
        public $year;
        public $duration;
        public $genre;


        function __construct($_title, $_year, $_duration, $_genre_id){
            $this->title = $_title;
            $this->year = $_year;
            $this->duration = $_duration;
            $this->genre = $this->getGenre($_genre_id);
        }

        public function getGenre($_id){
            switch($_id){
                case 1:
                    return 'Avventura';
                case 2: 
                    return 'Drammatico';
                case 3: 
                    return 'Thriller';
                case 4: 
                    return 'Commedia';
                case 5: 
                    return 'Sci-Fi';
                default:
                    return 'Altro';
            }
        }
    }

    $ritorno_al_futuro = new Movie('Ritorno al Futuro', 1975, 120, 5);
    echo ('Titolo: ' . $ritorno_al_futuro->title . '</br>');
    echo ('Anno: ' . $ritorno_al_futuro->year . '</br>');
    echo ('Durata: ' . $ritorno_al_futuro->duration . ' Minuti' . '</br>');
    echo ('Genere: ' . $ritorno_al_futuro->genre . '</br>');

    echo '</br>';
    echo '</br>';

    $black_adam = new Movie('Black Adam', 2022, 124, 0);
    echo ('Titolo: ' . $black_adam->title . '</br>');
    echo ('Anno: ' . $black_adam->year . '</br>');
    echo ('Durata: ' . $black_adam->duration . ' Minuti' . '</br>');
    echo ('Genere: ' . $black_adam->genre . '</br>');
?>