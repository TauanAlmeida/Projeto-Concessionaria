
<script src="App/view/layouts/js/jquery.validate.min.js"></script>
  <script src="App/view/layouts/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="App/view/layouts/js/localization/messages_pt_BR.js"></script>

<!-- Valida o Forumulario -->
<script type="text/javascript">
        $(document).ready(function(){
        $("#form-cadastro").validate({
        rules : {
                nome:{
                        required: true,
                        minlength: 3,
                        maxlength: 10
                },
                telefone:{
                        required:true,
                       
                },
                email:{
                        required:true,
                        email:true
                },
                senha:{
                        required:true,
                        minlength: 5,
                        maxlength: 10
                },
                senha2:{
                        equalTo: "#senha",
                        minlength: 5,
                        maxlength: 10,
                        required:true
                },                              
        },
          // Called when the element is invalid:
        highlight: function(element) {
                $(element).addClass('foo').removeClass('bar');
               
        },
        
        // Called when the element is valid:
        unhighlight: function(element) {
                $(element).addClass('bar').removeClass('foo');      
        }       
        })
      
});
</script>

<!-- Mask para o campo telefone -->
<script type="text/javascript">
        $(document).ready(function(){
                $("#telefone").blur(function(event){
                        if ($(this).val().length == 15){
                                $("#telefone").mask("(00) 00000-0009");
                        }else{
                                $("#telefone").mask("(00) 0000-00009");
                        }
                }) 
        })
</script>


<div class="mt-4 container scroll">
    <div class="row justify-content-center">
        <div class="mt-2 col col-lg-6 ">
               
                <div class="mt-4 alert alert-danger" role="alert" style="display:none;">
                        Prencha os campos corretamente antes de enviar!
                </div>
                <div class="mt-4 alert alert-success" role="alert" style="display:none;">
                        Cadastro feito com sucesso!
                </div>
        <form id="form-cadastro" method="POST" action="">
                <div class="form-group">
                        <label for="for name">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                        <label for="for email">Endereço de Email </label>
                        <input type="email" class="form-control"  id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                <label for="for tell">Telefone</label>
                <input type="text"  class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000">
                </div>
                <div class="form-group">
                        <label for="for password">Senha</label>
                        <input type="password"  class="form-control"  id="senha" name="senha" placeholder="Password">        
                </div>
                <div class="form-group">
                        <label for="for repeat password">Confirmar senha </label>
                        <input type="password"  class="form-control"  id="senha2" name="senha2" placeholder="Password">        
                </div>
              <button onclick="rolar_para('#topo')" type="submit" class="blue-button btn-banner btn btn-danger" >Cadastrar</button>
                
        </form>
        </div>
</div>
</div>



<!-- Envia o formulario sem refresh -->
<script>
jQuery(document).ready(function(){
		jQuery('#form-cadastro').submit(function(){
                        var dados = jQuery( this ).serialize();
                        if($("#nome").val()== null || $("#nome").val() =="" ||
                        $("#email").val()== null || $("#email").val() =="" ||
                        $("#telefone").val()== null || $("#telefone").val() =="" ||
                        $("#senha").val()== null || $("#senha").val() =="" ||
                        $("#senha2").val()== null || $("#senha2").val() ==""){
                                $(".alert-danger").css("display", "block");
                        return false;
                        }
                        
			jQuery.ajax({
				type: "POST",
				url: "insert",
                                data: dados,
                               
				success: function( data )
				{
                                        $(".alert-danger").css("display", "none");
                                        $(".alert-success").css("display", "block");
                                        //limpando campos ao enviar
                                       
                                        $("#nome").val("").removeClass('bar').removeClass('foo'); 
                                        $("#email").val("").removeClass('bar').removeClass('foo'); 
                                        $("#telefone").val("").removeClass('bar').removeClass('foo'); 
                                        $("#senha").val("").removeClass('bar').removeClass('foo'); 
                                        $("#senha2").val("").removeClass('bar').removeClass('foo'); 
					
				}
			});
			return false;
		});
	});
</script>


<!--Ancora para o topo da pagina -->
<script>
function rolar_para(elemento) {
  $('html, body').animate({
    scrollTop: $(elemento).offset().top
  }, 500);

}</script>


