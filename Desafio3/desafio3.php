<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Apostila - Funções PHP</title>

<style>

/* RESET */
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial, Helvetica, sans-serif;
}

/* BODY */
body{
background:#0f172a;
color:#f1f5f9;
padding:40px;
}

/* TITULO */
h1{
text-align:center;
margin-bottom:40px;
font-size:38px;
color:#22c55e;
}

/* CATEGORIAS */
h2{
margin-top:60px;
margin-bottom:20px;
border-left:6px solid #22c55e;
padding-left:12px;
}

/* GRID */
.container{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:20px;
}

/* CARD */
.card{
background:#1e293b;
padding:20px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.4);
transition:0.2s;
}

.card:hover{
transform:translateY(-5px);
}

/* TITULO CARD */
.card h3{
color:#22c55e;
margin-bottom:10px;
}

/* RESULTADO */
.resultado{
background:#020617;
padding:10px;
border-radius:6px;
font-family:monospace;
margin-top:10px;
}

/* HR */
hr{
margin:20px 0;
border:none;
border-top:1px solid #334155;
}

</style>
</head>
<body>

<h1>Apostila - Funções PHP</h1>

<!-- ================= STRINGS ================= -->

<h2>Funções de String</h2>

<div class="container">

<div class="card">
<h3>strlen()</h3>
<div class="resultado">
<?php
$texto="Olá mundo";
echo strlen($texto);
?>
</div>
</div>

<div class="card">
<h3>str_replace()</h3>
<div class="resultado">
<?php
$frase="Eu gosto de maçã";
echo str_replace("maçã","banana",$frase);
?>
</div>
</div>

<div class="card">
<h3>substr()</h3>
<div class="resultado">
<?php
$email="contato@exemplo.com";
echo substr($email,8);
?>
</div>
</div>

<div class="card">
<h3>strtolower()</h3>
<div class="resultado">
<?php
echo strtolower("Isso É Um TESTE");
?>
</div>
</div>

<div class="card">
<h3>strtoupper()</h3>
<div class="resultado">
<?php
echo strtoupper("Isso É Um TESTE");
?>
</div>
</div>

<div class="card">
<h3>ucfirst()</h3>
<div class="resultado">
<?php
echo ucfirst("joão");
?>
</div>
</div>

<div class="card">
<h3>trim()</h3>
<div class="resultado">
<?php
$entrada="   olá   ";
echo trim($entrada);
?>
</div>
</div>

<div class="card">
<h3>explode()</h3>
<div class="resultado">
<?php
$data="29-10-2025";
$partes=explode("-",$data);
echo $partes[0];
?>
</div>
</div>

<div class="card">
<h3>implode()</h3>
<div class="resultado">
<?php
$array=["Maçã","Banana","Laranja"];
echo implode(", ",$array);
?>
</div>
</div>

<div class="card">
<h3>strpos()</h3>
<div class="resultado">
<?php
$frase="O gato subiu no telhado";
$pos=strpos($frase,"gato");

if($pos!==false){
echo "Encontrado na posição $pos";
}else{
echo "Não encontrado";
}
?>
</div>
</div>

<div class="card">
<h3>sprintf()</h3>
<div class="resultado">
<?php
$nome="Maria";
$idade=30;

echo sprintf("O nome dela é %s e tem %d anos",$nome,$idade);
?>
</div>
</div>

</div>

<!-- ================= NUMEROS ================= -->

<h2>Funções Numéricas</h2>

<div class="container">

<div class="card">
<h3>number_format()</h3>
<div class="resultado">
<?php
echo number_format(1250.75,2,',','.');
?>
</div>
</div>

<div class="card">
<h3>round()</h3>
<div class="resultado">
<?php
echo round(4.7);
?>
</div>
</div>

<div class="card">
<h3>ceil()</h3>
<div class="resultado">
<?php
echo ceil(4.3);
?>
</div>
</div>

<div class="card">
<h3>floor()</h3>
<div class="resultado">
<?php
echo floor(4.7);
?>
</div>
</div>

<div class="card">
<h3>abs()</h3>
<div class="resultado">
<?php
echo abs(10-25);
?>
</div>
</div>

<div class="card">
<h3>mt_rand()</h3>
<div class="resultado">
<?php
echo mt_rand(1,10);
?>
</div>
</div>

