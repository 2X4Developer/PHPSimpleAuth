# PHPSimpleAuth

```php
$checkValidity1 = $PHPSimpleAuth->verify("real", ["required", "min:2", "max:5", "alphanumeric"]);

if(is_bool($checkValidity1)){
  echo "string is valid fr\n";
}else{
  echo $checkValidity1;
}

$checkValidity2 = $PHPSimpleAuth->verify(1, ["required", "min:2", "max:5"]);

if(is_bool($checkValidity2)){
  echo "number is valid fr\n";
}else{
  echo $checkValidity2;
}
```
