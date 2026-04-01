<x-layout-guest pageTitle="Login">
    <div class="container-img d-flex align-items-start justify-content-center pb-5 px-2">
        <div class="container-form bg-white col-4 text-center rounded mt-5">
            <form action=" #" method="POST">
                <div class="top-login text-white p-2 mb-4 rounded-top">
                    <div class="container-header-login">
                        <h1 class="mb-0">PreparaElite</h1>
                        <p class="mb-0">Concursos</p>
                    </div>
                </div>
                <h2>Bem-vindo de volta!</h2>
                <p>Acesse sua conta para continuar os seus estudos</p>
                <div class="input-group mb-3 w-75 mx-auto">
                    <div class="input-group-prepend">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 w-75 mx-auto">
                    <div class="input-group-prepend">
                        <i class="fas fa-lock"></i>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                        aria-describedby="basic-addon2">
                </div>
                <div class="w-75 mx-auto text-end mb-2">
                    <a href="#" class="text-decoration-none text-primary">
                        Esqueci a minha senha
                    </a>
                </div>
                <a href="#" class="btn btn-primary p-2 mb-2 rounded-3 w-75 btn-login"><i
                        class="fa-solid fa-location-arrow"></i>Entrar</a>

                <div class="w-75 mx-auto my-4 d-flex align-items-center">
                    <hr class="flex-grow-1">
                    <span class="px-2 text-muted">ou</span>
                    <hr class="flex-grow-1">
                </div>


            </form>
            <div class="input-group mb-3 w-75 mx-auto">
                <a href="#" class="btn btn-outline-primary p-2 mb-3 rounded-3 w-75">
                    <i class="fab fa-google"></i> Continuar com Google
                </a>
            </div>
            <div class="input-group mb-3 w-75 mx-auto">
                <a href="#" class="btn btn-outline-primary p-2 mb-3 rounded-3 w-75">
                    <i class="fab fa-apple"></i> Continuar com Apple
                </a>
            </div>

            <p>Não tem uma conta? <a href="#" class="text-primary text-decoration-none">Cadastre-se</a></p>

        </div>

    </div>
</x-layout-guest>