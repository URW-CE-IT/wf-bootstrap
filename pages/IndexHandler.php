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
        return $index_tpl->output();
    }

}