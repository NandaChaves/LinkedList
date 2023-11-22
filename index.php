<?php
 class Nodo{
    public $data;

    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function getData(){
        return $this->data;
    }
 }

 class LinkedList{
    private $headNode;
    private $tailNode;

    public function __construct()
    {
        $this->headNode = null;
        $this->tailNode = null;
    }

    public function enqueue($data){
        $newNode = new Nodo($data);
        $newNode->next = $this->headNode;

        $this->headNode = $newNode;

        if($this->tailNode==null){
            $this->tailNode = $newNode;
        }
    }
    public function dequeue(){
        if($this->headNode==null){
            return;
        }
        $deleteNode = $this->headNode;

        $this->headNode = $this->headNode->next;

        if($this->headNode==null){
            $this->tailNode = null;
        }
    }

    public function printData(){
        $currentNode = $this->headNode;

        $print = "";

        while($currentNode != null){
            $print .= ",".$currentNode->getData();

            $currentNode = $currentNode->next;
        }

        echo substr($print,1),"\n";
    }

 }
 $ll = new LinkedList();
 $ll->enqueue("1.Jinx");
 $ll->enqueue("2.Violet");
 $ll->enqueue("3.Jace");
 $ll->enqueue("4.Mel");
 $ll->enqueue("5.Ekko");

 $ll->dequeue();

 $ll->printData();

?>