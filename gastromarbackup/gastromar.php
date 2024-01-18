<?php

include_once('config.php');

function findMesa($mesa, $data){
    foreach($data as $row){
        if($row[12]==$mesa){
            return $row[13];
        }
    }
    return false;
}

$data = array();

if(isset($_GET['date'])){
    $date = $_GET['date'];
    $perido = $_GET['periodo'];
    $query = "SELECT * FROM usuarios WHERE datareserva='".$date."' AND (disponibilidade='CONFIRMADA' OR disponibilidade='EM ANÁLISE') AND periodo='".$perido."'";
    $result = $conexao->query($query);
    $data = $result->fetch_all();
}

if(isset($_POST['submit'])){

$nome = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['number'];
$horario = $_POST['hora'];
$datareserva = $_POST['data'];
$mesa = $_POST['mesa'];
$adultos = $_POST['nadultos'];
$criancas = $_POST['ncrianca'];
$brisa = $_POST['brisa'];
$pet = $_POST['pet'];
$restricao = $_POST['restalimentar'];
$ocasiaoespecial = $_POST['especial'];
$periodo = $_POST['periodo'];

echo $periodo;

$datareserva_formatada = date('d-m-Y', strtotime($datareserva));

$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,celular,horario, datareserva, mesa, adultos,criancas,brisa,pet,restricao,ocasiaoespecial,periodo) VALUES('$nome','$email','$celular','$horario', '$datareserva', '$mesa','$adultos','$criancas','$brisa','$pet','$restricao','$ocasiaoespecial','$periodo')");

