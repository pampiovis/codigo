<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="quiz.css">
    <title>QUIZ</title>
</head>
<body class="body">
    
    <div class="respostas">
    

<?php
$pergunta1=$_POST['pergunta1'];
$pergunta2=$_POST['pergunta2'];
$pergunta3=$_POST['pergunta3'];
$pergunta4=$_POST['pergunta4'];
$pergunta5=$_POST['pergunta5'];
$pergunta6=$_POST['pergunta6'];

$totalADM=0;
$totalInfo=0;
$totalPF=0;
$totalContab=0;
$totalPG=0;
$totalEletro=0;
$totalMec=0;
$totalJogos=0;
  
if($pergunta1==1){$totalADM=$totalADM+2;}
if ($pergunta1==2){$totalInfo=$totalInfo+2;}
if ($pergunta1==3){$totalPF=$totalPF+2;}
if ($pergunta1==4){$totalContab=$totalContab+2;}
if ($pergunta1==5){$totalPG=$totalPG+2;}
if ($pergunta1==6){$totalEletro=$totalEletro+2;}
if ($pergunta1==7){$totalMec=$totalMec+2;}
if ($pergunta1==8){$totalJogos=$totalJogos+2;}

if ($pergunta2==1){$totalADM=$totalADM+2;}
if ($pergunta2==2){$totalInfo=$totalInfo+2;}
if ($pergunta2==3){$totalPF=$totalPF+2;}
if ($pergunta2==4){$totalContab=$totalContab+2;}
if ($pergunta2==5){$totalPG=$totalPG+2;}
if ($pergunta2==6){$totalEletro=$totalEletro+2;}
if ($pergunta2==7){$totalMec=$totalMec+2;}
if ($pergunta2==8){$totalJogos=$totalJogos+2;}

if ($pergunta3==1){$totalADM=$totalADM+1;}
if ($pergunta3==2){$totalInfo=$totalInfo+1;}
if ($pergunta3==3){$totalPF=$totalPF+1;}
if ($pergunta3==4){$totalContab=$totalContab+1;}
if ($pergunta3==5){$totalPG=$totalPG+1;}
if ($pergunta3==6){$totalEletro=$totalEletro+1;}
if ($pergunta3==7){$totalMec=$totalMec+1;}
if ($pergunta3==8){$totalJogos=$totalJogos+1;}


if ($pergunta4==1){$totalADM=$totalADM+1;}
if ($pergunta4==2){$totalInfo=$totalInfo+1;}
if ($pergunta4==3){$totalPF=$totalPF+1;}
if ($pergunta4==4){$totalContab=$totalContab+1;}
if ($pergunta4==5){$totalPG=$totalPG+1;}
if ($pergunta4==6){$totalEletro=$totalEletro+1;}
if ($pergunta4==7){$totalMec=$totalMec+1;}
if ($pergunta4==8){$totalJogos=$totalJogos+1;}

if ($pergunta5==1){$totalADM=$totalADM+1;}
if ($pergunta5==2){$totalInfo=$totalInfo+1;}
if ($pergunta5==3){$totalPF=$totalPF+1;}
if ($pergunta5==4){$totalContab=$totalContab+1;}
if ($pergunta5==5){$totalPG=$totalPG+1;}
if ($pergunta5==6){$totalEletro=$totalEletro+1;}
if ($pergunta5==7){$totalMec=$totalMec+1;}
if ($pergunta5==8){$totalJogos=$totalJogos+1;}


if ($pergunta6==1){$totalADM=$totalADM+1;}
if ($pergunta6==2){$totalInfo=$totalInfo+1;}
if ($pergunta6==3){$totalPF=$totalPF+1;}
if ($pergunta6==4){$totalContab=$totalContab+1;}
if ($pergunta6==5){$totalPG=$totalPG+1;}
if ($pergunta6==6){$totalEletro=$totalEletro+1;}
if ($pergunta6==7){$totalMec=$totalMec+1;}
if ($pergunta6==8){$totalJogos=$totalJogos+1;}

