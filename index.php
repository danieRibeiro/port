<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="CreateS">
        <meta name="keywords" content="Criação de site, site multipages, sites onepages, landing-page, sites brasil, HTML, CSS, JS">
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="CreateS - Desenvolvimento de Sites" />
        <meta property="og:description"   content="CreateS - Criação de sites modernos e responsivos de qualidade." />
        <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
<!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
        <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
        
        <link rel="stylesheet" href="FontAwesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="FontAwesome/css/brands.min.css">
        <link rel="stylesheet" href="FontAwesome/css/solid.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
        <title>CreateS - Desenvolvimento de Sites</title>
    </head>
    <body>
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v12.0" nonce="KSCwptfL"></script>
        <main>
            <header>
                <div class="navegacao">
                    <img src="imagens/logo.png">
                    <nav>
                        <ul>
                            <li><a href="#funcionalidade">Motivo para ter um site</a></li>
                            <li><a href="#galeria-trabalho">Trabalhos Realizados</a></li>
                            <!-- <li><a href="#time">Nossa Equipe</a></li> -->
                            <li><a href="#depoimentos">Depoimentos</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="texto-home">
                    <h1>Sites modernos e de Qualidade</h1>
                    <p>Construimos sites de qualidade com um preço acessível</p>
                    <a href="#galeria-trabalho" class="btn">Veja nossos modelos</a>
                </div>

            </header>

            <section class="section-funcionalidade wrap" id="funcionalidade">
                <h2 class="titulo-secao">Motivos para ter um site</h2>
                <div class="grupo-funcionalidade">
                    
                    <div class="item-funcionalidade">
                        <span class="fas fa-bullseye"></span>                     
                        <h5>Maior alcance do público-alvo</h5>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore, commodi illo error cumque aliquam recusandae.</p> -->
                    </div>
                    <div class="item-funcionalidade">
                        <span class="fas fa-eye"></span>                  
                        <h5>Aumenta a visibilidade da sua empresa</h5>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore, commodi illo error cumque aliquam recusandae.</p> -->
                    </div>
                    <div class="item-funcionalidade">
                        <span class="fas fa-lightbulb"></span>                       
                        <h5>Constrói conexões com os clientes</h5>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore, commodi illo error cumque aliquam recusandae.</p> -->
                    </div>
                    
                    <!-- <div class="item-funcionalidade">
                        <img src="imagens/nuvem.png">
                        <h5>Download for free</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore, commodi illo error cumque aliquam recusandae.</p>
                    </div> -->
                </div>
                <div class="grupo-funcionalidade two">
                    <div class="item-funcionalidade">
                        <span class="fas fa-poll"></span>
                        <h5>Aumenta as vendas</h5>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore, commodi illo error cumque aliquam recusandae.</p> -->
                    </div>
                    <div class="item-funcionalidade">
                        <span class="fas fa-briefcase"></span>                    
                        <h5>Acessibilidade</h5>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore, commodi illo error cumque aliquam recusandae.</p> -->
                    </div>
                </div>
            </section>
            <section class="section-galeria" id="galeria-trabalho">
                <p class="paragrafo-sub">Conheça os nossos</p>
                <h2 class="titulo-secao">Modelos</h2>
                <figure class="projetos">

                    <div title="Modelo 1"><a href="porti/projeto-1.jpg"><img src="porti/projeto-1.jpg"  alt="Modelo 1"></a></div>
                    <div title="Modelo 2"><a href="porti/projeto-2.jpg"><img src="porti/projeto-2.jpg"  alt="Modelo 2"></a></div>
                    <div title="Modelo 3"><a href="porti/projeto-3.jpg"><img src="porti/projeto-3.jpg"  alt="Modelo 3"></a></div>
                    <div title="Modelo 4"><a href="porti/projeto-4.jpg"><img src="porti/projeto-4.jpg"  alt="Modelo 4"></a></div>
                    <!-- <div title="Depósito"><img src="imagens/galeria/imagem-5.jpg"  alt="User Interface Design"></div>
                    <div title="Homem Andando"><img src="imagens/galeria/imagem-6.jpg" alt="User Interface Design"></div>
                    <div title="Madeiras"><img src="imagens/galeria/imagem-7.jpg"  alt="User Interface Design"></div>
                    <div title="Finalizando um projeto"><img src="imagens/galeria/imagem-8.jpg"  alt="User Interface Design"></div> -->
                </figure>
            </section>
            <!-- <section class="section-time wrap" id="time">
                <div class="grupo-time">
                    <div class="integrante-time">
                        <img src="imagens/mulher-1.png">
                        <h5>Ruth Woods</h5>
                        <span>Founder, ceo</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore.</p>
                        <div class="icons-time">
                            <a href="#" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="integrante-time">
                        <img src="imagens/mulher-2.png">
                        <h5>Timothy Reed</h5>
                        <span>co-founder developer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore.</p>
                        <div class="icons-time">
                            <a href="#" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="integrante-time"> 
                        <img src="imagens/mulher-3.png">
                        <h5>Victoria Valdez</h5>
                        <span>ui designer</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore.</p>
                        <div class="icons-time">
                            <a href="#" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="integrante-time">
                        <img src="imagens/mulher-4.png">
                        <h5>Beverly Little</h5>
                        <span>Data scientist</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi exercitationem labore.</p>
                        <div class="icons-time">
                            <a href="#" target="blank"><i class="fab fa-facebook"></i></a>
                            <a href="#" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" target="blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- <section class="section-depoimentos" id="depoimentos">
                <div class="imagem-cliente">
                    <img src="imagens/cliente.png" alt="">
                </div>
                <div class="depoimentos">
                    <article class="active">
                        <blockquote>"1 Suspendisse ac metus fermentum nisi sagittis condimentum. Vivamus faucibus fermentum ligula ut malesuada. Fusce in nibh viverra, bibendum nibh ut, rhoncus nulla. Etiam at tellus eget erat dictum porta."</quote>
                        <cite>Susan sims, interaction designer at axz</cite> 
                    </article>
                    <article>
                        <blockquote>" 2 Suspendisse ac metus fermentum nisi sagittis condimentum. Vivamus faucibus fermentum ligula ut malesuada. Fusce in nibh viverra, bibendum nibh ut, rhoncus nulla. Etiam at tellus eget erat dictum porta."</quote>
                        <cite>Sabrina Fans, SEO at PetiKim</cite> 
                    </article>
                    <article>
                        <blockquote>" 3 Suspendisse ac metus fermentum nisi sagittis condimentum. Vivamus faucibus fermentum ligula ut malesuada. Fusce in nibh viverra, bibendum nibh ut, rhoncus nulla. Etiam at tellus eget erat dictum porta."</quote>
                        <cite>Mychal Phelss, UI designer at axz</cite> 
                    </article>
                    <article>
                        <blockquote>"4 Suspendisse ac metus fermentum nisi sagittis condimentum. Vivamus faucibus fermentum ligula ut malesuada. Fusce in nibh viverra, bibendum nibh ut, rhoncus nulla. Etiam at tellus eget erat dictum porta."</quote>
                        <cite>Margareth HAs, president at ABC</cite> 
                    </article>
                    <article>
                        <blockquote>"5 Suspendisse ac metus fermentum nisi sagittis condimentum. Vivamus faucibus fermentum ligula ut malesuada. Fusce in nibh viverra, bibendum nibh ut, rhoncus nulla. Etiam at tellus eget erat dictum porta."</quote>
                        <cite>Cristhopher, co-founder at IBM</cite> 
                    </article>
                    <div class="dots-sliders">
                    </div>
                </div>
                
            </section> -->
                
            
            <section id="contato" class="section-downloads">
                <!-- <article>
                    <h5>Are You to Start? Download Now fro Free!</h3>
                        <p>fusce dapibus, tellus ac cursus commod</p>
                        <a href='imagens/modelo.jpg' download target="blank" class="btn" >Download Here</a>
                </article> -->
                <article>
                    <h2 class="two titulo-secao">Entre em contato</h2>
                    <div class="contato" onclick="window.open('mailto:contato.creates@gmail.com')">
                        <i class="fas fa-envelope"></i>
                        <p>contato.creates@gmail.com</p>
                        
                    </div>
                    <!-- <p class="paragrafo-sub">que entraremos em contato!</p>
                    <form action="formulario.php" method="POST">
                        <div class="field-form">
                            <label for="nome">Nome:</label>
                            <input type="text" required name="nome" id="nome">
                        </div>
                        <div class="field-form">
                            <label for="email">E-mail:</label>
                            <input type="email" required name="email" id="email">
                        </div>
                        <div class="field-form">
                            <label for="assunto">Assunto:</label>
                            <input type="assunto" required name="assunto" id="assunto">
                        </div>
                        <div class="field-form">
                            <label for="mensagem">Mensagem:</label>
                            <textarea rows="15" cols="85.3%" type="text" required name="mensagem" id="mensagem"></textarea>
                        </div>
                        <input type="submit">
                    </form> -->
                </article>
            </section>
            <footer>
                <div class="info-localizacao">
                    <!-- <div>
                        <h4>Localização</h4>
                        <p>3481 Metrose Place<br> Beverly Hills, CA 90210</p>
                    </div> -->
                    <div>
                        <h4>Compartilhe</h4>
                        <div class="icons-footer">
                            <!-- <div class="fb-share-button" data-href="https://www.youtube.com/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=xAM51Ovpr9M">Compartilhar</a></div> -->
                            <a class="fb-share-button" data-href="https://www.youtube.com/" data-layout="button" data-size="large" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=xAM51Ovpr9M" class="fb-xfbml-parse-ignore" target="blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=https://www.youtube.com/&text='Chama as bebe'" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.youtube.com/watch?v=bYnCPgwrRXk&title=DJ Matt-D - Homenagem Aos Relíquias 2.0 (Satélite Funk)" target="blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4>Sobre a CreateS</h4>
                        <p>
                            Somos uma empresa virtual <br>Com foco em desenvolvimento de sites<br> de diversas áreas<br><a href="#contato" class="contato-footer">Entre em contato e saiba mais</a></p>
                        </p>
                    </div>
                </div>
                <div class="info-site">
                    <p>Copyright &copy; 2021 <a href="">CreateS</a> - Todos os direitos reservados</p>
                    <!-- <p>Made with <i class="fas fa-heart"></i><a href="" target="blank">por SCreate</a></p> -->
                </div>
            </footer>

        </main>

        <script async src='script.js' ></script>
    </body>
</html>