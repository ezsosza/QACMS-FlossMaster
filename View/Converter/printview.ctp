<?php echo $this->Html->css('/floss_master/css/flossmaster'); 

echo $this->Html->link(__d('floss_master','Print this chart'),'#',
	array('class'=>'','onclick'=>"window.print(); return false;",'id'=>'printChartText'));
?>
<br/><br/>
<div id="printview">
<h1>
<?php echo $minta ?>
</h1>
<?php

$a = array();
for ($i = 0; $i < sizeof($results); $i++){
	if ($results[$i] == "EMPTY"){
		if($kep){ $a[sizeof($a)] = array($i+1, '','','','',''); } else
			{$a[sizeof($a)] = array($i+1, '','','','');}		
	} elseif ($results[$i] == "ERROR"){
		if($kep){ $a[sizeof($a)] = array(__d('floss_master','No match'), '','','','',''); } else
			{$a[sizeof($a)] = array(__d('floss_master','No match'), '','','','');}
	} else{

	if ($kep){
	
		$a[sizeof($a)] = array($i+1, $results[$i]['Colorcode']['dmc'],
		$results[$i]['Colorcode']['anchor'],
		$results[$i]['Colorcode']['venus'],$this->Html->image("/FlossMaster/img/".$results[$i]['Colorcode']['venus'].'.jpg', array('id' => 'kep')),$this->Form->checkbox('megvan'));
	
	} else {
		$k = $i+10;
		$a[sizeof($a)] = array($i+1, $results[$i]['Colorcode']['dmc'],
		$results[$i]['Colorcode']['anchor'],
		$results[$i]['Colorcode']['venus'],$this->Form->checkbox('megvan'));
	
	}
	
		}
}
echo '<table id="printviewtable">';
if($kep){
	echo $this->Html->tableHeaders(array('','Dmc', 'Anchor', 'Venus', __d('floss_master','Picture'),__d('floss_master','Available')));
} else {
	echo $this->Html->tableHeaders(array('','Dmc', 'Anchor', 'Venus',__d('floss_master','Available')));
}
echo $this->Html->tableCells($a);
echo '</table>';
echo "</div>";