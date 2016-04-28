<?php

/**
 * Created by PhpStorm.
 * User: Bright
 * Date: 28/04/2016
 * Time: 12:23
 */
//include 'sidebar.php';
class main
{
    /**
     * main constructor.
     * @param $param
     */
    private $pageToRender;
    private $sidebar;
    function main ($param, $param2){
        $this->pageToRender = $param;
        $this->sidebar = $param2;
    }
    public function renderMainHtml(){
        echo "<div class=\"container\">
        <div class=\"row row-offcanvas row-offcanvas-right\">".$this->pageToRender->renderHtml().$this->sidebar->renderHtml()."</div><!--/row-->
        </div><!--/.container-->";
    }
}