<?php 

	$table = array(
		array(
			'id' => 1,
			'name' => 'Дима',
			'age' => '23',
			'salary' => '400'
		),
		array(
			'id' => 2,
			'name' => 'Петя',
			'age' => '25',
			'salary' => '500'
		),
		array(
			'id' => 3,
			'name' => 'Вася',
			'age' => '25',
			'salary' => '500'
		),
		array(
			'id' => 4,
			'name' => 'Коля',
			'age' => '30',
			'salary' => '1000'
		),
		array(
			'id' => 5,
			'name' => 'Иван',
			'age' => '27',
			'salary' => '500'
		),
		array(
			'id' => 6,
			'name' => 'Кирилл',
			'age' => '28',
			'salary' => '1000'
		)
	);

	$tableKeys = array_keys($table[0]);



	$data = 'id:name:age
1:Ваня:8
2:Коля:10
3:Саша:5';


$strings = explode("\n", $data);
$keys = explode(":", array_shift($strings));
$row = [];
$result = [];

foreach($strings as $string){

	$lines = explode(":", $string);

	foreach($lines as $i => $line){

		$row[$keys[$i]] = $line;

	}
	
	$result[] = $row;
}
var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<style type="text/css">
	
		table {
			border-collapse: collapse; 
		}

		
		td, th {
			padding: 5px 0;
			width: 100px;
			text-align: center;
			border: 1px solid #000;
		}
	</style>
		

	<table>
		
				<thead>
					<tr>
						<?php foreach ($tableKeys as $valueKey): ?>
							<th><?=$valueKey?></th>
						<?php endforeach ?>
					</tr>
				</thead>						
				<tbody>
					
						<?php foreach ($table as $value): ?>
							<tr>
								<?php foreach ($tableKeys as $valueKey): ?>
									<td><?=$value[$valueKey]?></td>
								<?php endforeach ?>
							</tr>
						<?php endforeach ?>	
				</tbody>
	
	</table>


	
</body>
</html>