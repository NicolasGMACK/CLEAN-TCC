<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACADEMIA - PW</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="perfil.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <ul>
            <li><img src="hetero.jpg" alt=""></li>
            <a href="index.html" class="logo">PowerZone</a>
        </ul>	
        
        <ul>
            <li><a href="index.html" >Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="perfil.php" class="active">Perfil</a></li>
            <li><a href="#">Contato</a></li>				               
        </ul>
                
    </header>
    <main> 
        <div class="card"><div class="card-perfil">
            <img src="user.png" alt="">
            <div class="card-texto"><h3>Nicolas Gomes</h3><div class="card-info"><span class="material-symbols-outlined">
                mail
                </span><p>nicolasgomes@gmail.com</p><span class="material-symbols-outlined">
                    cake
                    </span><p>27/10/2003</p></div></div>
       </div>  <div class="historico">
        <div class="form-treino">
            <form method="post" action="processar.php">
                <h2>Registre seu treino</h2>
               <input type="text" id="treino-title" name="treino-title" placeholder="Insira o título do seu treino" required>
                
                <!-- Exercícios (acumulativos) -->
                <div id="exercicios">
                    <div class="exercicio">
                        <input type="text" class="exercicio-name" name="exercicio-name[]" placeholder="Nome do exercício" required>
                        <input type="number" class="exercicio-count" name="exercicio-count[]" placeholder="Quantidade de séries" required>
                        </div>
                </div>
        
                <!-- Botão para adicionar um novo exercício -->
                <button type="button" id="adicionar-exercicio">Adicionar um Novo Exercício</button>
                
                <button type="submit">Salvar Treino</button>
            </form>
    </div>
</div>
         </div><div class="card2"><h1>Histórico de treinos</h1>
                       
            <?php
            include 'mostrar.php'
            ?>
            
            <script src="script.js"></script>
         </div>
      
<script>
    // Função para adicionar exercícios dinamicamente
    function adicionarExercicio() {
        const exerciciosContainer = document.getElementById('exercicios');
        const novoExercicio = document.createElement('div');
        novoExercicio.classList.add('exercicio');
        novoExercicio.innerHTML = `
        <input type="text" class="exercicio-name" name="exercicio-name[]" placeholder="Nome do exercício" required>
                        <input type="number" class="exercicio-count" name="exercicio-count[]" placeholder="Quantidade de séries" required>
                        <br><a class="remover-exercicio">Remover Exercício</a>
        `;
        exerciciosContainer.appendChild(novoExercicio);

        // Adicionar evento de remoção para o novo botão "Remover Exercício"
        const removerExercicioBtn = novoExercicio.querySelector('.remover-exercicio');
        removerExercicioBtn.addEventListener('click', function() {
            exerciciosContainer.removeChild(novoExercicio);
        });
    }

    // Adicionar evento de clique para o botão "Adicionar um Novo Exercício"
    document.getElementById('adicionar-exercicio').addEventListener('click', adicionarExercicio);
</script>
        
       
    </main>
</body>
</html>
