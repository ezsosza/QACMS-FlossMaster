<?php echo $this->Html->css('/floss_master/css/flossmaster'); ?>
<?php
echo $this->Html->script('/FlossMaster/js/flossmaster.js');

echo $this->Form->create(null,array('url' => array('controller' => 'Converter', 'action' => 'printview'),'inputDefaults' => array(
        'label' => false,
        'div' => false
    )));
echo '<h3 id="pattern">';
echo $this->Form->input('Colorcode.Minta',array('value' => __d('floss_master','Pattern'),'label'=>__d('floss_master','Name of pattern:')));
echo "</h3>";    
$a = array();

for ($i = 0; $i < 10; $i++){
	$a[sizeof($a)] = array((2*$i+1),$this->Form->input('Colorcode.'.(2*$i).'.dmc',array('type' => 'text')),
		$this->Form->input('Colorcode.'.(2*$i).'.anchor',array('type' => 'text')),
		$this->Form->input('Colorcode.'.(2*$i).'.venus',array('type' => 'text')),
		(2*$i+2),$this->Form->input('Colorcode.'.(2*$i+1).'.dmc',array('type' => 'text')),
		$this->Form->input('Colorcode.'.(2*$i+1).'.anchor',array('type' => 'text')),
		$this->Form->input('Colorcode.'.(2*$i+1).'.venus',array('type' => 'text')));
}

echo '<table id="converterTable">';
echo $this->Html->tableHeaders(array('','Dmc', 'Anchor', 'Venus','','Dmc', 'Anchor', 'Venus'));
echo $this->Html->tableCells($a);
echo '</table>';

echo $this->Form->button(__d('floss_master','Add row'), array('type' => 'button','onclick'=>"addRow('converterTable')"));
echo "<br/>";
echo $this->Form->input('Colorcode.count',array('type' => 'hidden','value' => 22));
echo $this->Form->input('Colorcode.kep',array('type' => 'checkbox','checked'=>'checked','label'=>__d('floss_master','Show pictures')));
echo $this->Form->end(__d('floss_master','Convert'));
echo "<br/>";
echo $this->Html->link(__d('floss_master','Usage'), '/FlossMaster/pdf/Fonalmester.pdf');

 ?>