<!DOCTYPE html>
<html class="no-js" lang="pt-br"> 
<head>
    <title>ARENA M1L G4AU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!--<meta http-equiv="refresh"  content="6000">-->
    <meta name="ARENA" content="ARENA">
    <meta charset="UTF-8">
    
    <!-- CSS -->
    <link href="../../bootstrap-3.7/css/bootstrap.css" rel="stylesheet" media="screen">
    
    <link href="../../css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../../css/templatemo_misc.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link href="../../css/templatemo_style.css" rel="stylesheet" media="screen">
    <link href="../../css/index.css" rel="stylesheet" media="screen">
    <link href="../../css/logo-nav.css" rel="stylesheet">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../../images/logo_arena/arenam1lg4au_mobile.png">
    
    <!-- JavaScripts -->
    <script src="../../js/jquery-1.10.2.min.js"></script>
    <script src="../../js/modernizr.js"></script>
    <script src="funcs.js"></script>
    
    <?php
        include("conexao.php"); 
    ?>

    <!--script para dados estatisticos-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-90935951-1', 'auto');
      ga('send', 'pageview');
    </script>  

</head>
    
<body>
    <div id="loader"></div>
    <div class="bg-image"></div>
    <div class="overlay-bg"></div>    
    <div class="main-content">

        <?php
            include("menu.php");
        ?>
        
        <div class="container">
            <div class="row">
                <!-- Begin Content -->
                <div class="col-md-12">
                      
                    <div class="templatemo_logo">
                        <?php
                            include("nome_campeonato.php");     
                        ?>
                        <h1 class="texto_amarelo"><?php echo $nome ?></h1>
                    </div> <!-- /.logo -->

                    <?php
                        include("carrossel.html");
                    ?>
        
                    <div id="menu-container">
<!--===========================================================================================================================================================-->

<!--=====================================pagina inicial (jogos da rodada e tabela de classificação)============================================================-->
    
                        <div id="menu-1" class="homepage">
                            <div class="content-inner">
    <!-- _________________________________________________________ jogos em andamento ________________________________________________________________________ -->
                                <div class="row services">
                                    <div class="col-md-12 col-sm-12">

                                        <div class="service">
                                                <div class="header">
                                                    <div class="header-bg"></div>
                                                    <div class="service-header">
                                                        <h3 class="service-title">
                                                            BOLA ROLANDO
                                                        </h3>
                                                    </div>
                                                </div>

                                            <div class="body">
                                                <div class="row">
                                                    <div id="update_jogos">


                                                    </div>
                                                </div>      
                                            </div><!-- /.body -->
                                        </div> <!-- /.services --> 

                                    </div> <!-- /.col-md-4 -->   
                                </div> <!-- /.row -->
    <!-- _____________________________________________________________________________________________________________________________________________________ -->                            
     
     <!-- ______________________________________________________________________ tabela de jogos ______________________________________________________________ -->                                                       <div class="page-header">
                                    <h2 class="page-title">JOGOS DA RODADA</h2>
                                </div> <!-- /.page-header -->

                                <div class="row services">
                                    <div class="col-md-12 col-sm-12">

                                        <div class="service">
                                                <div class="header">
                                                    <div class="header-bg"></div>
                                                    <div class="service-header">

                                                        <form class="buscarPartidas">
                                                            <select class="postform" name="rodada" id="busca" onchange="buscarJogos(this.value)" />
                                                                                                                                                  
                                                                <?php
                                                                    $rodadas = $db->query("SELECT * from rodadas order by rodada desc");
                                                                    if($rodadas){
                                                                        while ($rodada = $rodadas->fetch_assoc()){ ?>
                                                                            <option value='<?=$rodada['rodada']?>'><?php echo "Rodada: ".$rodada['rodada']." - Fase: ".$rodada['fase'];?></option> 
                                                                            
                                                                        <?php $ultima_rodada =  $rodada['rodada']; $ultima_fase=$rodada['fase'];
                                                                        }
                                                                        $rodadas->free();  
                                                                    } ?>
                                                                    
                                                            </select>
                                                        </form>    
                                                          
                                                    </div>
                                                </div>

                                            <div class="body">
                                                <div vlass="table-responsive">
                                                    <div class="row">
                                                        <div id="rodada_jogos">
                                                            
                                                        </div>

                                                        <script type="text/javascript">
                                                            var rodada = document.getElementById('busca');
                                                            buscarJogos(rodada.value);
                                                        </script>
                                                        
                                                    </div> 
                                                </div>    
                                            </div><!-- /.body -->
                                        </div> <!-- /.services -->    
                                    </div> <!-- /.col-md-4 -->   
                                </div> <!-- /.row -->
    <!-- _____________________________________________________________________________________________________________________________________________________ -->                                                      


    <!-- ________________________________________________________________ classificação _______________________________________________________________________ -->

                                <div  class="fase_de_grupos">

                                     <div class="page-header">
                                        <h2 class="page-title">FASE DE GRUPOS</h2>
                                     </div> <!-- /.page-header -->

                                     <div class="row">
                                         <?php
                                            include("classificacao.php");
                                         ?>
                                     </div><!--/row-->    
                                </div> <!-- /.fase_de_grupos-->
    <!-- _____________________________________________________________________________________________________________________________________________________ -->
                                                            
                            </div> <!-- /.content-inner -->
                        </div> <!-- /.homepage -->

<!--===========================================================================================================================================================-->


<!--=============================================================== elencos dos clubes ========================================================================-->                        
                        
<!--===========================================================================================================================================================-->                        




<!--========================================================================== quem somos? ======================================================================-->                        
                        
<!--===========================================================================================================================================================-->



<!--=========================================================================  footer  ==========================================================================-->                        
                        <div class="site-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="copyright-text">Copyright &copy; ARENA M1L G4AU 
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-icons-footer">
                                        <ul>
                                            <li><a target="_parent" href="http://www.facebook.com/arenam1lg4au" class="fa fa-facebook"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-rss"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.site-footer -->

                    </div> <!-- /.content-holder -->
                
                </div> <!-- /.col-md-10 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->

    
    <script src="../../bootstrap-3.7/js/bootstrap.min.js"></script>
    <script src="../../js/jquery.mixitup.min.js"></script>
    <script src="../../js/jquery.nicescroll.min.js"></script>
    <script src="../../js/jquery.lightbox.js"></script>
    <script src="../../js/templatemo_custom.js"></script>
    <script src="update_jogos.js"></script>

    <script>
         $(window).load(function(){
            $("#loader").fadeOut("slow");
         });
    </script> 
    
<!--   -->
</body>
    <?php
        mysqli_close($db);
    ?>
</html>
