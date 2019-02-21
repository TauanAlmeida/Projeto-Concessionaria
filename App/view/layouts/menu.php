<head>
<script type="text/javascript" src="App/view/bootstrap/js/jquery-3.3.1.js"></script>
</head>
<nav class="navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="topnav collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mt-1 container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="sobre">Sobre Nós</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Estoque
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Novos</a>
                            <a class="dropdown-item" href="#">Seminovos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Estoque completo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">Assistência</a>   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contatos">Contato</a>   
                    </li>
                    <form class="mb-1 box-search">
                        <input class="form-control" type="text"  name="search" placeholder="Buscar modelos, marcas..."/>
                        <img class="lupa" src="App/view/layouts/images/search.svg">
                    </form>
                </ul>
            </div>
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Login</a>
              </li>
              <li class="nav-item menu">
                  <a class="nav-link" href="cadastro">Cadastre-se</a>
              </li>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form id="form-login" class="px-4 py-3" action="" method="POST">
                              <div class="form-group">
                              <div class="alert alert-danger" role="alert" style="display:none;">
                                    Prencha os campos corretamente antes de enviar!
                                </div>
                                <label for="email_login">Email address</label>
                                <input type="email" name="email_login" class="form-control" id="email_login" placeholder="email@example.com">
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                  Lembrar me
                                </label>
                              </div>
                              <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cadastro">Não tem conta? Cadastre-se</a>
                            <a class="dropdown-item" href="#">Esqueci minha senha?</a>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
              </div>
          </ul>  
        </div>
</nav>

<!-- Envia o formulario sem refresh -->
<script>
jQuery(document).ready(function(){
		jQuery('#form-login').submit(function(){
            var dados = jQuery( this ).serialize(); 
            if($("#email_login").val()== null || $("#email_login").val() =="" ||
               $("#password").val()== null || $("#password").val() =="") {
                        $(".alert-danger").css("display", "block");
                        return false;
            }              
			jQuery.ajax({
				type: "POST",
				url: "login",
                data: dados,            
				success: function( data )
				{
                    console.log(data);
					
				}
			});
			return false
		});
	});
</script>