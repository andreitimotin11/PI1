<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 24.07.2017
 * Time: 20:41
 */
/*
 1. Напишите программу, которая составит и выведет в браузер таблицу истинности ( https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%B8%D1%81%D1%82%D0%B8%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8 ) для логических операторов &&, || и xor.
2. Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами. Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения.
3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его использовать как функцию?". Используйте руководство по языку, составьте и приложите примеры, иллюстрирующие ваше исследование.
4.*  Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени (null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции.
 * */
?>
<html>
<head>
    <title> Test</title>
</head>
<body>
<?php
$a = true;
$b = false;
function showBoolTable($operator)
{
	?>
    <table border="1">
        <tr>
            <td>a</td>
            <td>b</td>
            <td>a<?= $operator ?> b</td>
        </tr>
        <tr>
					<?php
					for ($i = 0;
					$i < 2;
					$i++):
					for ($j = 0;
					$j < 2;
					$j++):
					?>
            <td><?= floatval($i) ?></td>
            <td><?= floatval($j) ?></td>
            <td><?php
	            $res = 0;
              switch ($operator) {
								case '||': {
									$res = $i || $j;
									break;
								}
								case '&&': {
									$res = $i && $j;
									break;
								}
								case 'xor': {
									$res = ($i xor $j);
									break;
								}
							}
							echo intval($res);
              
							
							?></td>

        </tr>
			<?php
			endfor;
			endfor;
			?>
    </table>
	<?php
}

showBoolTable('||');
showBoolTable('&&');
showBoolTable('xor');

function discriminant($q, $w, $c)
{
	$res = 0;
	$d = $w * $w - 4 * $q * $c;
	var_dump($d);
	var_dump(sqrt($d));
	
	if ($d >= 0) {
		$res = [
			(-$w + sqrt($d)) / (2 * $q),
			(-$w - sqrt($d)) / (2 * $q)
		];
	}
//	var_dump($res);
	return $res;
}

echo discriminant(1, 3, -4)[0];
echo discriminant(1, 3, -4)[1];
echo '<br>';
echo discriminant(2, 4, -7)[0];
echo discriminant(2, 4, -7)[1];
echo '<br>';
echo discriminant(1, 6, 9)[0];
echo discriminant(1, 6, 9)[1];
function getGender($a){
    if($a[strlen($a)-1] == 'a'){
	    return 'f';
    }
    return 'm';
}
assert(getGender('Alina') == 'f' );
assert(getGender('Andrei') == 'm');
assert(getGender('Viorica') == 'f');


?>




</body>
</html>