
<?php
class Student {
    private $name;   // hidden data

    // setter
    public function setName($name) {
        $this->name = $name;
    }

    // getter
    public function getName() {
        return $this->name;
    }
}

$s = new Student();
$s->setName("Aashish");
echo $s->getName();
echo "\n";
$n = new Student();
$n->setName("Aashisx");
echo $n->getName();
?>
    