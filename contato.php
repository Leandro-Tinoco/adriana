<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>
        WMA - Arquitetura Bin System
    </title>

    <?php include "include-head.php"; ?>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/contato.css">
</head>

<body>
    <?php include "topo-interno.php"; ?>

    <main class="conteudo-principal">
        <!--<section id="banner-topo">
			<img src="imagens/hero-topo.png">
		</section>-->

        <section id="contatopagina">
            <div class="container-fluid no-gutters">
                <div class="top-contato">
                    <h1 class="titulo-servicos col-xs-12 col-sm-12">
                        Contato
                    </h1>
                </div>
            </div>

            <div class="container">
                <div class="row linhaabaixoprinc">
                    <div class="col-xs-12 col-sm-12">
                        <h2 class="contato-titulo">
                            ONDE ESTAMOS?
                        </h2><?php 

                $cont = new contato($con);

                $parametros = "Where cod_contato = '1'";
                $cont->busca($parametros);

                ?>
                        <span class="info-ende">
                            <?php echo $cont->qry->data["endereco"]; ?><br>
                            <?php echo $cont->qry->data["email"]; ?><br>
                            <?php echo $cont->qry->data["telefone"]; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.020111901963!2d-43.15854598506226!3d-22.503428585218366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99a80d0e65e857%3A0xf8422b825c9e70f9!2sRua+Waldemar+Ferreira+da+Silva%2C+900+-+Caxambu%2C+Petr%C3%B3polis+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1548164573614" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


                    </div>

                </div>
            </div>

        </section>

        <section class="formulariodecontato">
            <div class="container">

                <div class="row linhaabaixosegond">
                    <div class="col-xs-12 col-sm-4">
                        <h2 class="contato-titulo">
                            ONDE ESTAMOS?
                        </h2>
                        <span class="contato-info">
                            Ficou com alguma dúvida? <br>
                            Preencha o formulário e entre em contato conosco
                        </span>


                    </div>
                    <div class="col-xs-12 col-sm-8">


                        <form action="enviar.php" method="post" name="form-contato" id="form-contato">



                            <input type="text" placeholder="Nome:" required name="nome" id="nome" class="form-contato-wma">

                            <input type="email" placeholder="E-Mail:" required name="email" id="email" class="form-contato-wma">

                            <input type="telefone" placeholder="Telefone" name="telefone" id="telefone" class="form-contato-wma">

                            <textarea name="mensagem" id="msn" placeholder="Mensagem:"></textarea>

                            <input type="submit" value="Enviar" name="BTEnvia" id="enviar">

                        </form>
                    </div>
                </div>
            </div>
        </section>

        




    </main>

    <?php include "rodape.php"; ?>
</body>

</html>
