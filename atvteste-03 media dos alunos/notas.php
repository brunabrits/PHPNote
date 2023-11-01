<?php 

class Notas
{	
	private $bim1, $bim2, $bim3;

	
	public function getBim1(){
		return $this->bim1;
	}

	public function setBim1($bim1){
		$this->bim1= $bim1;
	}

	public function getBim2(){
		return $this->bim2;
	}

	public function setBim2($bim2){
		$this->bim2= $bim2;
	}
    
	public function getBim3(){
		return $this->bim3;
	}

	public function setBim3($bim3){
		$this->bim3= $bim3;
	}
	public function media()
	{
	 $media = ($this->bim1 + $this->bim2 + $this->bim3)/3;
	return $media;
	}
}