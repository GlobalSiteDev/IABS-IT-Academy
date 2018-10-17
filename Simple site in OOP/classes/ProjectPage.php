<?php
class ProjectPage extends Page
{
    public function getContent(){
        $project = new OneProject($_GET['file']);
        $this->_renderH1($project->title);
        $this->_renderProject($project->content);
    }
    function _renderH1($text) {
        echo "<h1>", $text, "</h1>";
    }
    function _renderProject($text) {
        echo "<article>", $text, "</article>";
    }
}