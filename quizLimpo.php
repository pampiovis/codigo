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
// Captura as respostas do formulário
$respostas = [
    $_POST['pergunta1'],
    $_POST['pergunta2'],
    $_POST['pergunta3'],
    $_POST['pergunta4'],
    $_POST['pergunta5'],
    $_POST['pergunta6']
];

// Cria um array para manter o total de pontos por curso
$totalCursos = [
    'ADM' => 0,
    'Info' => 0,
    'PF' => 0,
    'Contab' => 0,
    'PG' => 0,
    'Eletro' => 0,
    'Mec' => 0,
    'Jogos' => 0
];

// Define um array para os valores de pontuação de cada resposta
$valores = [
    1 => 'ADM',
    2 => 'Info',
    3 => 'PF',
    4 => 'Contab',
    5 => 'PG',
    6 => 'Eletro',
    7 => 'Mec',
    8 => 'Jogos'
];

// Incrementa os valores com base nas respostas
foreach ($respostas as $resposta) {
    $curso = $valores[$resposta];
    $totalCursos[$curso] += 2;
}

// Identifica o curso com a maior pontuação
$melhorCurso = array_keys($totalCursos, max($totalCursos))[0];

// Descrição de cada curso
$descricoesCursos = [
    'ADM' => "Executa as funções de apoio administrativo: protocolo e arquivo, confecção e expedição de documentos administrativos e controle de estoques. Opera sistemas de informações gerenciais de pessoal e material. Utiliza ferramentas da informática básica como suporte às operações organizacionais.",
    'Info' => "Instala sistemas operacionais, aplicativos e periféricos para desktop e servidores. Desenvolve e documenta aplicações para desktop com acesso à web e a banco de dados. Realiza manutenção de computadores de uso geral. Instala e configura redes de computadores locais de pequeno porte.",
    'PF' => "Participa de equipes de produção de fotografias, utilizando recursos tecnológicos e de linguagem. Atua na montagem do estúdio e preparação dos equipamentos para a produção fotográfica, respeitando as condições de iluminação. Efetua a correção técnica e o tratamento de imagens. Restaura e digitaliza acervos fotográficos.",
    'Contab' => "Efetua anotações das transações financeiras da organização e examina documentos fiscais e parafiscais. Analisa a documentação contábil e elabora planos de determinação das taxas de depreciação e exaustão dos bens materiais, de amortização dos valores imateriais. Organiza, controla e arquiva os documentos relativos à atividade contábil.",
    'PG' => "Opera e controla máquinas e equipamentos na produção de petróleo e gás natural. Auxilia na programação, planejamento e execução da manutenção de máquinas e equipamentos. Determina propriedades e grandezas dimensionais de rochas, fluidos e materiais para a indústria do petróleo e gás natural. Auxilia no controle dos efeitos ambientais das operações efetuadas.",
    'Eletro' => "Participa do desenvolvimento de projetos. Executa a instalação e a manutenção de equipamentos e sistemas eletrônicos. Realiza medições e testes com equipamentos eletrônicos. Executa procedimentos de controle de qualidade e gestão da produção de equipamentos eletrônicos.",
    'Mec' => "Atua na elaboração de projetos de produtos, ferramentas, máquinas e equipamentos mecânicos. Planeja, aplica e controla procedimentos de instalação e de manutenção mecânica de máquinas e equipamentos conforme normas técnicas e relacionadas à segurança.",
    'Jogos' => "Compõe equipes multidisciplinares na construção dos jogos digitais. Utiliza técnicas e programas de computador especializados em tratamento de imagens e sons. Desenvolve recursos, ambientes, objetos e modelos a serem utilizados nos jogos digitais. Implementa recursos para possibilitar a interatividade dos jogadores com o jogo."
];

// Exibe o resultado do melhor curso
echo '<p class="titulo_curso">O melhor curso para você é ' . $melhorCurso . '!</p>';
echo '<br><p class="texto_curso">' . $descricoesCursos[$melhorCurso] . '</p>';
?>

<a href="/iF/"> <button class="voltar">Voltar para a página inicial</button></a>
</div>

</body>
</html>
