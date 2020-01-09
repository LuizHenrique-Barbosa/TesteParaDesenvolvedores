<html>
    
    <head>
         <meta charset="utf-8">
        <title>Teste para Desenvolvedores</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>

    <body>
        <!-- CABEÇALHO --> 
        <div id="cabecalho"> 
            <div id="bg"></div>
        </div>
        
        <!-- BOTÕES NOVO POLO E UP! --> 
        <div id="linha2">
        <table>
            <tr>
                <form action="" method="post" >
                <td><p style="color: white; font-weight: bold;"><input type="submit" value="Novo Polo" name="botao1" class="btn btn-primary">|<input type="submit" value="Up!" name="botao2" class="btn btn-primary"><p></td>
                
                    </form>
            </tr>
            </table>
        </div>
        
        <!-- CORPO PRINCIPAL, INFO DO CARRO + GARANTA SEU VOLKSWAGEN --> 
        <div id="corpo">
             <div style="float: left;">
            <table>
                
               <!-- PHP (INFORMAÇÕES DO BOTÂO NOVO POLO) --> 
            <?php
if(isset($_POST["botao1"])){
     ?> 
            <table id="tabela2">
            <tr>
                <td id="td2">
                   <b> NOVO POLO</b>
                    <br>
                    1.0 MPI
                </td>
                <td>
                    A PARTIR DE <b>R$49.990,00</b>
                    <br>
                    <div style='text-align:left; margin-left: 20px;'>+ TAXA <b>0%</b></div></td>
                </tr>
            </table>
            <table>
            <tr>
                <div id="carro">
                    <img src="img/novo-polo-vitoriawagen-2.png">
                    </div>
                </tr>
            </table>
            <?php
}else{
            
?>
                 <!-- PHP (INFORMAÇÕES DO BOTÂO UP!) --> 
            <table id="tabela2">
            <tr>
                <td id="td2">
                   <b>UP!</b>
                    <br>
                    1.0 MPI
                </td>
                <td>
                    A PARTIR DE <b>R$49.590,00</b>
                    <br>
                    </td>
                </tr>
            </table>
            <table>
            <tr>
                <div id="carro">
                    <img src="img/take-up-vermelho.png">
                    </div>
                </tr>
            </table>
            <?php 
             }
            ?>
                    
            </table>
            </div>
             <!-- GARANTA SEU VOLKSWAGEN --> 
            
             <!-- TEXTO DO GRANTA SEU VOLKSWAGEN --> 
            <div style="float: left; margin-top: 20px; margin-left: 150px;" >
              <center>  <p style="font-size: 25px; font-style: normal; color: #084c7b; margin-top: 40px; letter-spacing: -0.5px;"><b>SAIA NA FRENTE E GARANTA SEU VOLKSWAGEN.</b></p></center>
                
                <center>  <p style="font-size: 15px; font-style: normal; color: #084c7b; margin-top: 0px; letter-spacing: 1px;"><b>Escolha o modelo que você deseja e receba ofertas imperdíveis em primeira mão.</b></p></center>
            
                 <!-- FORMULÁRIO DO GARANTA SEU VOLKSWAGEN --> 
                <table>
            <form method="post" action="crud.php?act=cad">
                <table>
                <tr>
                <td style="width: 300px;">
                <input class="form-control" type="text" name="nome" placeholder="nome" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" title="Insira somente letras." required autofocus><br>
                
                <input class="form-control" type="email" name="email" placeholder="e-mail" pattern="(?!test@test\.com$)[a-z0-9._%+-]{3,}@[a-z]{3,}\.[a-z]{2,}(?:\.[a-z]{2,})?" title="Insira um formato de E-mail válido." required><br>

                 <input class="form-control" type="tel" name="telefone" placeholder="telefone" minlength="13" maxlength="14" title="Lembre-se de Inserir no formato correto (##)#####-####" required>
                    <br>
