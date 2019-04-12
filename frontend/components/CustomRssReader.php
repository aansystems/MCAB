<?php
namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class CustomRssReader extends Widget {

    public $channel;
    public $itemView  = 'item';
    public $pageSize  = 20;
    public $wrapClass = 'rss-wrap';
    public $wrapTag   = 'div';
    public $indexName = 'entry';

    public function run() {
        try {
            $items = [];
            $xml   = simplexml_load_file($this->channel); // suppress errors if feed is invalid

            if ($xml === false) {
                return 'Error parsing feed source: ' . $this->channel;
            }

//            foreach ($xml->{$this->indexName} as $item) {
            foreach ($xml->channel->item as $item) {
//                print_r($item);
                $items[] = $item;
            }

            \yii\helpers\ArrayHelper::multisort($items, function(\SimpleXMLElement $item) {
                return $item->published;
            }, SORT_ASC);
            
//            echo "<pre>";
//            print_r($this->channel);
//            echo "<br>";
//            print_r($xml);
//            print_r($items);

            // return data to VW as dataProvider
            return $this->render(
                'wrap',
                [
                    'dataProvider' => new \yii\data\ArrayDataProvider([
                        'allModels'  => $items,
                        'pagination' => [
                            'pageSize' => $this->pageSize,
                        ],
                    ])
                ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}