if ($result){
    header("Location: mensagem.php");
    exit;
}

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gastromar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gastromar</title>
</head>
<body>

    <header class="cabecalho">
        <img class="cabecalho-img" src="img/GM2 SVG.svg" alt="Logo Gastromar">
        <nav class="cabecalho-menu">
            <a href="https://gastromarparaty.com/restaurante-emporio/">restaurante & empório</a>
            <a href="https://gastromarparaty.com/sempressa/">sem pressa</a>
            <a href="https://gastromarparaty.com/catering/">catering</a>
            <a href="https://gastromarparaty.com/perfil/">perfil</a>
            <a href="https://gastromarparaty.com/fotos/">fotos</a>
            <a href="https://gastromarparaty.com/contato/">contato</a>
        </nav>
    </header> 

    <main class="conteudo1">
        <div class="slider">
            <img src="carrossel-img/restaurante18h.jpg" alt="" class="slide-img">
            <img src="carrossel-img/refeicao2.jpg" alt="" class="slide-img">
            <img src="carrossel-img/frente.jpg" alt="" class="slide-img">
        </div>
    </main>

    <main class="conteudo2">

        <div class="icones">
            <div class="icone">
                <h2>EM TERRA</h2>
                <h1>Restaurante & Empório</h1>
                <img src="img/gm_emporio_150.jpg" alt="">
                <p>Cozinha de produto, com ingredientes locais, sazonais e orgânicos. Take-out para seu passeio de barco.</p>
            </div>
            <div class="icone">
                <h2>AO MAR</h2>
                <h1>Sem Pressa</h1>
                <img src="img/gm_sempressa_150.jpg" alt="">
                <p>Experiência única na nossa trainera Gourmet “Sem Pressa”.</p>
            </div>
            <div class="icone">
                <h2>EM QUALQUER LUGAR</h2>
                <h1>Catering</h1>
                <img src="img/gm_catering_150.jpg" alt="">
                <p>Com serviço completo para eventos em terra, no mar e em qualquer lugar</p>
            </div>
        </div>


        <!--
        <div class="text2">
            <div class="foto-texto">
                <img src="img/gisela1.jpg" alt="">
                <div class="texto">
                    <h1>Gisela Schmitt</h1>
                    <p>A chef Gisela Schmitt faz uma cozinha de produto, priorizando os ingredientes locais, sazonais e orgânicos. Com técnicas modernas, como o sous-vide e a desidratação, mas com a alma de receitas confortáveis ao paladar de quem entende que o luxo está no frescor e na simplicidade da combinação certa no cardápio.</p>
                </div>               
            </div>
            <div class="foto-texto">
                <div class="texto">
                    <h1>Gastromar</h1>
                    <p>Valoriza, além do produto, o aprendizado de sua equipe, direcionando o poder da cozinha na mão de todos os cozinheiros serem responsáveis pelo manuseio, elaboração e apresentação do cardápio, influência vinda de grandes restaurantes como Noma, na Dinamarca e Saison, na California. A equipe participa inclusive da pescaria dos frutos do mar servidos fresquíssimos aos clientes.</p>                   
                </div>
                <img src="img/restaurante_gastromar18-1.jpg" alt="">
            </div>
        </div>  -->

        <div class="testegastro">

        <div class="container-imagens">
                <div class="conjunto1">
                    <img src="img/restaurante_gastromar1-1.jpg" id="img1" alt="">
                    <img src="img/restaurante_gastromar2-1.jpg" id="img2" alt="">
                    <img src="img/restaurante_gastromar3-1.jpg" id="img3" alt="">
                    <img src="img/restaurante_gastromar4-1.jpg" id="img4" alt="">
                    <img src="img/restaurante_gastromar5-1.jpg" id="img5" alt="">
                    <img src="img/restaurante_gastromar7-1.jpg" id="img6" alt="">
                    <img src="img/restaurante_gastromar8-1.jpg" id="img7" alt="">
                </div>
                <div class="conjunto2">
                    <img src="img/restaurante_gastromar9-1.jpg" id="img8" alt="">
                    <img src="img/restaurante_gastromar10-1.jpg" id="img9" alt="">
                    <img src="img/restaurante_gastromar18-1.jpg" id="img10" alt="">
                    <img src="img/restaurante_gastromar12-1.jpg" id="img11" alt="">
                    <img src="img/restaurante_gastromar13-1.jpg" id="img12" alt="">
                </div>
            </div>

            <div class="textoo">
                <div class="texto3">
                    <h1>Restaurante</h1>
                    <p>A chef Gisela Schmitt faz uma cozinha de produto, priorizando os ingredientes locais, sazonais e orgânicos. Com técnicas modernas, como o sous-vide e a desidratação, mas com a alma de receitas confortáveis ao paladar de quem entende que o luxo está no frescor e na simplicidade da combinação certa no cardápio.</p>
                </div>
                <div class="texto3">
                    <p>Valoriza, além do produto, o aprendizado de sua equipe, direcionando o poder da cozinha na mão de todos os cozinheiros serem responsáveis pelo manuseio, elaboração e apresentação do cardápio, influência vinda de grandes restaurantes como Noma, na Dinamarca e Saison, na California. A equipe participa inclusive da pescaria dos frutos do mar servidos fresquíssimos aos clientes.</p>
                </div>
                <div class="texto3">
                    <p>O bar oferece uma carta de gin&tônicas preparadas com infusões artesanais, além de diversas opções clássicas, difíceis de achar similares na região, como um bom Manhatan preparado com o original Canadian Club e um perfeito Dry Martini com gotas de Noilly Prat.</p>
                </div>
                <div class="texto3">
                    <p>Ambiente elegante, despretencioso, confortável e com uma vista maravilhosa da Baía de Paraty.</p>
                </div>
                <div class="texto3">
                    <h1>Empório</h1>
                    <p>O Empório oferece uma adega completa de vinhos, além de snacks e iguarias para o passeio de barco, como bottarga, patê de foie e diversos itens do cardápio embalados para levar.</p>
                </div>
                <div class="texto3">
                    <h1>Música ao vivo</h1>
                    <p>Nos finais de semana, a casa conta com atrações musicais ao vivo, preferencialmente jazz e blues.  Faça sua reserva com antecedência, pois o local é concorrido e prioriza os clientes da Marina, além de ser muito solicitado para eventos.</p>
                </div>
                <div class="texto3">
                    <h1>Espaço Kids</h1>
                    <p>Além do cardápio kids disponível, nosso espaço conta com um quiosque anexo com brinquedos disponíveis.</p>
                </div>
                <button>Lorem Ipsum</button>
            </div>

        </div>
        

        <div class="infos">
            <div class="info">
                <h1>Reservas</h1>
                <p>Faça sua reserva agora mesmo em nosso sistema abaixo, ou se preferir, reserve manualmente, fique a vontade para nos mandar mensagem em nosso whatsapp <a href="#">(24) 99844-3788</a></p>
                <button id="reservarBtn">Reserve agora</button>
            </div>
            <div class="info">
                <h1>Endereço</h1>
                <p>BR101 km 578 - Boa Vista, Paraty - State of Rio de Janeiro, 23970-000</p>
                <button>Mapa</button>
            </div>
            <div class="info">
                <h1>Eventos</h1>
                <p>Consulte opções personalizadas para o seu evento no Restaurante Gastromar, na Marina Porto Imperial, para até 250 convidados!</p>
                <button>Contato</button>
            </div>
        </div>

    </main>

    
    <main class="conteudo3">
        <div class="overlay"></div>
        <img src="img/dentro.jpg" alt="">

        <div class="texto-sobreposto">
            <h1>Reserve sua mesa</h1>
            <p>Localizado na Marina Porto Imperial, Paraty, RJ, Brasil, o Restaurante Gastromar, fundado em dezembro de 2017, foi uma consequência inevitável do sucesso do serviço de Catering criado em 2014.</p>
        </div>

        <div class="data-periodo">
        <div class="data">
            <label for="data-reserva">Data da reserva:</label>
            <input type="date" name="data-reserva" id="ipt-data" value="<?php if(isset($_GET['date'])){echo $_GET['date'];} ?>" required>
        </div>

        <div class="periodo">
            <label for="periodo">Periodo da reserva:</label>
            <select name="periodo" id="ipt-periodo" required>
                <option value="" disabled <?php if(!isset($_GET['periodo'])){echo "selected";} ?> hidden>Selecione</option>
                <option value="Café da manhã" <?php if(isset($_GET['periodo']) && $_GET['periodo']=='Café da manhã'){echo "selected";} ?>>Café da manhã</option>
                <option value="Almoço" <?php if(isset($_GET['periodo']) && $_GET['periodo']=='Almoço'){echo "selected";} ?>>Almoço</option>
                <option value="Jantar" <?php if(isset($_GET['periodo']) && $_GET['periodo']=='Jantar'){echo "selected";} ?>>Jantar</option>
            </select>
        </div>

        <button class="btn-data-periodo" onclick="handleDate(event)"><i class="fa-solid fa-martini-glass"></i>Buscar</button>
    </div>

    </main>

    <main class="conteudo4">
    <div class="conteudo4-left">

        <div class="escolha">
            <h2>Escolha sua mesa</h2>
        </div>

            <div class="mapa">
                <img src="img/H4.svg" alt="Mapa de mesas">
                <div class="mesas">
                    <?php

                        if(findMesa('Mesa 1',$data) != false){
                            $mesa1 = findMesa('Mesa 1',$data);
                            if($mesa1 == 'Confirmada'){
                                echo '<img src="img/1.svg" class="mesa-ocupada" alt="Mesa 1" id="mesa1" data-mesa-id="1">';
                            }else{
                                echo '<img src="img/1.svg" class="mesa-analise" alt="Mesa 1" id="mesa1" data-mesa-id="1">';
                            }
                        }else{
                            echo '<img src="img/1.svg" alt="Mesa 1" id="mesa1" data-mesa-id="1">';
                        }

                        if(findMesa('Mesa 2',$data) != false){
                            $mesa2 = findMesa('Mesa 2' ,$data);
                            if($mesa2 == 'Confirmada'){
                                echo '<img src="img/9.svg" class="mesa-ocupada" alt="Mesa 2" id="mesa2" data-mesa-id="2">';
                            }else{
                                echo '<img src="img/9.svg" class="mesa-analise" alt="Mesa 2" id="mesa2" data-mesa-id="2">';
                            }
                        }else{
                            echo '<img src="img/9.svg" alt="Mesa 2" id="mesa2" data-mesa-id="2">';
                        }

                        if(findMesa('Mesa 3',$data) != false){
                            $mesa3 = findMesa('Mesa 3' ,$data);
                            if($mesa3 == 'Confirmada'){
                                echo '<img src="img/9.svg" class="mesa-ocupada" alt="Mesa 3" id="mesa3" data-mesa-id="3">';
                            }else{
                                echo '<img src="img/9.svg" class="mesa-analise" alt="Mesa 3" id="mesa3" data-mesa-id="3">';
                            }                       
                        }else{
                            echo '<img src="img/9.svg" alt="Mesa 3" id="mesa3" data-mesa-id="3">';
                        }

                        if(findMesa('Mesa 4',$data) != false){
                            $mesa4 = findMesa('Mesa 4' ,$data);
                            if($mesa4 == 'Confirmada'){
                                echo '<img src="img/9.svg" class="mesa-ocupada" alt="Mesa 4" id="mesa4" data-mesa-id="4">';
                            }else{
                                echo '<img src="img/9.svg" class="mesa-analise" alt="Mesa 4" id="mesa4" data-mesa-id="4">';
                            }                           
                        }else{
                            echo'<img src="img/9.svg" alt="Mesa 4" id="mesa4" data-mesa-id="4">';
                        }

                        if(findMesa('Mesa 5',$data) != false){
                            $mesa5 = findMesa('Mesa 5' ,$data);
                            if($mesa5 == 'Confirmada'){
                                echo'<img src="img/5.svg" class="mesa-ocupada" alt="Mesa 5" id="mesa5" data-mesa-id="5">';
                            }else{
                                echo'<img src="img/5.svg" class="mesa-analise" alt="Mesa 5" id="mesa5" data-mesa-id="5">';
                            }
                        }else{
                            echo'<img src="img/5.svg" alt="Mesa 5" id="mesa5" data-mesa-id="5">';
                        }

                        if(findMesa('Mesa 6',$data) != false){
                            $mesa6 = findMesa('Mesa 6' ,$data);
                            if($mesa6 == 'Confirmada'){
                                echo'<img src="img/6.svg" class="mesa-ocupada" alt="Mesa 6" id="mesa6" data-mesa-id="6">';
                            }else{
                                echo'<img src="img/6.svg" class="mesa-analise" alt="Mesa 6" id="mesa6" data-mesa-id="6">';
                            }
                        }else{
                            echo'<img src="img/6.svg" alt="Mesa 6" id="mesa6" data-mesa-id="6">';
                        }

                        if(findMesa('Mesa 7',$data) != false){
                            $mesa7 = findMesa('Mesa 7' ,$data);
                            if($mesa7 == 'Confirmada'){
                                echo'<img src="img/7.svg" class="mesa-ocupada" alt="Mesa 7" id="mesa7" data-mesa-id="7">';
                            }else{
                                echo'<img src="img/7.svg" class="mesa-analise" alt="Mesa 7" id="mesa7" data-mesa-id="7">';
                            }
                        }else{
                            echo'<img src="img/7.svg" alt="Mesa 7" id="mesa7" data-mesa-id="7">';
                        }

                        if(findMesa('Mesa 8',$data) != false){
                            $mesa8 = findMesa('Mesa 8' ,$data);
                            if($mesa8 == 'Confirmada'){
                                echo'<img src="img/8.svg" class="mesa-ocupada" alt="Mesa 8" id="mesa8" data-mesa-id="8">';
                            }else{
                                echo'<img src="img/8.svg" class="mesa-analise" alt="Mesa 8" id="mesa8" data-mesa-id="8">';
                            }                           
                        }else{
                            echo'<img src="img/8.svg" alt="Mesa 8" id="mesa8" data-mesa-id="8">';
                        }

                        if(findMesa('Mesa 9',$data) != false){
                            $mesa9 = findMesa('Mesa 9' ,$data);
                            if($mesa9 == 'Confirmada'){
                                echo'<img src="img/9.svg" class="mesa-ocupada" alt="Mesa 9" id="mesa9" data-mesa-id="9">';
                            }else{
                                echo'<img src="img/9.svg" class="mesa-analise" alt="Mesa 9" id="mesa9" data-mesa-id="9">';
                            }
                        }else{
                            echo'<img src="img/9.svg" alt="Mesa 9" id="mesa9" data-mesa-id="9">';
                        }

                        if(findMesa('Mesa 10',$data) != false){
                            $mesa10 = findMesa('Mesa 10' ,$data);
                            if($mesa10 == 'Confirmada'){
                                echo'<img src="img/10.svg" class="mesa-ocupada" alt="Mesa 10" id="mesa10" data-mesa-id="10">';
                            }else{
                                echo'<img src="img/10.svg" class="mesa-analise" alt="Mesa 10" id="mesa10" data-mesa-id="10">';
                            }
                        }else{
                            echo'<img src="img/10.svg" alt="Mesa 10" id="mesa10" data-mesa-id="10">';
                        }

                        if(findMesa('Mesa 11', $data) != false){
                            $mesa11 = findMesa('Mesa 11' ,$data);
                            if($mesa11 == 'Confirmada'){
                                echo'<img src="img/11.svg" class="mesa-ocupada" alt="Mesa 11" id="mesa11" data-mesa-id="11">';
                            }else{
                                echo'<img src="img/11.svg" class="mesa-analise" alt="Mesa 11" id="mesa11" data-mesa-id="11">';
                            }
                        }else{
                            echo'<img src="img/11.svg" alt="Mesa 11" id="mesa11" data-mesa-id="11">';
                        }

                        if(findMesa('Mesa 12',$data) != false){
                            $mesa12 = findMesa('Mesa 12' ,$data);
                            if($mesa12 == 'Confirmada'){
                                echo'<img src="img/12.svg" class="mesa-ocupada" alt="Mesa 12" id="mesa12" data-mesa-id="12">';
                            }else{
                                echo'<img src="img/12.svg" class="mesa-analise" alt="Mesa 12" id="mesa12" data-mesa-id="12">';
                            }
                        }else{
                            echo'<img src="img/12.svg" alt="Mesa 12" id="mesa12" data-mesa-id="12">';
                        }

                        if(findMesa('Mesa 13',$data) != false){
                            $mesa13 = findMesa('Mesa 13' ,$data);
                            if($mesa13 == 'Confirmada'){
                                echo'<img src="img/13.svg" class="mesa-ocupada" alt="Mesa 13" id="mesa13" data-mesa-id="13">';
                            }else{
                                echo'<img src="img/13.svg" class="mesa-analise" alt="Mesa 13" id="mesa13" data-mesa-id="13">';
                            }
                        }else{
                            echo'<img src="img/13.svg" alt="Mesa 13" id="mesa13" data-mesa-id="13">';
                        }

                        if(findMesa('Mesa 14',$data) != false){
                            $mesa14 = findMesa('Mesa 14' ,$data);
                            if($mesa14 == 'Confirmada'){
                                echo'<img src="img/14.svg" class="mesa-ocupada" alt="Mesa 14" id="mesa14" data-mesa-id="14">';
                            }else{
                                echo'<img src="img/14.svg" class="mesa-analise" alt="Mesa 14" id="mesa14" data-mesa-id="14">';
                            }
                        }else{
                            echo'<img src="img/14.svg" alt="Mesa 14" id="mesa14" data-mesa-id="14">';
                        }

                        if(findMesa('Mesa 15',$data) != false){
                            $mesa15 = findMesa('Mesa 15' ,$data);
                            if($mesa15 == 'Confirmada'){
                                echo'<img src="img/15.svg" class="mesa-ocupada" alt="Mesa 15" id="mesa15" data-mesa-id="15">';
                            }else{
                                echo'<img src="img/15.svg" class="mesa-analise" alt="Mesa 15" id="mesa15" data-mesa-id="15">';
                            }
                        }else{
                            echo'<img src="img/15.svg" alt="Mesa 15" id="mesa15" data-mesa-id="15">';
                        }

                        if(findMesa('Mesa 16',$data) != false){
                            $mesa16 = findMesa('Mesa 16' ,$data);
                            if($mesa16 == 'Confirmada'){
                                echo'<img src="img/16.svg" class="mesa-ocupada" alt="Mesa 16" id="mesa16" data-mesa-id="16">';
                            }else{
                                echo'<img src="img/16.svg" class="mesa-analise" alt="Mesa 16" id="mesa16" data-mesa-id="16">';
                            }
                        }else{
                            echo'<img src="img/16.svg" alt="Mesa 16" id="mesa16" data-mesa-id="16">';
                        }

                        if(findMesa('Mesa 17',$data) != false){
                            $mesa17 = findMesa('Mesa 17' ,$data);
                            if($mesa17 == 'Confirmada'){
                                echo'<img src="img/17.svg" class="mesa-ocupada" alt="Mesa 17" id="mesa17" data-mesa-id="17">';
                            }else{
                                echo'<img src="img/17.svg" class="mesa-analise" alt="Mesa 17" id="mesa17" data-mesa-id="17">';
                            }
                        }else{
                            echo'<img src="img/17.svg" alt="Mesa 17" id="mesa17" data-mesa-id="17">';
                        }
                    ?>
                </div>
            </div>

          
        </div>

    </div>
    </main>
    

    <div id="fade" class="hide"></div>
    <div id="modal" class="hide">

        <div class="modal-header">
            <img src="img/restaurante_gastromar.jpg" alt="Imagem Modal-Header" id="header-img">
            <img src="img/gastromar_logo_2021-300x105.png" alt="" id="logo-header">
            <button id="close-modal">Voltar</button>
        </div>

        <div class="modal-body">

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio obcaecati debitis nesciunt modi ipsum alias quaerat dolore. Esse dicta veniam ducimus quia, officia natus? Nisi ab assumenda officiis ipsa doloribus.</p>


            <form class="modal-form" action="gastromar.php" method="POST">
                <div id="inputs">
                <div class="input-box">
                    <label for="name">
                        Nome Completo
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="name" name="name" required>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="number">
                            Celular
                        <div class="input-field">
                            <i class="fa-solid fa-phone"></i>
                            <input type="tel" id="number" name="number" required>
                        </div>
                    </label>  
                </div>
                <div class="input-box">
                    <label for="hora">
                        Horário da reserva
                        <div class="input-field">
                            <i class="fa-solid fa-clock"></i>
                            <select name="hora" id="hora" required>
                                <option value=""></option>
                                <option value="8h">8:00</option>
                                <option value="9h">9:00</option>
                                <option value="10h">10:00</option>
                                <option value="11h">11:00</option>
                                <option value="12h">12:00</option>
                                <option value="13h">13:00</option>
                                <option value="14h">14:00</option>
                                <option value="15h">15:00</option>
                                <option value="16h">16:00</option>
                                <option value="18h">18:00</option>
                                <option value="19h">19:00</option>
                                <option value="20h">20:00</option>
                                <option value="21h">21:00</option>
                            </select>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="nadultos">
                        Adultos
                        <div class="input-field">
                            <i class="fa-solid fa-user-group"></i>
                            <select name="nadultos" id="nadultos" required>
                                <option value=""></option>
                                <option value="1">1 adulto</option>
                                <option value="2">2 adultos</option>
                                <option value="3">3 adultos</option>
                                <option value="4">4 adultos</option>
                                <option value="5">5 adultos</option>
                                <option value="6">6 adultos</option>
                                <option value="7">7 adultos</option>
                                <option value="8">8 adultos</option>
                                <option value="9">9 adultos</option>
                                <option value="10">10 adultos</option>
                                <option value="11">11 adultos</option>
                                <option value="12">12 adultos</option>
                                <option value="13">13 adultos</option>
                                <option value="14">14 adultos</option>
                                <option value="15">15 adultos</option>
                                <option value="16">16 adultos</option>
                            </select>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="ncrianca">
                        Crianças
                        <div class="input-field">
                            <i class="fa-solid fa-face-smile"></i>
                            <select name="ncrianca" id="ncrianca" required>
                            <option value=""></option>
                                <option value="0">Zero</option>
                                <option value="1">1 criança</option>
                                <option value="2">2 crianças</option>
                                <option value="3">3 crianças</option>
                                <option value="4">4 crianças</option>
                            </select>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="brisa">
                        Brisa &lpar;Traslado cortesia&rpar;
                        <div class="input-field">
                            <i class="fa-solid fa-ship"></i>
                            <select name="brisa" id="brisa" required>
                                <option value=""></option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="pet">
                        Pet &lpar;Opcional&rpar;
                        <div class="input-field">
                            <i class="fa-solid fa-dog"></i>
                            <input type="text" id="pet" name="pet">
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="restalimentar">
                        Restrição Alimentar &lpar;Opcional&rpar;
                        <div class="input-field">
                            <i class="fa-solid fa-utensils"></i>
                            <input type="text" id="restalimentar" name="restalimentar">
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="especial">
                        Ocasião especial &lpar;Opcional&rpar;
                        <div class="input-field">
                            <i class="fa-solid fa-champagne-glasses"></i>
                            <input type="text" id="especial" name="especial">
                        </div>
                    </label>
                </div>
                <input type="hidden" id="data" name="data" value="" required>
                <input type="hidden" id="mesa" name="mesa" value="">
                <input type="hidden" id="periodo-hidden" name="periodo" value="<?php echo isset($_GET['periodo']) ? $_GET['periodo'] : ''; ?>">
                <input type="submit" name="submit" id="submit" value="Solicitar Reserva">
                </div>
                </div>
                </div>
            </form>

        </div>

    </div>

    <div class="img-escolhida">
        <h1>Mesa escolhida</h1>
        <div class="img-escolhida2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae repudiandae alias et voluptatum facilis nobis mollitia? Expedita distinctio earum quam consectetur nostrum sequi quo quibusdam libero consequuntur, odit nisi quae!</p>
            <div class="borda"><img src="" alt="Mesa escolhida" id="img-mesa-escolhida"></div>
            <button id="open-modal">Fazer Reserva</button>
        </div>
    </div>

    <footer>

    </footer>

    


