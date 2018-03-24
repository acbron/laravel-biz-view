<?php

require 'vendor/autoload.php'; 
use QL\QueryList; 

class QueryUtils {

    // products
    public static $ALIBABA = 0;
    public static $TAOBAO = 1;
    public static $TMALL = 2;

    // map
    public static $SELECTOR = array(
        0 => array(
            0 => 'div#mod-detail-title > h1'
        )
    );

    public static function getElements($url, $site) {
        $html = QueryList::get($url);
        if ($site === self::$ALIBABA) {
            self::getAlibaba($html);
        }       
        return '';
    }

    private static function getAlibaba($html) {
        $encodedHtml = $html->encoding('UTF-8', 'GB2312');

        // title
        $title = $encodedHtml
            ->find('div#mod-detail-title > h1')
            ->text();
        
        // price
        $priceKey = $encodedHtml
            ->find('td.price-title')->text();
        $priceValue = $encodedHtml->find('tr.price span')->text();

        // amount
        $amountKey = $encodedHtml
            ->find('td.amount-title')->text();
         $amountValue = $encodedHtml->find('tr.amount span')->text();

        // detail
        $detail = $encodedHtml
            ->find('div.mod-detail-attributes table')
            ->text();
        $detailArray = preg_split('/[\s,]+/', $detail);

        // image
        $imageArray = array();
        foreach( pq("div.tab-content-container li.tab-trigger div.vertical-img") as $imgDivs ) {
            foreach( pq("img", $imgDivs) as $imgDiv ) {
                array_push($imageArray, $imgDiv);
            }
        }

        // classification

        echo $priceValue . $priceKey;
        echo $amountKey . $amountValue;
        // echo gettype($imageHtml);
        // echo $imageHtml;
    }
}

?>