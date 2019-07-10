<?php
$str = file_get_contents('php://input');

file_put_contents('./cuo.xml',$str);

//$str = file_get_contents('./cuo.xml');

$xml = simplexml_load_string($str);

switch($xml->MsgType){
    case 'text':$this->text($xml);break;
}

function text($xml){
    echo '<xml>
          <ToUserName><![CDATA['.$xml->FromUserName.']]></ToUserName>
          <FromUserName><![CDATA['.$xml->ToUserName.']]></FromUserName>
          <CreateTime>'.time().'</CreateTime>
          <MsgType><![CDATA[text]]></MsgType>
          <Content><![CDATA['.$xml->Content.']]></Content>
        </xml>';
}
?>