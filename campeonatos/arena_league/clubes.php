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
    <link href="../../css/clubes.css" rel="stylesheet" media="screen">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../../images/logo_arena/arenam1lg4au_mobile.png">
    
    <!-- JavaScripts -->
    <script src="../../js/jquery-1.10.2.min.js"></script>
    <script src="../../js/modernizr.js"></script>
    <script type="text/javascript" src="funcs.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90935951-1', 'auto');
      ga('send', 'pageview');
    </script>

    <?php
        include("conexao.php"); 
    ?>    
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

                    <div>

                            <div class="language-select ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="">
                                            <select class=""  id="buscaClube" onchange="buscarClube(this.value)" />
                                                <option>-- clubes --</option>                                                                                  
                                                <?php
                                                    $clubes = $db->query("SELECT * from clube order by nome asc");
                                                    if($clubes){
                                                        while ($clube = $clubes->fetch_assoc()){ ?>
                                                            <option value='<?=$clube['nome']?>' class="member-name"><?php echo $clube['nome']?></option> 
                                                            
                                                        <?php 
                                                        }
                                                        $clubes->free();  
                                                    } ?>
                                                    
                                            </select>
                                        </form>    
                                    </div> <!-- /.col-md-12 -->
                                </div> <!-- /.row -->
                            </div> <!-- /.language-select -->

                            <div class="content-inner">
                                <div class="row services">
                                    <div id="clube">
                                                            
                                    </div>
                                </div> <!-- /.row -->
                            </div> <!-- /.content-inner -->
                    </div> <!-- /.services -->


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
