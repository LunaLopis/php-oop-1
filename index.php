<?php
class Movie {
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getInfo() {
        return "Title: " . $this->title . ", Genre: " . $this->genre . ", Year: " . $this->year;
    }
}

$movie1 = new Movie("The Lord of the Ring", "high fantasy", 2001);
$movie2 = new Movie("Dune", "Sci-Fi", 2021);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">   
    <title>Document</title>
</head>
<body>
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                         <div class="movie-list d-flex">
                                <div class="p-5">
                                    <ul class="list-unstyled">
                                        <li> <?php echo $movie1->title ?> </li>
                                        <li> <?php echo $movie1->genre ?> </li>
                                        <li> <?php echo $movie1->year ?> </li>
                                    </ul>
                                </div>
                                <div class="p-5">
                                <ul class="list-unstyled">
                                        <li> <?php echo $movie2->title ?> </li>
                                        <li> <?php echo $movie2->genre ?> </li>
                                        <li> <?php echo $movie2->year ?> </li>
                                    </ul>
                                </div>
                         </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>