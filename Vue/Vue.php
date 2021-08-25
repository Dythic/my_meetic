<?php

class Vue {

    private $file;
    private $title;
  
    public function __construct($action) {
        $this->file = "Vue/vue" . $action . ".php";
    }
  
    public function generate($datas) {
        $contents = $this->generateFile($this->file, $datas);
        $vue = $this->generateFile('Vue/template.php',
        array('title' => $this->title, 'contents' => $contents));
        echo $vue;
    }
  
    private function generateFile($file, $datas) {
        if (file_exists($file)) {
            extract($datas);
            ob_start();
            require $file;
            return ob_get_clean();
        } else {
            throw new Exception("'$file' file not found");
        }
    }   
}