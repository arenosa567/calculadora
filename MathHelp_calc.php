<?php
class MathHelp_calc{
	
		  static function operations_count($string){
	   	    $nop = 0;
			$suma = substr_count($string,"+");
			$resta = substr_count($string,"-");
			$multiplicacion = substr_count($string,"*");
			$division = substr_count($string,"/");
            $exponente = substr_count($string,"^");
            $raiz =  substr_count($string,"r");
            $tantoporciento = substr_count($string,"%");  
			$nop = $suma+$resta+$multiplicacion+$division+$exponente+$raiz+$tantoporciento; 
			return $nop;
		}
		static function getOpp($string){
			$opp=""; $n = 0;	
			for($x=0; $x<strlen($string); $x++){
				$character = $string[$x];
				if($character=="+" || $character=="-" || $character=="*" || $character=="/" || $character=="^" ||
                  $character=="r" || $character=="%"){
					$opp[0]=$character;
					$opp[1]=$x;
					$x=strlen($string);
					$opp = $opp[0].$opp[1]; 
				}elseif(is_numeric($character)){
				 $n++;	
				}else{
				$opp = self::ERROR;
				}
			}
			if(empty($opp) || $opp=="" || $opp==self::ERROR || $n == strlen($string)){$opp = self::ERROR;} 
			return $opp;
		}
		  static function singleOperation($numbers){ 
			$opp = self::getOpp($numbers);
			$op = $opp[0];
			$positionMiddle = 0;
			$result = 0; 
		
			switch($op){
				case self::SUM: 
					$positionMiddle = strpos($numbers,self::SUM);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
                
					if(is_numeric($var1) && is_numeric($var2)){
						$result = $var1+$var2;
					}else{
						$result = self::ERROR;}
					break;
				case self::SUBTRACTION:
					$positionMiddle = strpos($numbers,self::SUBTRACTION);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
					if(is_numeric($var1) && is_numeric($var2)){$result = $var1-$var2;}else{$result = self::ERROR;}
					break;
				case self::MULTIPLICATION: 
					$positionMiddle = strpos($numbers,self::MULTIPLICATION);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
					if(is_numeric($var1) && is_numeric($var2)){
						$result = $var1*$var2;
					}else{
						$result = self::ERROR;
					}
					break;
				case self::DIVISION: 
					$positionMiddle = strpos($numbers,self::DIVISION);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
					if(is_numeric($var1) && is_numeric($var2)){
						if($var2!=0){
							$result = $var1/$var2;
						}else{
							$result = self::ERROR;

						}
					}else{
						$result= self::ERROR;
					}
					break;
                case self::EXPONENTE: 
					$positionMiddle = strpos($numbers,self::EXPONENTE);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
					if(is_numeric($var1) && is_numeric($var2)){
						$result = pow(($var1),($var2));
					}else{
						$result = self::ERROR;
					}
					break;
                case self::RAIZ: 
					$positionMiddle = strpos($numbers,self::RAIZ);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
					if(is_numeric($var1) && is_numeric($var2)){
						if($var2!=0){
							$result = pow(($var1),(1/$var2));
						}
						else{
						   $result = self::ERROR;

						}
					}else{
						$result= self::ERROR;
					}
					break;
                case self::TANTOPORCIENTO: 
					$positionMiddle = strpos($numbers,self::TANTOPORCIENTO);
					$var1 = substr($numbers,0,$positionMiddle);
					$var2 = substr($numbers,$positionMiddle+1);
					if(is_numeric($var1) && is_numeric($var2)){
						if($var2!=0){
							$result = ($var1)*($var2/100);
						}else{
							$result = self::ERROR;

						}
					}else{
						$result= self::ERROR;
					}
					break;
				default: $result = self::ERROR;
			} 
			return $result;
		}
		
		 static function multiOperations($data,$nop){
			$string = $data;
	        $opp1=""; $opp2=""; $var1=""; $var2=""; $result=0; $op="";
			
			for($i=0; $i<$nop; $i++){
				if($i==0){
					$opp1=self::getOpp($string);
					$opp2=self::getOpp(substr($string,$opp1[1]+1));
					$op=$opp1[0];
					$var1=substr($string,0,$opp1[1]);
					$var2=substr($string,$opp1[1]+1,$opp2[1]);
					$string = substr($string,$opp1[1]+1);
					$numbers = $var1.$op.$var2;
					$result = self::singleOperation($numbers);
					    if(is_numeric($result)){$string=substr($string,$opp2[1]);}else{$i=$nop;$result = self::ERROR;}
				}else{
					$opp1=self::getOpp($string);
					$opp2=self::getOpp(substr($string,$opp1[1]+1));
					$op=$opp1[0];
					    if($opp2 != self::ERROR && is_numeric($opp2[1])){
							$var1 = $result;
							$var2 = substr($string,$opp1[1]+1,$opp2[1]);
							$string=substr($string,$opp2[1]);
							$numbers = $var1.$op.$var2;
							$result = self::singleOperation($numbers);
							if(is_numeric($result)){$string=substr($string,$opp2[1]);}else{$i=$nop; $result= self::ERROR;}
						}else{
							$var1=$result;
							$var2=substr($string,$opp1[1]+1);
							$numbers = $var1.$op.$var2;
							$result=self::singleOperation($numbers);
							$i=$nop;
						}
				}
			} 
			return $result;
		}
		
         static function calculate_str($string){
		    $nop = 0;
			$result = 0;
			$nop = self::operations_count($string); 			
			if ($nop==0){
		        if(is_numeric($string)){ $result = $string; } else { $result = self::ERROR;}
			}elseif($nop==1){ 
				  $result = self::singleOperation($string);
				  if(is_numeric($result)){ $result = $result;  }else{ $result = self::ERROR;}
			}else{
				$result = self::multiOperations($string,$nop);
				if(is_numeric($result)){ $result = $result; }else{  $result = self::ERROR;}
			}
			return $result;
		}	
const SUM="+"; const SUBTRACTION= "-"; const MULTIPLICATION = "*"; const DIVISION="/"; const EXPONENTE="^";       const RAIZ="r"; const TANTOPORCIENTO="%"; 
const ERROR="NaN";	
private static $version = "v1.0";	
	}