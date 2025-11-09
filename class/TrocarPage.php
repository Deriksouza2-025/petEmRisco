<?php
class TrocarPages {
    private $URL;

    public function __construct($URL){
        echo $this->setURL($URL);
        echo $this->getPage();
    }

    private function setURL($URL){
        $this->URL = $URL;
        if (isset($_GET['page']) && preg_match('/^[a-zA-Z0-9_-]+$/', $_GET['page'])) {
            $this->URL = $_GET['page'];
        } else {
            $this->URL = 'home'; // página padrão
        }
    }

    public function getPage(){
        echo $file = "./pages/{$this->URL}.php";

        if (file_exists($file)) {
            include $file;
        } else {
            include "./pages/404.php";
        }
    }
}
?>