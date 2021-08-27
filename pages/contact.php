<head>
    <title>Doces da Jo | Contato</title>
    <style>
        .drop-shadow {
            box-shadow: 0 5px 30px #ccc;
        }
    </style>
</head>

<main>

    <!-- contact - page introducing -->
    <div class="container p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid px-5 py-5 pb-4">
            <h1 class="display-5 fw-bold">Contato</h1>
            <p class="col-md-8 fs-4">Aqui você encontra maneiras de entrar em contato conosco</p>
            <br>
        </div>
    </div>

    <!-- contacts -->
    <div class="container bd-example bg-secondary pt-5 text-light">
        <h2 class="px-5">Aqui está</h2>
        <br>
        <div class="px-5 d-flex align-items-start flex-row">
            
            
            <address class="me-3">
                <strong>Email</strong><br>
                <a class="bg-light" href="mailto:docesdajo@contact.com">docesdajo@contact.com</a>
            </address>
            <address class="me-3">
                <strong>Telefone</strong><br>
                (19) 99455-3361
            </address>
            <address class="me-3">
                <strong>WhatApp</strong><br>
                (19) 99855-5666
            </address>
        </div>
    </div>

    <!-- form -->
    <div class="container bg-secondary text-light p-5 mb-5">
        <h2 class="pt-3">Ainda precisa de ajuda?</h2>
        <p>Precisa de mais informações? preencha os campos e envie-nos, teremos todo o gosto em ajudar</p>
        
        <form>
        <div class="form-row">
            <div class="form-group col-md-6 pb-2">
                <label>Nome</label>
                <input type="input" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group col-md-6 pb-2">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
        </div>
        <div class="form-group pb-2">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Endereço">
        </div>
        <div class="form-row pb-2">
            <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Cidade">
            </div>
            <div class="form-group col-md-4 pb-2">
            <label for="inputEstado">Estado</label>
            <select id="inputEstado" class="form-control">
                <option selected></option>
                <option>SP</option>
            </select>
            </div>
            <div class="form-group col-md-2 pb-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP" placeholder="xx.xxx-xxx">
            </div>
        </div>
        <br>
        <button type="text" class="btn btn-danger">Seguir</button>
        </form>
        
    </div>

</main>