<div class="ml-4">
<div class="row mt-2">
    <div class="col-lg-3 col-sm-5 input-filter header-busca">
            <p class="font-busca">Busca<p>
        <select class="form-control" name="marca"> 
            <option value="">Marca</option> 
            <option value="HYUNDAI">HYUNDAI</option> 
            <option value="JEEP">JEEP</option> 
        </select>
        <select class="form-control" name="cor"> 
            <option value="">Cor</option> 
            <option value="BRANCO">BRANCO</option> 
                <option value="CINZA">CINZA</option> 
                <option value="PRATA">PRATA</option> 
                <option value="PRETO">PRETO</option> 
                <option value="VERMELHO">VERMELHO</option> 
            </select>
        <select class="form-control" name="combustivel"> 
            <option value="">Combustível</option> 
            <option value="DIESEL">DIESEL</option> 
            <option value="FLEX">FLEX</option> 
        </select>      
        <div class="example">
                <label for="customRange1">Faixa de Ano</label>
                <div id="nonlinear2"></div>
                <span class="example-val2" id="lower-value2"></span>
                <span class="example-val2" id="upper-value2"></span>
                
            <script>
            var nonLinearSlider = document.getElementById('nonlinear2');             
            noUiSlider.create(nonLinearSlider, {
                connect: true,
                behaviour: 'tap',
                start: [ 1980,  2018],
                range: {
                    // Starting at 500, step the value by 500,
                    // until 4000 is reached. From there, step by 1000.
                    'min': [ 1980 ],
                
                    'max': [ 2018 ]
                }
            });
            </script>			
            <script>
            var nodes2 = [
                document.getElementById('lower-value2'), // 0
                document.getElementById('upper-value2')  // 1
            ];
            
            // Display the slider value and how far the handle moved
            // from the left edge of the slider.
            nonLinearSlider.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
                nodes2[handle].innerHTML =  parseInt(values[handle]);
            
                //console.log(typeof parseInt(values[handle].innerHTML) );

            });
            </script>		
        </div>
        <div class="example">
                <label for="customRange1">Faixa de Preço</label>
                <div id="nonlinear"></div>
                <span class="example-val" id="lower-value"></span>
                <span class="example-val" id="upper-value"></span>      
            <script>
            var nonLinearSlider = document.getElementById('nonlinear');             
            noUiSlider.create(nonLinearSlider, {
                connect: true,
                behaviour: 'tap',
                start: [ 1500, 65000 ],
                range: {
                    // Starting at 500, step the value by 500,
                    // until 4000 is reached. From there, step by 1000.
                    'min': [ 5000 ],
                    '10%': [ 10000, 500 ],
                    '50%': [ 90012, 1000 ],
                    'max': [ 450061 ]
                }
            });
            </script>			
            <script>
            var nodes = [
                document.getElementById('lower-value'), // 0
                document.getElementById('upper-value')  // 1
            ];
            
            // Display the slider value and how far the handle moved
            // from the left edge of the slider.
            nonLinearSlider.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
                nodes[handle].innerHTML =  parseInt(values[handle]).toLocaleString('pt-BR',
                { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' }); 
            
                //console.log(typeof parseInt(values[handle].innerHTML) );

            });
            </script>		
        </div>
        <a href="#">
            <center>
                <button type="button" class="btn-banner btn btn-danger mb-4" style="border-radius: 5px;width: 150px;background-color: #34495e;">
                    Buscar
                </button>  
            </center>    
        </a>
    </div> 
    <div class="ml-4 col-lg-8 col box-conteudo">
        <div class="card">
            <img class="card-img-top" src="http://primafiat.com.br/img/9BD118181C1196827_1/prima/350/1.jpg" alt="Card image cap">
            <div class="dropdown-divider"></div>
            <div class="card-body">
                    <h6 class="card-title text-center">PUNTO ATTRACTIVE 1.4</h6>
                    <h6 class="card-subtitle mb-2 text-center">2012/2012</h6>
                    <p class="font-preco text-center">R$ 18.500,00</p>
                </div>
        </div>
        <div class="card">
                <img class="card-img-top" src="http://primafiat.com.br/img/VF7UDRFJWBJ501958_1/prima/350/1.jpg" alt="Card image cap">
                <div class="dropdown-divider"></div>
                <div class="card-body">
                        <h6 class="card-title text-center">PUNTO ATTRACTIVE 1.4</h6>
                        <h6 class="card-subtitle mb-2 text-center">2012/2012</h6>
                        <p class="font-preco text-center">R$ 18.500,00</p>
                    </div>
            </div>
    </div>   
</div>
</div>