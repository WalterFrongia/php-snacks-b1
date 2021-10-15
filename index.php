<!-- SNAK 1 -->
<!-- 
    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema.
-->


<!-- SNAK 2 -->
<!-- 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
    che mail contenga un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" 
-->


<!-- SNAK 3 -->

<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array
    di post associati a quella data. Stampare ogni data con i relativi post.
    Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z 
-->

<?php

    $posts = [
        '11/10/2021' => [
            [
                'title' => "post 1",
                'author' => "Elon Musk",
                'text' => "testo post 1"
            ],
        ],
        '13/10/2021' => [
            [
                'title' => "post 2",
                'author' => "Elon Musk",
                'text' => "testo post 2"
            ],
        ],
        '14/10/2021' => [
            [
                'title' => "post 3",
                'author' => "Elon Musk",
                'text' => "testo post 3"
            ],
        ],
    ];

?>


<h1>Blog post</h1>



<?php
foreach($posts as $chiave => $articles) {
        // echo $chiave;
        // var_dump($articles);
    ?>
    <?php
    foreach($articles as $chiave => $element){
            // echo $chiave;
            // var_dump($element);
        ?>
        <h3> <?php echo $element['author']; ?> </h3>
    <?php }?>
<?php } ?>



<!-- SNAK 4 -->

<!-- Creare un array con 15 numeri casuali, 
    tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta 
-->

<?php
    $randomNumbers = [];

?>


<!-- SNAK 5 -->

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A
    Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. 
-->

<h1>SNACK 5</h1> 

<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<div id="teachers">

    <?php
    foreach($db as $chiave => $info){
        echo $chiave;
        // var_dump($info);
        ?>
        <?php
        foreach($info as $chiave => $element){
            // echo $chiave;
            // var_dump($element);
            ?>
            <p> <?php echo $element['name']; ?> </p>
            <p> <?php echo $element['lastname']; ?>  </p>
        <?php } ?>
    <?php } ?>
</div>

<div id="pm">
    
</div>


<!-- SNAK 6 -->

<!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $classe =[
        'alunni'=>[
            'name' => 'Giacomo',
            'surname' => 'Rossi',
            'voti' => [5,6,7,8,9], 
        ],
        [
            'name' => 'Giacomo',
            'surname' => 'Rossi',
            'voti' => [5,6,7,8,9], 
        ],
        [
            'name' => 'Giacomo',
            'surname' => 'Rossi',
            'voti' => [5,6,7,8,9], 
        ],
        [
            'name' => 'Giacomo',
            'surname' => 'Rossi',
            'voti' => [5,6,7,8,9], 
        ],
    ];
?>

<h1>Studenti</h1>


<?php

    foreach($classe as $chiave => $student){
        // echo $chiave;
        // var_dump($student);    
    ?>
    <p><?php echo $student ['name'] ?></p>

<?php } ?>

<!-- SNAK 7 -->

<!--  
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. PrenderSe il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->