<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Pagina Principal </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/footer-with-button-logo.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> 
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Tela de cadastro</title>
    <?php 
        include_once "menu.php";
        
    ?>

    <style>
        .formulario{
            background-clip: text;
           -webkit-background-clip: text;
           color: transparent;
        }
        .form{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 15px;
        }
       
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(600deg, white, black);
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            background-clip: text;
           -webkit-background-clip: text;
           color: white;
            
        }
        label{
            color: white;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 50%;
            border-radius: 10px;
            color: white;
            font-size: 15px;   
            margin-left: 25%;        
        }
        

    
    
    </style>


<body>
   

    <form class="formulario">

    <div class="form">
    
    
    <input type="text" name="nome" id="nome" placeholder="Nome" style="width: 500px;">
    <label for="nome">Nome</label>
    
    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" style="width: 500px;">
    <label for="nome">Sobrenome</label>
   
    
    <input type="date"  id="floatingInput" placeholder="CPF" style="width: 500px;">
    <label for="floatingInput">Data de nascimento</label>
    
    <input type="text" name="cidade" id="cidade" placeholder="Cidade"  style="width: 500px;">
    <label for="floatingInput">Cidade</label>
  
  
    
    <input type="text" name="cpf" id="cpf" placeholder="CPF"  style="width: 500px;">
    <label for="floatingInput">CPF</label>
    
    
    <input type="text" name="email" id="email" placeholder="nome@gmail.com"  style="width: 500px;">
    <label for="floatingInput">Email</label>
    
    
    <input type="text" name="senha" id="senha" placeholder="Senha"  style="width: 500px;">
        <label for="floatingPassword">Senha</label>
    
    
        <input type="text" name="confirmar" id="confirmar" placeholder="Confirmar Senha" style="width: 500px;">
        <label for="floatingPassword">Confirme a senha</label>

        <br><br>
        <button>Cadastrar-se</button> 

    </div>
    </form>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</head>
</html>