<script src="gastromar.js"></script>
<script>
        
        function handleDate(){
            var data = document.getElementById("ipt-data").value
            var periodo = document.getElementById("ipt-periodo").value
            window.location.href = "/gastromar/gastromar.php?date="+data+"&periodo="+periodo
        }  


    </script>

<script>
    /*document.getElementById('reservarBtn').addEventListener('click', function() {
        document.querySelector('.conteudo3').style.display = 'block';
        document.querySelector('.conteudo4').style.display = 'block';
    });*/
</script> 
    

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Obtenha o elemento select
    const selectElement = document.getElementById("periodo");

    // Obtenha o elemento de input hidden
    const hiddenInput = document.getElementById("periodo-hidden");

    // Adicione um ouvinte de evento para detectar alterações na seleção
    selectElement.addEventListener("change", function () {
      // Defina o valor do input hidden como o valor selecionado no select
      hiddenInput.value = selectElement.value;
    });
  });
</script>

<script>
  document.querySelector("form").addEventListener("submit", function (e) {
    const dataInput = document.querySelector('input[name="data-reserva"]');
    const periodoSelect = document.querySelector('select[name="periodo"]');

    if (dataInput.value === "" || periodoSelect.value === "") {
      e.preventDefault(); // Impede o envio do formulário
      if (dataInput.value === "") {
        alert("Por favor, selecione uma data antes de fazer a reserva.");
      } else if (periodoSelect.value === "") {
        alert("Por favor, selecione um período antes de fazer a reserva.");
      }
    }
  });
</script>




<script>
function handlePeriodoChange() {
    const periodo = document.getElementById('ipt-periodo').value;
    const horaSelect = document.getElementById('hora');

    // Limpar as opções atuais
    horaSelect.innerHTML = '';

    if (periodo === 'Café da manhã') {
        addHorasOptions(['','8h', '9h', '10h', '11h'], horaSelect);
    } else if (periodo === 'Almoço') {
        addHorasOptions(['','12h', '13h', '14h', '15h', '16h'], horaSelect);
    } else if (periodo === 'Jantar') {
        addHorasOptions(['','18h', '19h', '20h', '21h'], horaSelect);
    }
}

function addHorasOptions(horas, select) {
    horas.forEach(hora => {
        const option = document.createElement('option');
        option.value = hora;
        option.textContent = hora.replace('h', ':00');
        select.appendChild(option);
    });
}

// Adicione um ouvinte de evento para o select do período
document.getElementById('ipt-periodo').addEventListener('change', handlePeriodoChange);

// Chame a função inicialmente para definir as opções de hora com base no valor inicial
handlePeriodoChange();
</script>
</body>
</html>