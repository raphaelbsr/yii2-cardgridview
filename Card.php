<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace raphaelbsr\cardgridview;

use Closure;
use yii\base\Object;
use yii\helpers\Html;
use \yii\grid\Column;

/**
 * Description of Card
 *
 * @author rapha
 */
class Card extends Column {
        
    /**
     * Renders a card with the given data model and key.
     * @param mixed $model the data model to be rendered
     * @param mixed $key the key associated with the data model
     * @param int $index the zero-based index of the data model among the model array returned by [[dataProvider]].
     * @return string the rendering result
     * 
     * Method based in Column renderdDataCell
     */
    public function renderCard($model, $key, $index) {
        
        if ($this->contentOptions instanceof Closure) {
            $options = call_user_func($this->contentOptions, $model, $key, $index, $this);
        } else {
            $options = $this->contentOptions;
        }
        
        //return $this->renderDataCardContent($model, $key, $index);
        
        $temp = '<div class="thumbnail">
                        <div class="caption">
                            <div class="text-right"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></div>
                            <div class="table-number text-center">'.$this->renderDataCardContent($model, $key, $index) .'</div>
                        </div>
                </div>';
        
        return Html::tag('div', $temp, $options);
        
        //return Html::tag('div', $this->renderDataCardContent($model, $key, $index), $options);
        
    }

    public function renderDataCardContent($model, $key, $index) {

        if ($this->content !== null) {
            return call_user_func($this->content, $model, $key, $index, $this);
        } else {
            return $this->grid->emptyCell;
        }
    }

}
