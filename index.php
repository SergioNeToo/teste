<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sei la</title>
</head>

<script>
function valida(){
    nome = document.getElementById("nome").value;
    idade = document.getElementById("idade").value;

    if(nome == ''){
    alert("Nome precisa ser preenchido");
    return false;
}
    if(idade == ''){
    alert("Idade precisa ser preenchida");
    return false;
    }
    else if(idade<18){
        alert("Proibido menor de idade");
        return false;
    }
    return true;
}




</script>

<body>
   <form action ="pagina.php" target="_blank" method="get" onsubmit="return valida();">
    nome :<input type="text" id="nome" name="nome">
    idade : <input type="text" id="idade" name="idade">
    <input type = "submit" value="Enviar">

   </form> 
</body>
</html>