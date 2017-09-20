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
    <link href="../../css/logo-nav.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../../css/templatemo_misc.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link href="../../css/templatemo_style.css" rel="stylesheet" media="screen">
    <link href="../../css/artilheiros.css" rel="stylesheet" media="screen">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../../images/logo_arena/arenam1lg4au_mobile.png">
    
    <!-- JavaScripts -->
    <script src="../../js/jquery-1.10.2.min.js"></script>
    <script src="../../js/modernizr.js"></script>
    <script type="text/javascript" src="funcs.js"></script>
    
    <?php
        include("conexao.php"); 
    ?> 

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-106774994-1', 'auto');
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

                    <div class=" about-us">
                            <div class="content-inner">
                                <div class="row services">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="service">

                                            <div class="header">
                                                <div class="header-bg"></div>
                                                <div class="service-header">
                                                    <div class="icon">
                                                        <spam><img src="../../images/bola.png"></spam>
                                                    </div>
                                                    <h4 class="service-title">ARTILHEIROS</h4>
                                                </div>
                                            </div>

                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <div class="artilheiros">
                                                                <table class="lista_artilheiro">

                                                                        <tr class="texto_amarelo">
                                                                            <th></th><!--RANKING-->
                                                                             
                                                                            <th>JOGADOR</th>
                                                                            <th><img src="../../images/times/escudo.png"></th>
                                                                            <th><img src="../../images/bola.png"></th>
                                                                        </tr> 
                                                                         
                                                                        <?php
                                                                           $artilheiros = $db->query('SELECT * FROM jogadores  where gols>=1 order by gols desc, nome asc');
                                                                            if($artilheiros){
                                                                                $cont = 1;
                                                                                while ($artilheiro = $artilheiros->fetch_assoc()){
                                                                        ?>

                                                                            <tr class="linha_artilheiro">  

                                                                                <td class="texto_amarelo">
                                                                                    <?=$cont++?>º
                                                                                </td>

                                                                                <td > 
                                                                                    <div class="nome_jogador">
                                                                                        <spam class="member-name"><?=$artilheiro['nome']?></spam> 
                                                                                        <div class="posicao_jogador">
                                                                                            <span class="member-name"><?=$artilheiro['posicao']?></span> 
                                                                                            <span class="member-name"><?=$artilheiro['num_camisa']?></span> 
                                                                                        </div>
                                                                                     </div> 
                                                                                </td> 

                                                                                <td> 
                                                                                    <div class="time_artilheiro">
                                                                                        <spam class="member-name"><?=$artilheiro['clube']?></spam>                                                                                            
                                                                                    </div> 
                                                                                </td> 

                                                                                <td> 
                                                                                    <div class="gols_artilheiro">
                                                                                        <spam class="gallery-title gols"><?=$artilheiro['gols']?></spam>                                                                                                                                                                              
                                                                                     </div>
                                                                                </td> 
                                                                            </tr>
                                                                    
                                                                        <?php         
                                                                                }
                                                                              $artilheiros->free(); 
                                                                            }
                                                                        ?>                                                              

                                                                </table>  
                                                            
                                                        </div><!--/.artilheiros-->


                                                    </div><!--/.table-responsive-->
                                                </div><!-- /.body-->
                                            </div><!--/.service-->
                                       </div> <!-- /.col-md-12 -->
                                  </div> <!-- /.row -->
                             </div> <!-- /.content-inner -->
                        </div> <!-- /.about-us (ARTILHEIRO PAGE)-->

                         <?php
                            include("../../rodape.html");
                        ?>
                </div>                   
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-content -->

    
    <script src="../../bootstrap-3.7/js/bootstrap.min.js"></script>
    <script src="../../js/jquery.mixitup.min.js"></script>
    <script src="../../js/jquery.nicescroll.min.js"></script>
    <script src="../../js/jquery.lightbox.js"></script>
    <script src="../../js/templatemo_custom.js"></script>
    <script src="update_jogo.js"></script>

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
