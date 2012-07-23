<?php echo $this->Html->css('/floss_master/css/flossmaster'); ?>
<?php

echo $this->Form->create(null,array('url' => array('controller' => 'Converter', 'action' => 'printview'),'inputDefaults' => array(
        'label' => false,
        'div' => false
    )));
echo '<h3 id="minta">';
echo $this->Form->input('Colorcode.Minta',array('value' => 'Minta','label'=>'Minta megnevezése:'));
echo "</h3>";    
$a = array();

for ($i = 0; $i < 10; $i++){
	$a[sizeof($a)] = array($i+1,$this->Form->input('Colorcode.'.$i.'.dmc',array('type' => 'text')),
		$this->Form->input('Colorcode.'.$i.'.anchor',array('type' => 'text')),
		$this->Form->input('Colorcode.'.$i.'.venus',array('type' => 'text')),
		$i+11,$this->Form->input('Colorcode.'.($i+10).'.dmc',array('type' => 'text')),
		$this->Form->input('Colorcode.'.($i+10).'.anchor',array('type' => 'text')),
		$this->Form->input('Colorcode.'.($i+10).'.venus',array('type' => 'text')));
}

echo '<table>';
echo $this->Html->tableHeaders(array('','Dmc', 'Anchor', 'Venus','','Dmc', 'Anchor', 'Venus'));
echo $this->Html->tableCells($a);
echo '</table>';

echo $this->Form->input('Colorcode.count',array('type' => 'hidden','value' => 20));
echo $this->Form->input('Colorcode.kep',array('type' => 'checkbox','checked'=>'checked','label'=>'Kepek megjelenitese'));
echo $this->Form->end('Convert');
echo "<br/>";
echo $this->Html->link('Usage', '/FlossMaster/pdf/Fonalmester.pdf');

 ?>