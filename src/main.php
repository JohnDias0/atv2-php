<?=
   "
    <html>
    <head>
        <title>Meu Primeiro Site</title>
    </head>
    <body>
        <header>
            <h1>Bem-vindo ao Meu Site</h1>
        </header>
        
        <main>
            <h2>Sobre Nós</h2>
            <p>Somos uma pequena empresa dedicada a fornecer soluções web incríveis.</p>
        </main>
        
        <footer>"
?>

<?php
    include_once __DIR__."/../vendor/autoload.php";
    use App\model\Pessoa;

    $p1 = new Pessoa("Iguinho", 11998957734);
    $p2 = new Pessoa("Jonathan", 171998671456);
    $p3 = new Pessoa("Jhonas", 15987327654);
    $p4 = new Pessoa("Mayke", 11906780932);
    $p5 = new Pessoa("João", 16965431209);
    $p6 = new Pessoa("Luís", 19943285672);

    echo $p1 -> nome;
    echo("</br>");
    echo $p2 -> nome;
    echo("</br>");
    echo $p3 -> nome;
    echo("</br>");
    echo $p4 -> nome;
    echo("</br>");
    echo $p5 -> nome;
    echo("</br>");
    echo $p6 -> nome;
    echo("</br>");

   $p6->falar();
    echo("<p>&copy; 2023 Meu Site. Todos os direitos reservados.</p>
        </footer>
    </body>
    </html>
    ")
?>
