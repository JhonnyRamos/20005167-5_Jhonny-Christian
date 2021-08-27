<?php
    include 'data/products.php'
?>

<head>
    <title>Doces da Jo | Pão de mel</title>
</head>

<main>
    
    <div class="container p-3 mb-0 bg-dark text-light">
        
        <!-- presenting product -->
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            
            <div>
                
                <div>
                    
                    <h1 class="display-5 fw-bold"><?php echo $arr['3']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['3']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                
                </div>
                
                <div class="mt-5">
                    
                    <p class="mb-0">à venda por apenas </p>
                    <p class="display-1">R$<?php echo $arr['3']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Comprar</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Experimente Grátis</button>
                
                </div>
            
            </div>
            
            <img src="./img/paodemel2.png" width="700px" alt="Pão de mel">
            
        </div>
        
        <!-- Você sabia? -->
        <div class="container p-5 pt-0 pb-5">    
            
            <div class="container">
                <h1>Você sabia?</h1> <br>
                
                Também chamado de pão de gengibre, veio para as Américas com colonos da Europa. 
                O melaço, que era mais barato que o açúcar, logo se tornou um ingrediente comum e produziu um bolo mais macio. 
                O primeiro livro de receitas americano impresso, American Cookery, de Amelia Simmons, continha sete receitas 
                diferentes de pão de gengibre. Sua receita para "Pão de gengibre macio para ser assado em panelas" 
                é a primeira receita escrita para o pão de mel americano cakey à moda antiga.
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