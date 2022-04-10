<?php

class Busca{

    public $left = null;
    public $right = null;

    public $list = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40];
    public $input = 19;

    public function busca($i){

        while($this->list[$i] != $this->input){

            if($this->list[$i] > $this->input){

                $this->left++;
                $this->list[$i] = $this->list[$i-$this->left];

            }

            if($this->list[$i] < $this->input){

                $this->right++;
                $this->list[$i] = $this->list[$i+$this->right];
                
            }
            print_r($this->list[$i]. "\n");
        }

        
    }
}

$e = new Busca();
$e->busca(39);