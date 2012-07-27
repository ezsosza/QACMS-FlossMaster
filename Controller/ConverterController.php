<?php
class ConverterController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses = array('Colorcode');

	
    public function converter() {
	    $this->set("title_for_layout",__d('floss_master','FlossMaster'));	   
    }
    
    public function printview() {
   	    $this->set("title_for_layout",__d('floss_master','FlossMaster'));
   	    if (sizeof($this->request->data)==0){return;}
    	$count = sizeof($this->request->data['Colorcode'])-3; /* 3 at leszamolunk a count, minta es kep kulcsok miatt*/
    	$this->set('minta',$this->request->data['Colorcode']['Minta']);
    	$this->set('kep',$this->request->data['Colorcode']['kep']);
    	$results=array();
    	for ($i = 0; $i < $count; $i++){
    	
	    	$key = array('','');
		if ($this->request->data['Colorcode'][$i]['dmc'] != ''){
	     	     $key = array('dmc',$this->request->data['Colorcode'][$i]['dmc']);
		} elseif($this->request->data['Colorcode'][$i]['anchor'] != '') {
		     $key = array('anchor',$this->request->data['Colorcode'][$i]['anchor']);	
		} elseif($this->request->data['Colorcode'][$i]['venus'] != '') {
		     $key = array('venus',$this->request->data['Colorcode'][$i]['venus']);
		} else {
/*			$results[sizeof($results)] = "EMPTY";
			continue;*/break;
		}
		$result = $this->Colorcode->find('first', array(
        		'conditions' => array('Colorcode.'.$key[0] => $key[1])));
        	if ($result !=''){
		        $results[sizeof($results)] = $result; 	
		} else {
			$results[sizeof($results)] = "ERROR";
		}
	}
	$this->set('results',$results);
    }
}