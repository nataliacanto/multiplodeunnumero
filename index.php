<?php //Calcula si un número es múltiplo de uno dado

function isMultiple($number,$numberMultiple){
        $multiple = $number % $numberMultiple;
        if ($multiple == 0){
            return true;
        }else{
            return false;
        }
    }
?>
<?php 
for ($i=1;$i<=100;$i++){
            if (isMultiple($i, 3)){
                echo 'Fizz '; ?>              
				<br>
            <?php }else if (isMultiple($i, 5)){
                echo 'Buzz '; ?>
				<br>
            <?php }else if ( isMultiple($i, 3) && isMultiple($i, 5) ){			
				echo 'FizzBuzz '; ?>
				<br>
			<?php } else {
                echo $i; ?>
				<br>
            <?php }
        }
?>


