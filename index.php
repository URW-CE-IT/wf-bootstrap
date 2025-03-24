<?php
/**
 * index.php
 * 
 * @author Patrick Matthias Garske <patrick@garske.link>
 * @since 0.1
 */

include_once("WebFramework/autoload.php");
foreach(glob('pages/*.php') as $file) {
    include_once $file;
}

use WebFramework as WF;

define("PROJ_DIR", __DIR__);
define("DEBUG", 1);
define("ALLOW_INLINE_COMPONENTS", TRUE);

$path = "index";
if(isset($_GET["rpath"])){
    $path = $_GET["rpath"];
}

$rh = new WF\RoutingHandler();

$rh->register("index", new IndexHandler());

echo $rh->handle($path);