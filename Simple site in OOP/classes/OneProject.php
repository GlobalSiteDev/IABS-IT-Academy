<?php

class OneProject
{
    const PROJECT_PATH = "./projects";
    const DELIMITER = "\n";
    public $title;
    public $content;
    public $projectFile;

    public function __construct($projectFile) {
        $content = file_get_contents(self::PROJECT_PATH . DIRECTORY_SEPARATOR . $projectFile);
        $exploded = explode(self::DELIMITER, $content);
        $this->title = $exploded[0];
        $this->content = $exploded[1];
        $this->preview = substr($exploded[1], 0, 300);
        $this->projectFile = $projectFile;
    }
    static public function getAll(){
        $projects = scandir(self::PROJECT_PATH);
        $result = array();
        foreach ($projects as $projectFile) {
            if ($projectFile != '.' and $projectFile != '..') {
                $result[] = new OneProject($projectFile);
            }
        }
        return $result;
    }
}