<html>
    <head>
        <title>Strings</title>
    </head>
    <body>
        <?php
        $first_name = 'Larry';
        $last_name = 'Ullman';
        $book = 'PHP and MySQL for Dynamic Web Sites';

        $author = $first_name . ' ' . $last_name;

        echo "The book <i>$book</i> was written by $author.";
        ?>
    </body>
</html>