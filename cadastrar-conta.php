<!DOCTYPE html>
<html>
     <head>
          <link rel= "stylesheet" href= "_css/estilo.css"/>
          <meta charset="UTF- 8"/>
          <title>cadastrar-conta</title>
     </head>
           <body>
               <h1>Cadastrar Conta</h1> 
               <h2>Cadastre a conta para pagamento</h2>
            <div>
                <form method= "get" action="cadastrar-conta.php">
                Nome da Conta
                <input type="text" name= "nome"/>
               <p>Valor <input type ="valor" placeholder= "R$ 1.000,00"/></p> 
                Vencimento<input type = "date" name= "date" value="number"/></p>
                Categoria<input type="text" name="text" value= "Mensal, Avulso"/></p>
                Repetir Conta<input type="number" name="number" value="date"/></p>
               <p> Boleto<input type="text" name="text" value="Selecionar Arquivo"/>
               <input type="text" name="text" value="Selecionar"/></p>
               <input type="submit" value="Atualizar"/>
               <input type="submit" value="Cadastrar"/>
                          
            </div>
            </body>
</html>