<div class="card">
<h3>max()</h3>
<div class="resultado">
<?php
echo max(5,10,2,8);
?>
</div>
</div>

<div class="card">
<h3>min()</h3>
<div class="resultado">
<?php
echo min(5,10,2,8);
?>
</div>
</div>

<div class="card">
<h3>pow()</h3>
<div class="resultado">
<?php
echo pow(2,3);
?>
</div>
</div>

<div class="card">
<h3>sqrt()</h3>
<div class="resultado">
<?php
echo sqrt(100);
?>
</div>
</div>

</div>

<!-- ================= VERIFICAÇÃO ================= -->

<h2>Verificação de Tipo</h2>

<div class="container">

<div class="card">
<h3>is_numeric()</h3>
<div class="resultado">
<?php var_dump(is_numeric(123)); ?>
</div>
</div>

<div class="card">
<h3>is_int()</h3>
<div class="resultado">
<?php var_dump(is_int(123)); ?>
</div>
</div>

<div class="card">
<h3>is_float()</h3>
<div class="resultado">
<?php var_dump(is_float(123.45)); ?>
</div>
</div>

</div>

<!-- ================= ARRAY ================= -->

<h2>Funções de Array</h2>

<div class="container">

<div class="card">
<h3>count()</h3>
<div class="resultado">
<?php
$frutas=["Maçã","Banana","Laranja"];
echo count($frutas);
?>
</div>
</div>

<div class="card">
<h3>array_push()</h3>
<div class="resultado">
<?php
$lista=["Arroz","Feijão"];
array_push($lista,"Macarrão");
print_r($lista);
?>
</div>
</div>

<div class="card">
<h3>array_pop()</h3>
<div class="resultado">
<?php
$lista=["Arroz","Feijão","Macarrão"];
echo array_pop($lista);
?>
</div>
</div>

<div class="card">
<h3>array_shift()</h3>
<div class="resultado">
<?php
$lista=["Arroz","Feijão","Macarrão"];
echo array_shift($lista);
?>
</div>
</div>

<div class="card">
<h3>array_key_exists()</h3>
<div class="resultado">
<?php
$config=['usuario'=>'admin','senha'=>'123'];

if(array_key_exists('usuario',$config)){
echo "Chave existe";
}
?>
</div>
</div>

<div class="card">
<h3>in_array()</h3>
<div class="resultado">
<?php
$permissoes=['ler','escrever','executar'];

if(in_array('escrever',$permissoes)){
echo "Pode escrever";
}
?>
</div>
</div>

<div class="card">
<h3>array_merge()</h3>
<div class="resultado">
<?php
$a=["a","b"];
$b=["c","d"];

print_r(array_merge($a,$b));
?>
</div>
</div>

<div class="card">
<h3>array_keys()</h3>
<div class="resultado">
<?php
$capitais=['Brasil'=>'Brasília','Portugal'=>'Lisboa'];

print_r(array_keys($capitais));
?>
</div>
</div>

<div class="card">
<h3>array_values()</h3>
<div class="resultado">
<?php
print_r(array_values($capitais));
?>
</div>
</div>

</div>

<!-- ================= DATA ================= -->

<h2>Funções de Data</h2>

<div class="container">

<div class="card">
<h3>DateTime()</h3>
<div class="resultado">
<?php
$agora=new DateTime();
echo $agora->format('d/m/Y H:i:s');
?>
</div>
</div>

<div class="card">
<h3>modify()</h3>
<div class="resultado">
<?php
$data=new DateTime();
$data->modify('+10 days');
echo $data->format('d/m/Y');
?>
</div>
</div>

<div class="card">
<h3>diff()</h3>
<div class="resultado">
<?php
$nasc=new DateTime('2005-05-15');
$hoje=new DateTime();

$intervalo=$hoje->diff($nasc);

echo $intervalo->y." anos";
?>
</div>
</div>

<div class="card">
<h3>createFromFormat()</h3>
<div class="resultado">
<?php
$data_string='20/03/2026';

$data_obj=DateTime::createFromFormat('d/m/Y',$data_string);

echo $data_obj->format('Y');
?>
</div>
</div>

</div>

</body>
</html>