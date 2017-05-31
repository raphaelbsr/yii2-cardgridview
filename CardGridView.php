<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace raphaelbsr\cardgridview;

use \Yii;
use yii\grid\GridView;
use yii\helpers\Html;

/**
 * Description of SquareGridView
 *
 * @author rapha
 */
class CardGridView extends GridView {

    /**
     * @var string the default data card class if the class name is not explicitly specified when configuring a data column.
     * Defaults to 'yii\grid\DataCard'.
     */
    public $dataCardClass;
    public $card;
    public $layout = '{items}';

    /**
     * @var array the HTML attributes for the grid table element.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $tableOptions = ['class' => ''];

    /**
     * @var array the HTML attributes for the container tag of the grid view.
     * The "tag" element specifies the tag name of the container element and defaults to "div".
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'card-grid-view'];

    public function init() {
        parent::init();
        $this->initCard();
    }

    public function run() {
        parent::run();
        CardGridViewAsset::register($this->getView());
        //return "I9 Square Grid View in vendor";
        //return $this->render('_debug');
    }

    /**
     * Renders the data models for the grid view.
     */
    public function renderItems() {

        $cards = $this->renderCards();
        $content = array_filter([
            $cards,
        ]);
        return implode("\n", $content);
        //return Html::tag('div', implode("\n", $content), $this->tableOptions);
    }

    /**
     * Renders the cards.
     * @return string the rendering result.
     */
    public function renderCards() {

        $models = array_values($this->dataProvider->getModels());
        $keys = $this->dataProvider->getKeys();
        $cells = [];

        foreach ($models as $index => $model) {
            $key = $keys[$index];
            $cells[] = $this->card->renderCard($model, $key, $index);
        }

        if (empty($cells)) {
            return 'EMPTY';
        } else {
            return "<div class='flex-row row'>\n" . implode("\n", $cells) . "\n</div>";
            //return implode("\n", $cells);
        }
    }

    /**
     * Creates column objects and initializes them.
     */
    protected function initCard() {
//        if (empty($this->card)) {
//            $this->guessCard();
//        }
        if (is_string($this->card)) {
            $this->card = $this->createDataCard($this->card);
        } else {
            $this->card = Yii::createObject(array_merge([
                        'class' => $this->dataCardClass ?: DataCard::className(),
                        'grid' => $this,]
                                    , $this->card));
        }
    }

    /**
     * Creates a [[DataCard]] object based on a string in the format of "attribute:format:label".
     * @param string $text the column specification string
     * @return DataColumn the column instance
     * @throws InvalidConfigException if the column specification is invalid
     */
    protected function createDataCard($text) {
        if (!preg_match('/^([^:]+)(:(\w*))?(:(.*))?$/', $text, $matches)) {
            throw new InvalidConfigException('The card must be specified in the format of "attribute", "attribute:format" or "attribute:format:label"');
        }
        //echo serialize($matches);exit;
        return Yii::createObject([
                    'class' => $this->dataCardClass ?: DataCard::className(),
                    'grid' => $this,
                    'attribute' => $matches[1],
                    'format' => isset($matches[3]) ? $matches[3] : 'text',
                    'label' => isset($matches[5]) ? $matches[5] : null,
        ]);
    }

    /**
     * This function tries to guess the card to show from the given data
     * if [[card]] are not explicitly specified.
     */
//    protected function guessCard() {
//        $models = $this->dataProvider->getModels();
//        $model = reset($models);
//        if (is_array($model) || is_object($model)) {
//            foreach ($model as $name => $value) {
//                if ($value === null || is_scalar($value) || is_callable([$value, '__toString'])) {
//                    $this->columns[] = (string) $name;
//                }
//            }
//        }
//    }
}
