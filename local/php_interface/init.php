<?php
/**
 * Created by PhpStorm.
 * User: bgdnv
 * Date: 30.09.2018
 * Time: 14:07
 */
function test_dump($var, $die = false, $all = false)
{
    global $USER;
    if( ($USER->GetID() == 1) || ($all == true))
    {
        ?>
        <font style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></font><br>
        <?
    }
    if($die)
    {
        die;
    }
}
function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}