if($totalADM>=$totalContab && $totalADM>=$totalEletro && $totalADM>=$totalInfo && $totalADM>=$totalJogos &&
$totalADM>=$totalMec && $totalADM>=$totalPF && $totalADM>=$totalPG){
    echo '<p class= "titulo_curso">' ;
    echo 'O melhor curso para você é Administração!';
    echo '</p><br><p class= "texto_curso">';
    echo 'Executa as funções de apoio administrativo: protocolo e arquivo, confecção e expedição de documentos administrativos e controle de estoques. Opera sistemas de informações gerenciais de pessoal e material. Utiliza ferramentas da informática básica, como suporte às operações organizacionais.'; 
    echo '</p>';
}
if($totalInfo>=$totalContab && $totalInfo>=$totalEletro && $totalInfo>=$totalADM && $totalInfo>=$totalJogos &&
$totalInfo>=$totalMec && $totalInfo>=$totalPF && $totalInfo>=$totalPG){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Informática!";
    echo '</p><br><p class= "texto_curso">';
    echo "Instala sistemas operacionais, aplicativos e periféricos para desktop e servidores. Desenvolve e documenta aplicações para desktop com acesso a web e a banco de dados. Realiza manutenção de computadores de uso geral. Instala e configura redes de computadores locais de pequeno porte.";
    echo '</p>';
}
if($totalPF>=$totalContab && $totalPF>=$totalEletro && $totalPF>=$totalADM && $totalPF>=$totalJogos &&
$totalPF>=$totalMec && $totalPF>=$totalInfo && $totalPF>=$totalPG){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Processos Fotográficos!";
    echo '</p><br><p class= "texto_curso">';
    echo "Participa de equipes de produção de fotografias, utilizando recursos tecnológicos e de linguagem. Atua na montagem do estúdio e preparação dos equipamentos para a produção fotográfica, respeitando as condições de iluminação. Efetua a correção técnica e o tratamento de imagens. Restaura e digitaliza acervos fotográficos.";
    echo '</p>';
}
if($totalContab>=$totalPF && $totalContab>=$totalEletro && $totalContab>=$totalADM && $totalContab>=$totalJogos &&
$totalContab>=$totalMec && $totalContab>=$totalInfo && $totalContab>=$totalPG){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Contabilidade!";
    echo '</p><br><p class= "texto_curso">';
    echo "Efetua anotações das transações financeiras da organização e examina documentos fiscais e parafiscais. Analisa a documentação contábil e elabora planos de determinação das taxas de depreciação e exaustão dos bens materiais, de amortização dos valores imateriais. Organiza, controla e arquiva os documentos relativos à atividade contábil e controla as movimentações. Registra as operações contábeis da empresa, ordenando os movimentos pelo débito e crédito. Prepara a documentação, apura haveres, direitos e obrigações legais.";
    echo '</p>';
}
if($totalPG>=$totalPF && $totalPG>=$totalEletro && $totalPG>=$totalADM && $totalPG>=$totalJogos &&
$totalPG>=$totalMec && $totalPG>=$totalInfo && $totalPG>=$totalContab){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Petróleo e Gás!";
    echo '</p><br><p class= "texto_curso">';
    echo "Opera e controla máquinas e equipamentos na produção de petróleo e gás natural. Auxilia e atua na programação, planejamento e execução da manutenção de máquinas e equipamentos. Determina propriedades e grandezas dimensionais de rochas, fluidos e materiais para a indústria do petróleo e gás natural. Auxilia no controle dos efeitos ambientais das operações efetuadas.";
    echo '</p>';
}
if($totalEletro>=$totalPF && $totalEletro>=$totalPG && $totalEletro>=$totalADM && $totalEletro>=$totalJogos &&
$totalEletro>=$totalMec && $totalEletro>=$totalInfo && $totalEletro>=$totalContab){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Eletrônica!";
    echo '</p><br><p class= "texto_curso">';
    echo "Participa do desenvolvimento de projetos. Executa a instalação e a manutenção de equipamentos e sistemas eletrônicos. Realiza medições e testes com equipamentos eletrônicos. Executa procedimentos de controle de qualidade e gestão da produção de equipamentos eletrônicos.";
    echo '</p>';
}
if($totalMec>=$totalPF && $totalMec>=$totalPG && $totalMec>=$totalADM && $totalMec>=$totalJogos &&
$totalMec>=$totalEletro && $totalMec>=$totalInfo && $totalMec>=$totalContab){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Mecânica!";
    echo '</p><br><p class= "texto_curso">';
    echo "Atua na elaboração de projetos de produtos, ferramentas, máquinas e equipamentos mecânicos. Planeja, aplica e controla procedimentos de instalação e de manutenção mecânica de máquinas e equipamentos conforme normas técnicas e normas relacionadas à segurança. Controla processos de fabricação. Aplica técnicas de medição e ensaios. Especifica materiais para construção mecânica.";
    echo '</p>';
}
if($totalJogos>=$totalPF && $totalJogos>=$totalPG && $totalJogos>=$totalADM && $totalJogos>=$totalMec &&
$totalJogos>=$totalEletro && $totalJogos>=$totalInfo && $totalJogos>=$totalContab){
    echo '<p class= "titulo_curso">' ;
    echo "O melhor curso para você é Jogos Digitais!";
    echo '</p><br><p class= "texto_curso">';
    echo "Compõe equipes multidisciplinares na construção dos jogos digitais. Utiliza técnicas e programas de computadors especializados de tratamento de imagens e sons. Desenvolve recursos, ambientes, objetos e modelos a ser utilizados nos jogos digitais. Implementa recursos que possibilitem a interatividade dos jogadores com o programas de computador. Integra os diversos recursos na construção do jogo.";
    echo '</p>';
}

?>
<a href="/iF/"> <button class="voltar">voltar para a página inicial</button></a>
</div>
</body>
</html>