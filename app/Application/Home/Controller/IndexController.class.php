<?php
namespace Home\Controller;
use Think\Controller;
use Home\Controller\CommonController;
class IndexController extends CommonController {
    
    public function index(){
    	$result = array();
    	$field = array("id", "name"); //定义需要调用的字段
        $where = array();
        $limit = 6;
        $where['ispart'] = 3;
        $channelList = M("channel")->field($field)->where($where)->limit($limit)->select();
        // var_dump($channelList);
        foreach ($channelList as $key => $item) {
        	$chItem = array();
        	$channel_id=$item['id'];
        	$chItem['id'] = $channel_id;
        	$chItem['name'] = $item['name'];
			$where = array();
	        $where['channel_id'] = $channel_id;
			$where['status'] = 2;
	        $limit = 10;
	        $field = array("id", "title","inputtime");
	        $articles = M("articles")->field($field)->where($where)->limit($limit)->select();
	        $lis = array();
	        foreach ($articles as $key => $article) {
	        	$li = array();
	        	$li['id'] = $article['id'];
	        	$li['title'] = $article['title'];
	        	$li['time'] = $article['inputtime'];
	        	$lis[$key] = $li;
	        }
			$chItem['li'] = $lis;
	        $result[$key] = $chItem;
		}
		// var_dump($result);
        $this->assign('result',$result);
		
		$field = array( "valuename","value");
		$where = array();
		$where['groupid']=1;
		$configs = M("config")->field($field)->where($where)->select();
		$configInfo=array();
		foreach ($configs as $key => $item) {
			$key = $item["valuename"];
			$val = $item["value"];
			$configInfo[$key] = $val;
		}
		$this->assign('config',$configInfo);
        $this->display();
    }
}