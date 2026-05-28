<?php include('layouts/header.php'); ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100 py-5">
    <?php
    $data_nascimento = $_POST['data_nascimento'] ?? null; 
    
    if (!$data_nascimento) {
        header("Location: index.php");
        exit;
    }

    $signos = simplexml_load_file("signos.xml");
    $data_user = new DateTime($data_nascimento);
    $mes_dia_user = $data_user->format('m-d'); 
    
    $signo_encontrado = null;

    foreach ($signos->signo as $signo) {
        $inicio = explode('/', $signo->dataInicio);
        $fim = explode('/', $signo->dataFim);
        
        $data_inicio = $inicio[1] . '-' . $inicio[0];
        $data_fim = $fim[1] . '-' . $fim[0];

        if ($data_inicio > $data_fim) {
            if ($mes_dia_user >= $data_inicio || $mes_dia_user <= $data_fim) {
                $signo_encontrado = $signo;
                break;
            }
        } else {
            if ($mes_dia_user >= $data_inicio && $mes_dia_user <= $data_fim) {
                $signo_encontrado = $signo;
                break;
            }
        }
    }
    ?>

    <?php if ($signo_encontrado): ?>
        <div class="glass-card p-5 text-center" style="max-width: 500px; width: 100%;">
            
            <img src="<?= $signo_encontrado->imagem; ?>" alt="Logo <?= $signo_encontrado->signoNome; ?>" class="signo-img" onerror="this.style.display='none'">
            
            <h1 class="display-4 fw-bold mb-3 text-uppercase" style="letter-spacing: 3px;">
                <?= $signo_encontrado->signoNome; ?>
            </h1>
            <hr class="bg-light opacity-25 mb-4">
            <p class="lead mb-4" style="line-height: 1.8;">
                <?= $signo_encontrado->descricao; ?>
            </p>
            
            <a href="index.php" class="btn btn-outline-light w-100 rounded-pill py-2">Fazer nova consulta</a>
        </div>
    <?php else: ?>
        <div class="glass-card p-5 text-center">
            <h3 class="text-danger">Signo não encontrado!</h3>
            <p>Verifique a data informada e tente novamente.</p>
            <a href="index.php" class="btn btn-outline-light mt-3">Voltar</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>