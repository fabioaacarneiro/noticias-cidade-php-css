<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Notícias Cidade</title>
</head>

<body class="home">
    <div id="container">
        <div id="top">
            <h1 class="logo">Notícias Cidade</h1>
            <ul id="navbar">
                <li class="first"><a id="home" href="index.php">Home</a></li>
                <li><a id="brasil" href="brasil.php">Brasil</a></li>
                <li><a id="internacional" href="internacional.php">Internacional</a></li>
                <li><a id="economia" href="economia.php">Economia</a></li>
                <li><a id="saude" href="saude.php">Saúde</a></li>
                <li><a id="ciencia" href="ciencia.php">Ciência</a></li>
                <li><a id="fotos" href="fotos.php">Fotos</a></li>
            </ul>
        </div>
        <div id="content">
            <div id="primary"><div class="box">
                    <h2>Entrevistas</h2>
                    <div class="box-content">
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo
                    </div>
                </div></div>
            <div id="secondary"><div class="box">
                    <h2>Entrevistas</h2>
                    <div class="box-content">
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo<br>
                        Conteúdo
                    </div>
                </div></div>
            <div id="left-menu">
                <div class="box">
                    <h2>Entrevistas</h2>
                    <div class="box-content">
                        <ul>
                            <li><a href="">José Almeida</a></li>
                            <li><a href="">Felipe Silva</a></li>
                            <li><a href="">Renato Rodrigues</a></li>
                            <li><a href="">Abelardo Silveira</a></li>
                            <li><a href="">André Carlos</a></li>
                            <li><a href="">Márcio Mello</a></li>
                            <li><a href="">João Pedro</a></li>
                            <li><a href="">Fernando Weiss</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box">
                    <h2>News</h2>
                    <div class="box-content">
                        <form action="">
                            <div>
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="E-mail">
                            </div>
                            <div>
                                <input class="submit" type="submit" value="Cadastrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="container-footer">
        <div id="footer">
            &copy; Copyright <?php echo date('Y') ?> -  Notícias Cidade por Fabio Carneiro 
        </div>
    </footer>
</body>

</html>