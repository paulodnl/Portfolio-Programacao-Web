<?php include('layouts/header.php'); ?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="glass-card p-5 text-center" style="max-width: 450px; width: 100%;">
        <h2 class="mb-4 fw-bold">Descubra seu Signo</h2>
        <p class="mb-4 text-light opacity-75">Insira sua data de nascimento 
            para revelar os segredos do seu signo.</p>
        
        <form id="signo-form" method="POST" action="show_zodiac_sign.php">
            <div class="mb-4 text-start">
                <label for="data_nascimento" class="form-label ms-1">
                    Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            
            <button type="submit" class="btn btn-custom w-100">Consultar</button>
        </form>
    </div>
</div>

</body>
</html>