</td>
                <td style="float: left; margin-left: 35px;">
                <textarea name="mensagem" rows="8" cols="55" wrap="virtual" placeholder="mensagem" minlength="10" required></textarea><br>
                </td>
                </tr>
             </table>
                <tr>
                <input  class="btn btn-success " type="submit" value="GARANTA AGORA" style="width: 461px; float: right; margin-bottom: 20px;">
                    </tr>
            </form>         
               
                </table>
             </div>
            
           
        </div>
        
        <!-- RODAPÉ AZUL CLARO ("IMAGENS ILUSTRATIVAS") --> 
         <table> 
            
                 <tr id="rodape1" >
                 <td style="font-size: 11px; color: white;">
                 Imagens ilustrativas Novo Polo 1.0 MPI - preto - a partir de R$ 49.990,00 - condição de taxa 0% válida exclusivamente para modelos 1.0 MPI e 1.6 MSI com entrada de 
                 <br>
                 90% e saldo em 12 meses. Promoção válida até 28/02/2018 ou enquanto durar o estoque.
                 </td>
                 </tr>
            
                     </table>

        
             <!-- RODAPÉ DA PEQUENA FAIXA AZUL ESCURA --> 
                 <div id="rodape2" >
                 </div>
        
         <!-- RODAPÉ BRANCO COM LOGO DA VOLKSWAGEN --> 
        <table>
    
                 <tr id="rodape3" style="color: white;">
                 <td>
                 <img src="img/rodape.png">
                 </tr>
                    
             </table>
        
         <!-- RODAPÉ AZUL ESCURO, BOTÕES VITÓRIA E SERRA + INFORMAÇÕES --> 
          <div id="linha3">
              
               <!-- BOTÕES VITÓRIA E SERRA --> 
        <table>
            <tr>
                <form action="" method="post" >
                <td><p style="color: white; font-weight: bold;"><input type="submit" value="Vitória" name="botao3" class="btn btn-primary">|<input type="submit" value="Serra" name="botao2" class="btn btn-primary"><p></td>
                
                    </form>
            </tr>
            </table>
        
              <!-- INFORMAÇÕES DA VOLKSWAGEN DE VITÓRIA E SERRA --> 
            <table>
               
                 <!-- PHP (INFORMAÇÕES DO BOTÃO VITÓRIA) --> 
            <?php
if(isset($_POST["botao3"])){
     ?> 
            <table >
            <tr>
                <td style="color: white; font-size: 15px; letter-spacing: 0.60px;">
                   <img src="img/icone-localizacao.png" style="width: 25px; heigth: 25px;">
                    Av. Vitória, 1047 - Romão - Vitória - Cep 29041-405
                </td>
            </tr>
                
            <tr>
                <td style="color: white; font-size: 15px; margin-top: 10px; letter-spacing: 0.60px;">
                 <img src="img/icone-mail.png" style="width: 25px; heigth: 25px;">
                    E-mail: vitoriawagen@grupolider.com.br
                </td>
            </tr>
              
            <tr>
                <td style="color: white; font-size: 15px; margin-top: 10px; letter-spacing: 0.60px;">
                 <img src="img/icone-phone.png" style="width: 25px; heigth: 25px;">
                    Tel (27) 3331-8100
                </td>
            </tr>
            
            <tr>
                <td>
                   <img src="img/icone-facebook.png" style="width: 25px; heigth: 25px;">
                    <img src="img/icone-instagram.png" style="width: 25px; heigth: 25px;">
                </td>
                <td >
                    
                </td>
            </tr>
            </table>
           
            <?php
}else{
            
?>
                 <!-- PHP (INFORMAÇÕES DO BOTÃO SERRA) -->  
               <table>
            <tr>
                <td style="color: white; font-size: 15px; letter-spacing: 0.60px;">
                   <img src="img/icone-localizacao.png" style="width: 25px; heigth: 25px;">
                    Rod. BR 101 Norte, KM 264,91,5030, B. Planalto de Carapina - Serra - Cep 29162-703
                </td>
            </tr>
                
            <tr>
                <td style="color: white; font-size: 15px; margin-top: 10px; letter-spacing: 0.60px;">
                 <img src="img/icone-mail.png" style="width: 25px; heigth: 25px;">
                    E-mail: vitoriawagen@grupolider.com.br
                </td>
            </tr>
              
            <tr>
                <td style="color: white; font-size: 15px; margin-top: 10px; letter-spacing: 0.60px;">
                 <img src="img/icone-phone.png" style="width: 25px; heigth: 25px;">
                    Tel (27) 3298-3400
                </td>
            </tr>
            
            <tr>
                <td>
                   <img src="img/icone-facebook.png" style="width: 25px; heigth: 25px;">
                    <img src="img/icone-instagram.png" style="width: 25px; heigth: 25px;">
                </td>
                <td >
                    
                </td>
            </tr>
            </table>
            <?php 
             }
            ?>      
            </table>
              <!-- ........................................................................................ --> 
        </div>
        <!-- ......................FIM DO ULTIMO RODAPÉ (AZUL ESCURO)......................... -->
        
    </body>
</html>
