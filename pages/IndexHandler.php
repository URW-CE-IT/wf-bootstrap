<?php

/**
 * IndexHandler.php
 * 
 * Example Index Page Handler
 * 
 * @author Patrick Matthias Garske <patrick@garske.link>
 * @since 0.1
 */

use WebFramework as WF;

class IndexHandler extends WF\DefaultPageController {

    public function handleGet($params): string {
        $index_tpl = new WF\Template("index");
        $index_tpl->includeTemplate("bootstrap_head", new WF\Template("bootstrap_head"));
        $index_tpl->includeTemplate("bootstrap_js", new WF\Template("bootstrap_js"));
        
        return $index_tpl->output();
    }

}