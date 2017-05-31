<?php

namespace raphaelbsr\cardgridview;

use yii\web\AssetBundle;

/**
 * Description of SquareGridViewAsset
 *
 * @author rapha
 */
class CardGridViewAsset extends AssetBundle{
    
    //public $js;
    public $css = [
        'css/cardgridview.css'
    ];
    public $depends = ['yii\web\JqueryAsset'];
    
    public function init() {
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();
    }
    
}
