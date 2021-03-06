        <div class="barrausp">
            <div class="uk-container uk-container-center">

            <nav class="uk-margin-top">
                <a class="uk-navbar-brand uk-hidden-small" href="index.php" style="color:white">Coleta Produção USP</a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="index.php" style="color:white">Início</a>
                    </li>
                    <li>
                        <a href="#" data-uk-toggle="{target:'#busca_avancada'}" style="color:white">Busca avançada</a>
                    </li>                    
                </ul>
                    <div class="uk-navbar-flip">
                        <ul class="uk-navbar-nav uk-hidden-small">
                            <!--
                            <li data-uk-dropdown="{mode:'click'}">
                                <a href="" style="color:white">
                                    Idioma
                                    <i class="uk-icon-caret-down"></i>
                                </a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li style="color:black"><a href="">Português</a></li>
                                        <li><a href="">Inglês</a></li>
                                    </ul>
                                </div> 
                            </li>                            
                            <li>
                                <a href="contato.php" style="color:white">Contato</a>
                            </li>
                            <li>
                                <a href="about.php" style="color:white">Sobre</a>
                            </li>
                            
                            <li data-uk-dropdown="" aria-haspopup="true" aria-expanded="false">
                                <a href="" style="color:white"><i class="uk-icon-home"></i> Usuário</a>

                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" style="top: 40px; left: 0px;">
                                    <ul class="uk-nav uk-nav-navbar">
                                        <li class="uk-nav-header">Acesso</li>
                                        < ?php if(empty($_SESSION['oauthuserdata'])): ?>
                                            <li><a href="aut/oauth.php">Login</a></li>
                                        < ?php else: ?>
                                            <li><a href="#">< ?php echo 'Bem vindo, '.$_SESSION['oauthuserdata']->{'nomeUsuario'}.'';?></a></li>
                                            <li><a href="aut/logout.php">Logout</a></li>
                                        < ?php endif; ?>
                                    </ul>
                                </div>

                            </li>
                            -->
                            <a class="uk-navbar-brand uk-hidden-small" href="http://sibi.usp.br" style="color:white">SIBiUSP</a>
                        </ul>
                    </div>                
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" style="color:white" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small" style="color:white">BDPI USP</div>
            </nav>
                
            </div>
            
        
            <div id="busca_avancada" class="uk-container uk-container-center uk-hidden" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">
                    <div class="uk-alert uk-alert-large">
                        
                        <form class="uk-form" role="form" action="result_trabalhos.php" method="get">

                            <fieldset data-uk-margin>
                                <legend>String de busca avançada</legend>
                                <p>Selecionar campos para realizar a busca: </p>
                                <label><input type="checkbox" name="fields[]" value="titulo" checked> Título</label>
                                <label><input type="checkbox" name="fields[]" value="autores" checked> Autor</label>
                                <label><input type="checkbox" name="fields[]" value="palavras_chave" checked> Assunto</label>
                                <br/>
                                <script>
                                    $( function() {
                                    $( "#slider-range" ).slider({
                                      range: true,
                                      min: 1900,
                                      max: 2030,
                                      values: [ 1900, 2030 ],
                                      slide: function( event, ui ) {
                                        $( "#amount" ).val( "ano:[" + ui.values[ 0 ] + " TO " + ui.values[ 1 ] + "]" );
                                      }
                                    });
                                    $( "#amount" ).val( "ano:[" + $( "#slider-range" ).slider( "values", 0 ) +
                                      " TO " + $( "#slider-range" ).slider( "values", 1 ) + "]");
                                    } );
                                </script>
                                <p>
                                  <label for="amount">Selecionar período de tempo:</label>
                                  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="search[]">
                                </p>

                                <div id="slider-range"></div>                                
                                <br/>
                                <textarea type="text" class="uk-form-width-large" placeholder="Insira sua string de busca avançada" name="search[]" data-validation="required"></textarea>
                                <button class="uk-button" type="submit">Buscar</button>
                                <br/><br/><br/><a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html" target="_blank">Consultar referência</a>
                            </fieldset>

                        </form>                       
                       
                    </div>
                </div>
            </div>            
        </div>