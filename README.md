# 📘 Apostila - Funções PHP

Este projeto é uma apostila visual com exemplos práticos das principais funções do PHP, organizadas por categorias.

---

## 🧵 Funções de String

### strlen()
```php
$texto = "Olá mundo";
echo strlen($texto);
```

### str_replace()
```php
$frase = "Eu gosto de maçã";
echo str_replace("maçã", "banana", $frase);
```

### substr()
```php
$email = "contato@exemplo.com";
echo substr($email, 8);
```

### strtolower()
```php
echo strtolower("Isso É Um TESTE");
```

### strtoupper()
```php
echo strtoupper("Isso É Um TESTE");
```

### ucfirst()
```php
echo ucfirst("joão");
```

### trim()
```php
$entrada = "   olá   ";
echo trim($entrada);
```

### explode()
```php
$data = "29-10-2025";
$partes = explode("-", $data);
echo $partes[0];
```

### implode()
```php
$array = ["Maçã", "Banana", "Laranja"];
echo implode(", ", $array);
```

### strpos()
```php
$frase = "O gato subiu no telhado";
$pos = strpos($frase, "gato");

if ($pos !== false) {
    echo "Encontrado na posição $pos";
} else {
    echo "Não encontrado";
}
```

### sprintf()
```php
$nome = "Maria";
$idade = 30;

echo sprintf("O nome dela é %s e tem %d anos", $nome, $idade);
```

---

## 🔢 Funções Numéricas

### number_format()
```php
echo number_format(1250.75, 2, ',', '.');
```

### round()
```php
echo round(4.7);
```

### ceil()
```php
echo ceil(4.3);
```

### floor()
```php
echo floor(4.7);
```

### abs()
```php
echo abs(10 - 25);
```

### mt_rand()
```php
echo mt_rand(1, 10);
```

### max()
```php
echo max(5, 10, 2, 8);
```

### min()
```php
echo min(5, 10, 2, 8);
```

### pow()
```php
echo pow(2, 3);
```

### sqrt()
```php
echo sqrt(100);
```

---

## 🔍 Verificação de Tipo

### is_numeric()
```php
var_dump(is_numeric(123));
```

### is_int()
```php
var_dump(is_int(123));
```

### is_float()
```php
var_dump(is_float(123.45));
```

---

## 📦 Funções de Array

### count()
```php
$frutas = ["Maçã", "Banana", "Laranja"];
echo count($frutas);
```

### array_push()
```php
$lista = ["Arroz", "Feijão"];
array_push($lista, "Macarrão");
print_r($lista);
```

### array_pop()
```php
$lista = ["Arroz", "Feijão", "Macarrão"];
echo array_pop($lista);
```

### array_shift()
```php
$lista = ["Arroz", "Feijão", "Macarrão"];
echo array_shift($lista);
```

### array_key_exists()
```php
$config = ['usuario' => 'admin', 'senha' => '123'];

if (array_key_exists('usuario', $config)) {
    echo "Chave existe";
}
```

### in_array()
```php
$permissoes = ['ler', 'escrever', 'executar'];

if (in_array('escrever', $permissoes)) {
    echo "Pode escrever";
}
```

### array_merge()
```php
$a = ["a", "b"];
$b = ["c", "d"];

print_r(array_merge($a, $b));
```

### array_keys()
```php
$capitais = ['Brasil' => 'Brasília', 'Portugal' => 'Lisboa'];

print_r(array_keys($capitais));
```

### array_values()
```php
print_r(array_values($capitais));
```

---

## 📅 Funções de Data

### DateTime()
```php
$agora = new DateTime();
echo $agora->format('d/m/Y H:i:s');
```

### modify()
```php
$data = new DateTime();
$data->modify('+10 days');
echo $data->format('d/m/Y');
```

### diff()
```php
$nasc = new DateTime('2005-05-15');
$hoje = new DateTime();

$intervalo = $hoje->diff($nasc);

echo $intervalo->y . " anos";
```

### createFromFormat()
```php
$data_string = '20/03/2026';

$data_obj = DateTime::createFromFormat('d/m/Y', $data_string);

echo $data_obj->format('Y');
```

---

## 🚀 Objetivo

Este material serve como referência rápida para estudantes e desenvolvedores que desejam revisar funções essenciais do PHP de forma prática.

---

## 📌 Observação

Todos os exemplos podem ser executados em qualquer ambiente com PHP instalado.
