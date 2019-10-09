<?php
class Square{
    public $edge;
    function getEdge($edge)
    {
       
        $this->edge = $edge;
      
    }
    function Area()
    {
        return $this->edge * $this->edge;
    }

}
$e=new Square();
$e->getEdge(6);
echo $e->Area(), "\n";
?>