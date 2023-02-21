<!DOCTYPE html>
<html lang="pt-br">
<header><!-- Incio do cabeçalho -->
    <nav class="navbar navbar-expand-sm navbar-light bg-primary"><!-- Barra de Navegação -->
        <div class="container">
            <div class="row">
                <form class="mt-4 mb-4" action="result.php" method="get"> 
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Nome:">
                        <div class="input-group-append">    
                            <button type="submit" class="btn btn-outline-light" id="send">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mt-4 mb-4">
                <a href="../src/add.php" class="btn btn-outline-light" rel="noopener noreferrer">Novo</a>
            </div>
        </div>
    </nav><!-- Fim da Barra de Navegação -->
</header><!-- Fim do cabeçalho-->
<script>
    console.log('¬¨search.php loaded');
</script>
</html>