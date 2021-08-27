<?php
    include 'data/products.php'
?>

<head>
    <title>Doces da Jo | Pudim</title>
</head>

<main>
    
    <div class="container p-3 mb-0 bg-dark text-light">
        
        <!-- presenting product -->
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            
            <div>
                
                <div>
                    
                    <h1 class="display-5 fw-bold"><?php echo $arr['5']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['5']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                
                </div>
                
                <div class="mt-5">
    
                    <p class="mb-0">à venda por apenas </p>
                    <p class="display-1">R$<?php echo $arr['5']['price'] ?><span class="fs-6">/pedaço</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Comprar</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Experimente Grátis</button>
                
                </div>
            
            </div>
            
            <img src="./img/pudim2.png" width="700px" alt="Pudim">
            
        </div>
        
        <!-- Você sabia? -->
        <div class="container p-5 pt-0 pb-5">    
            
            <div class="container">
                
                <h1>Você sabia?</h1> <br>
                
                O pudim, nascido em navios da Marinha Real nos séculos 18 e 19, com uma mistura de farinha e gordura, 
                foi evoluindo com o tempo, até chegar à receita hoje popularmente conhecida.
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