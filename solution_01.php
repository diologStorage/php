//В массив А(N,М) после первого отрицательного элемента каждого  столбца  вставить  число, 
//равное  минимальному  элементу  этого  столбца.  Если  столбец  не  содержит  отрицательных  элементов, 
//то  вставить  это  число перед первым элементом столбца.  

$a = array(2, 21, 3, 1, 1);
$b = array(6, 2, 9, 9, -10);
$c = array(12, -13, 18, 14, 15);
$d = array(12, 8, 21, 19, 30);
$e = array(22, -22, 24, 27, -27);

$arr = array($a, $b, $c, $d, $e);

for($i = 0; $i < count($arr[0]); $i++) {
    $indexNeg = 0;
    $min = $arr[0][$i];
    $flagFirst = true;

  	for($q = 0; $q < count($arr); $q++) {
         if($arr[$q][$i] < $min && $arr[$q][$i] != ''){
             $min = $arr[$q][$i]; 			
        }
        if($arr[$q][$i] < 0 && $flagFirst) { 			
            $flagFirst = false;
            $indexNeg = $q;
        }
  	}

    for($j = count($arr) - 1; $j > $indexNeg; $j--){
        $arr[$j + 1][$i] = $arr[$j][$i];
        $arr[$j][$i] = $arr[$j - 1][$i];
    }

  	if($indexNeg == 0){
	    	$arr[$indexNeg][$i] = $min;		
  	} else{
	    	$arr[$indexNeg + 1][$i] = $min;
	}
	
}
