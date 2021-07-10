<!DOCTYPE html>
<html>
     <head> 
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <meta charset="UTF- 8"/>
          <title>Pagar-Conta</title>
     </head>

          <body>
               <h1>Pagar Conta</h1>
               <h2>Informe o comprovante de pagamento da conta</h2>
    <div>
          
          <div class="container">
          <div class="alert alert-primary" role="alert">
          <div class="row">
           <div class="w-100"></div>
           <div class="col">
               <form method= "get" action="Pagar-Conta.php">
                Nome:<input type="text" name= "nome"/></p>
                <p>Valor: <input type ="valor" placeholder= "R$ 1.000,00"/></p> 
                Vencimento:<input type = "date" name= "date" value="number"/></p>
                Categoria:<input type="text" name="text" value= "Mensal, Avulso"/></p>
                Repetir Conta:<input type="number" name="number" value="date"/></p>
          </div>  
           <div class="col">
                Comprovante:<input type="text" name="text" value="Selecionar Arquivo"/>
               <input type="text" name="text" value="Selecionar"/></p>
               <p>Boleto:<img src ="img/thumb-grande.jpg" alt=" "/></p>
               <button class="btn btn-primary">Pagar</button>
               <div class="alert alert-sucess"></div>
            </form>
        </div>
        <?php
            /*Pagamento efetuado com sucesso*/
          ?>
     </body>
</html>  