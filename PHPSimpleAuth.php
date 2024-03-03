<?php
  class PHPSimpleAuth{
    public function verify($in, $validate){
      foreach($validate as $vali){
        if(is_string($in) && !is_numeric($in)){
          if(str_contains($vali, "max:")){
            $maxVal = intval(explode(':', $vali)[1]);
            if(strlen($in) > $maxVal){
              return "Your inputted string is too long! The limit is {$maxVal} chars";
            }
          }

          if(str_contains($vali, "min:")){
            $minVal = intval(explode(':', $vali)[1]);
            if(strlen($in) < $minVal){
              return "Your inputted string is too short! The minimum is {$minVal} chars";
            }
          }

          if(str_contains($vali, "alphanumeric")){
            if(!$this->alphanum($in)){
              return "Your inputted string must be alphanumeric!";
            }
          }

          if(str_contains($vali, "required")){
            if(strlen(trim($in)) <= 0){
              return "You must input a string!";
            }
          }
        }
        
        if(is_numeric($in)){
          if(str_contains($vali, "max:")){
            $maxVal = intval(explode(':', $vali)[1]);
            if($in > $maxVal){
              return "Your inputted number is too long! The limit is {$maxVal}";
            }
          }

          if(str_contains($vali, "min:")){
            $minVal = intval(explode(':', $vali)[1]);
            if($in < $minVal){
              return "Your inputted number is too short! The minimum is {$minVal}";
            }
          }
        }

        if(str_contains($vali, "required")){
          if(is_null($in)){
            return "You must input a value!";
          }
        }
      }
      return true;
    }
    /*do not use this lmfao*/
    private function alphanum($string){
        return preg_match("/^[A-Za-z0-9]+$/", $string);
    }
  }
  $PHPSimpleAuth = new PHPSimpleAuth();
?>
