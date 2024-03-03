# PHPSimpleAuth

```php
$checkValidity1 = $PHPSimpleAuth->verify("real", ["required", "min:2", "max:5", "alphanumeric"]);
  if($checkValidity1){
    echo "string is valid fr\n";
  }else{
    echo $checkValidity1;
  }
  $checkValidity2 = $PHPSimpleAuth->verify(6, ["required", "min:2", "max:5"]);
  if($checkValidity2){
    echo "number is valid fr\n";
  }else{
    echo $checkValidity2;
  }
```
