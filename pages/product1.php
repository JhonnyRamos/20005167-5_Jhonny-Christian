<?php
    include 'data/products.php'
?>

<head>
    <title>Doces da Jo | Brigadeiro</title>
</head>

<main>
    
    <div class="container p-3 mb-0 bg-dark text-light">
        
        <!-- presenting product -->
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            
            <div>
                
                <div>
                    <h1 class="display-5 fw-bold"><?php echo $arr['1']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['1']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                </div>
                
                <div class="mt-5">
                    
                    <p class="mb-0">à venda por apenas </p>
                    <p class="display-1">R$<?php echo $arr['1']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Comprar</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Experimente Grátis</button>
                
                </div>
            
            </div>
            
            <img src="./img/brigadeiro2.png" width="700px" alt="brigadeiro">
            
    </div>
    
    <!-- Você sabia? -->    
    <div class="container p-5 pt-0 pb-5">    
        
        <div class="container">
            
            <h1>Você sabia?</h1> <br>
                
            O brigadeiro é um doce típico da culinária brasileira, com origem no Rio de Janeiro, 
            que rapidamente se difundiu pelo Brasil, tornando-se comum em todo o país a sua presença em festas de aniversário, 
            junto com doces como o cajuzinho e o beijinho. É conhecido também no Rio Grande do Sul pelo nome de negrinho.
        </div>

        </div>    
    
    </div>
    
    <!-- delivery options -->
    <div class="container pt-0 mb-4 bg-light rounded-3">
        <div class="container px-5 py-5">
            <h1>Você também pode</h1> <br>
            <p class="">Você está pensando em receber em casa? nós também temos: <br></p>
            <img src="./img/ifood.png" width="250px" alt="ifood" class="mt-3 me-5">
            <img src="./img/uber-eats.png" width="250px" alt="uber-eats" class="mt-3 me-5">
            <img src="./img/rappi.png" width="250px" alt="uber-eats" class="mt-3">
        </div>
    </div>

</main>