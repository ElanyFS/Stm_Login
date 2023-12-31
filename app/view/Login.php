<?php $this->layout('master', ['title' => 'Login']) ?>

<!-- <?php foreach ($data as $value) : ?>
<h5><?= $value->name; ?></h5>
<?php endforeach; ?> -->
<div class="container">

    <section class="vh-100">
        <br>
        <div class="container-fluid h-custom container-login">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" id="login">
                    <form action="/login/autenticacao" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Entrar com</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-facebook"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="bi bi-linkedin"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Ou</p>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email</label>
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Senha</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Lembrar senha
                                </label>
                            </div>
                            <a href="#!" class="text-body">Esqueceu sua senha?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Não tem uma conta? <a href="#!" id="registerLink" class="link-danger">Registrar</a></p>
                        </div>

                    </form>
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" id="register" style="display: none;">
                    <form action="/register" method="post">

                        <input type="hidden" name="access" value="comum">

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Nome completo" name="name" />
                            <label class="form-label" for="form3Example3">Nome</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" name="email" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" id="loginLink" class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<script>
    // Função para mostrar a página de registro e ocultar a de login
    function showRegisterPage() {
        document.getElementById('login').style.display = 'none';
        document.getElementById('register').style.display = 'block';
    }

    // Função para mostrar a página de login e ocultar a de registro
    function showLoginPage() {
        document.getElementById('register').style.display = 'none';
        document.getElementById('login').style.display = 'block';
    }

    // Associando as funções ao clique nos links
    document.getElementById('registerLink').addEventListener('click', showRegisterPage);
    document.getElementById('loginLink').addEventListener('click', showLoginPage);
</script>