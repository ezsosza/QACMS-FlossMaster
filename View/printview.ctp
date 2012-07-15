<div id="printview">
<h1>
<?php echo $minta ?>
</h1>
<?php

$a = array();
for ($i = 0; $i < 20; $i++){
	if ($results[$i] == "EMPTY"){
		if($kep){ $a[sizeof($a)] = array($i+1, '','','','',''); } else
			{$a[sizeof($a)] = array($i+1, '','','','');}		
	} elseif ($results[$i] == "ERROR"){
		if($kep){ $a[sizeof($a)] = array("Nincs találat", '','','','',''); } else
			{$a[sizeof($a)] = array("Nincs találat", '','','','');}
	} else{

	if ($kep){
	
		$a[sizeof($a)] = array($i+1, $results[$i]['Colorcode']['dmc'],
		$results[$i]['Colorcode']['anchor'],
		$results[$i]['Colorcode']['venus'],$this->Html->image($results[$i]['Colorcode']['venus'].'.jpg', array('id' => 'kep')),$this->Form->checkbox('megvan'));
	
	} else {
		$k = $i+10;
		$a[sizeof($a)] = array($i+1, $results[$i]['Colorcode']['dmc'],
		$results[$i]['Colorcode']['anchor'],
		$results[$i]['Colorcode']['venus'],$this->Form->checkbox('megvan'));
	
	}
	
		}
}

echo '<table>';
if($kep){
	echo $this->Html->tableHeaders(array('','Dmc', 'Anchor', 'Venus', 'Kép','Készlet'));
} else {
	echo $this->Html->tableHeaders(array('','Dmc', 'Anchor', 'Venus','Készlet'));
}
echo $this->Html->tableCells($a);
echo '</table>';
echo "</div>";