<?php
class auto {
    public $moc;
    public $marka;
    public $model;

    function __construct($moc) {
        $this->moc = $moc;
    }
    function __destruct(){
        echo "Auto ma moc {$this->moc}.";
    }
}
$fiacik = new auto("Fiat");
$fiacik->moc = '100KM'; // OK
$fiacik ->marka = 'fiat'; // ERROR
$fiacik ->model = 'jakistam'; // ERROR
?>