<?php

require 'vendor/autoload.php'; 
use QL\QueryList; 

class QueryUtils {

    private static function getHtml($url) {
        if (is_null($url) or empty($url)) {
            return;
        }
        $html = QueryList::get($url)->encoding('UTF-8')::getHtml();
        return $html;
    }

    public static function getCopyContent($url, $type) {
        if (is_null($url) or empty($url) or is_null($type)) {
            return;
        }
        $html = self::getHtml($url);
        if ($type === 0) {
            return self::getAlibaba($html);
        } else if ($type === 1) {
            return self::getTmall($html);
        } else if ($type === 2) {
            return self::getTaobao($html);
        }
    }

    /*
     * Get Tmall product information
     */
    private static function getTmall($html) {
        phpQuery::newDocumentHTML($html);

        // title
        $title = pq('div.tb-detail-hd > h1')->find('a')->text();
        
        // properties
        $propertyList = array();
        $DOM_property = pq('div.tb-sku .tm-sale-prop');
        foreach ($DOM_property['ul'] as $dom_ul_prop) {
            $DOM_UL_property = pq($dom_ul_prop);
            $propTitle = $DOM_UL_property->attr('data-property');
            $propertyList[$propTitle] = array();
            foreach ($DOM_UL_property['li'] as $dom_li_prop) {
                $DOM_A_property = pq($dom_li_prop)->find('a');
                $value = $DOM_A_property->text();
                $value = self::stripStr($value);
                // for color classification, there are some images
                $imgStyle = $DOM_A_property->attr('style');
                if (!is_null($imgStyle) && !empty($imgStyle)) {
                    array_push($propertyList[$propTitle], array('value' => $value, 'img' => $imgStyle));
                } else {
                    array_push($propertyList[$propTitle], array('value' => $value));
                }
            }
        }

        // attributes
        $attributeList = array(
            '产品参数' => array()
        );
        $DOM_attribute = pq('div.attributes-list');
        $DOM_UL_attribute = $DOM_attribute->find('ul#J_AttrUL');
        foreach ($DOM_UL_attribute['li'] as $dom_li_attr) {
            $attr = pq($dom_li_attr)->text();
            $attr = self::stripStr($attr);
            $attrKV = explode(":", $attr);
            array_push($attributeList['产品参数'], array($attrKV[0] => $attrKV[1]));
        }

        return array(
            'title' => $title,
            'properties' => $propertyList,
            'attributes' => $attributeList
        );
    }

    /*
     * Get Taobao product information
     */
    private static function getTaobao($html) {
        phpQuery::newDocumentHTML($html);
        
        // title
        $title = pq('div.tb-title > h3')->text();
        $title = self::stripStr($title);
        
        // properties
        $propertyList = array();
        $DOM_property = pq('div.tb-skin .tb-prop');
        foreach ($DOM_property['ul'] as $dom_ul_prop) {
            $DOM_UL_property = pq($dom_ul_prop);
            $propTitle = $DOM_UL_property->attr('data-property');
            $propertyList[$propTitle] = array();
            foreach ($DOM_UL_property['li'] as $dom_li_prop) {
                $DOM_A_property = pq($dom_li_prop)->find('a');
                $value = $DOM_A_property->text();
                $value = self::stripStr($value);
                // for color classification, there are some images
                $imgStyle = $DOM_A_property->attr('style');
                if (!is_null($imgStyle) && !empty($imgStyle)) {
                    array_push($propertyList[$propTitle], array('value' => $value, 'img' => $imgStyle));
                } else {
                    array_push($propertyList[$propTitle], array('value' => $value));
                }
            }
        }

        // attributes
        $attributeList = array(
            '产品参数' => array()
        );
        $DOM_attribute = pq('ul.attributes-list');
        foreach ($DOM_attribute['li'] as $dom_li_attr) {
            $attr = pq($dom_li_attr)->text();
            $attr = self::stripStr($attr);
            $attrKV = explode(":", $attr);
            array_push($attributeList['产品参数'], array($attrKV[0] => $attrKV[1]));
        }

        return array(
            'title' => $title,
            'properties' => $propertyList,
            'attributes' => $attributeList
        );
    }

    /*
     * Get 1688 product information
     */
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

    private static function stripStr($str) {
        return str_replace(array("\r\n", "\r", "\n", " ", "\t", "&nbsp;"), "", $str);
    }

}

?>