<?php
// Incluir aquivo de conexão
include("conexao.php");
 
// Recebe o valor enviado
$valor = $_GET['valor'];
 
// Procura titulos no banco relacionados ao valor
$clubes = $db->query("SELECT * FROM clube WHERE nome ='$valor'");
 
// Exibe todos os valores encontrados
if(mysqli_affected_rows($db) > 0){
	while ($clube = $clubes->fetch_assoc()){
        $time = $clube['abreviacao'];
        $abreviacao = $clube['abreviacao'];  ?>
	        <div class="col-md-12 col-sm-12">


                <div class="service">

                    <div class="header">
                        <div class="header-bg"></div>
                        <div class="service-header">
                            <div class="icon">
                                <spam><img src="../../images/times/escudo.png">
                            </div>
                            <h4 class="service-title"><?=$clube['nome']?> (<?=$clube['abreviacao']?>)</h4>
                        </div>
                    </div>

                        <div class="body">
                            <div class="row">
                                
                                    <div class="elenco col-md-8">

                                        <div class="detalhes_clube">
                                                <p><h3>ELENCO</h3></p>
                                        </div>

                                        

                                        <div class="table-responsive">
                                    
                                            <table  class="lista_artilheiro elenco_jogadores">
                                             
                                                <tr>
                                                    <thead>
                                                        <th></th>
                                                        <th class="texto_amarelo">JOGADOR</th>
                                                        <th><spam class="cartao"><img src="../../images/bola.png"></spam></th>
                                                        <th><spam class="cartao"><img src="../../images/cartao_amarelo.png"></spam></th>
                                                        <th> <spam class="cartao"><img src="../../images/cartao_vermelho.png"></spam></th>
                                                    </thead>
                                                </tr>
                                                                  
                                                <?php
                                                    $jogadores = $db->query("SELECT * from jogadores where clube='$time' order by nome");
                                                    if($jogadores){
                                                        while ($jogador = $jogadores->fetch_assoc()){
                                                ?>

                                                    <tr  class="linha_artilheiro detalhes_clube">

                                                        <td class="img_artilheiro">
                                                            <img src="../../images/times/jogador.png" >
                                                        </td>

                                                        <td> 
                                                            <div class="nome_jogador">
                                                                <spam class="member-name"><?=$jogador['nome']?></spam> 
                                                                    <div class="posicao_jogador">
                                                                        <span class="member-name"><?=$jogador['posicao']?></span>
                                                                        <span><?=$jogador['num_camisa']?></span> 
                                                                    </div>
                                                            </div> 
                                                        </td> 

                                                        <td><?=$jogador['gols']?></td>
                                                        <td><?=$jogador['cartao_amarelo']?></td>
                                                        <td><?=$jogador['cartao_vermelho']?></td>      
                                                    </tr>

                                                <?php         
                                                            }
                                                        $jogadores->free(); 
                                                    }
                                                ?> 

                                                    <tr>
                                                        <td colspan="5">
                                                            <div><h4>TÉCNICO</h4></div>
                                                            <div class="member-name"><h5>(<?=$clube['tecnico']?>)</h5></div>
                                                        </td>
                                                    </tr> 

                                            </table>
                                        </div><!-- /.table-responsive-->
                                    </div><!-- /.elenco-->

                                    <div class="historico_clube col-md-4">
                                        <div class="row">

                                            <div class="col-md-12">
                                                    <p><h3>CONFRONTOS<span class="glyphicon glyphicon-export"></span></h3></p>
                                            </div>

                                                    <?php
                                                        $partidas = $db->query("SELECT * from partida where (visitante='$abreviacao' or mandante='$abreviacao') and situacao ='encerrada'");
                                                         if($partidas){
                                                                while ($partida = $partidas->fetch_assoc()){      
                                                    ?> 

                                                        <div class="col-md-12">
                                                            <div class="confrontos">
                                                                <div class="member-infos">
                                                                    <h4 class="member-name"><spam class="glyphicon"><img src="../../images/times/escudo.png"></spam> <?php echo $partida['mandante']; ?> <spam class="placar"><?php echo  $partida['placar_mandante']; if($partida['placar_mandante_penalty']){ echo "(".$partida['placar_mandante_penalty'].")";} ?></spam> <spam class="placar"><?php echo $partida['placar_visitante']; if($partida['placar_visitante_penalty']){ echo "(".$partida['placar_visitante_penalty'].")";} ?></spam> <?php echo $partida['visitante']; ?> <spam class="glyphicon"><img src="../../images/times/escudo.png"></spam> </h4>
                                                                </div><!-- /.member-infos --> 
                                                            </div><!-- /.confrontos -->  
                                                        </div> <!-- /.col-md-12 -->

                                                    <?php         
                                                          }
                                                         $partidas->free(); 
                                                       }
                                                    ?>
                                        </div>         

                                    </div><!--/.historico_clube-->
                            </div><!--/.row-->
                        </div><!-- /.body -->      
                </div><!-- /.service -->
            </div> <!-- /.col-md-12 --> <?php
	}
    $clubes->free();
}else{
	echo '<div class="texto_amarelo">NENHUM CLUBE SELECIONADO</div>';
}
 
?>