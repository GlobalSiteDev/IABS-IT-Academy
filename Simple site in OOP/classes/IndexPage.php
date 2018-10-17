<?php
class IndexPage extends Page
{
    public function getContent()
    {
        $this->_renderProjectList();
    }
    protected function _renderProjectList(){
        $projects = OneProject::getAll();
        if (empty($projects)) {
            echo "Проектов нет";
            return;
        }
        foreach ($projects as $project) {
            require_once "div.php";
        }
    }
}