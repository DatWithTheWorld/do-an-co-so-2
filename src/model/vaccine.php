<?php 
class vaccine{
    public $vid;
    public $vname;
    public $vdescription;
    public $vprice;
    function __construct($vid,$vname,$vdescription,$vprice){
        $this->vid = $vid;
        $this->vname = $vname;
        $this->vdescription = $vdescription;
        $this->vprice = $vprice;
    }
    function set_vid($vid){
        $this->vid = $vid;
    }
    function set_vname($vname){
        $this->vname = $vname;
    }
    function set_vdescription($vdescription){
        $this->vdescription=$vdescription;
    }
    function set_vprice($vprice){
        $this->vprice = $vprice;
    }
    function get_vid(){
        return $this->vid;
    }
    function get_vname(){
        return $this->vname;
    }
    function get_vdescription(){
        return $this->vdescription;
    }
    function get_vprice(){
        return $this->vprice;
    }
    
}
?>