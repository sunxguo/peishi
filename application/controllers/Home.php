<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper("base");
		$this->load->library('GetData');
	}
	public function index(){
		$data=array();
		//滚动
		$parameters=array(
			'result'=>'data',
			'column'=>1,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['sliders']=$this->getdata->getEssays($parameters);
		//轻断食果蔬汁
		$parameters=array(
			'result'=>'data',
			'column'=>2,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['qingduanguoshus']=$this->getdata->getEssays($parameters);
		//"沛时"轻断食果蔬汁3天变美计划
		$parameters=array(
			'result'=>'data',
			'column'=>19,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['santianbianmei']=$this->getdata->getEssays($parameters);
		//首页-每日六瓶（3天变美计划下面）
		$parameters=array(
			'result'=>'data',
			'column'=>20,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['meiriliuping']=$this->getdata->getEssays($parameters);
		//首页-部分评论展示右上部banner（每日六瓶下面）
		$parameters=array(
			'result'=>'data',
			'column'=>21,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['bufenpinglunyoushang']=$this->getdata->getEssays($parameters);
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//沛时左侧滚动图
		$parameters=array(
			'result'=>'data',
			'column'=>3,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['peishizuoce']=$this->getdata->getEssays($parameters);
		//沛时右侧'论坛'最新三条
		$parameters=array(
			'result'=>'data',
			'column'=>5,
			'limit'=>array('limit'=>3,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['comment']=$this->getdata->getEssays($parameters);
		//'品牌活动'最新三条
		$parameters=array(
			'result'=>'data',
			'column'=>6,
			'limit'=>array('limit'=>3,'offset'=>0),
			'orderBy'=>array('time'=>'DESC')
		);
		$data['pinpaihuodong']=$this->getdata->getEssays($parameters);
		$this->load->view('home/index',$data);
	}
	public function product(){
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
			$this->load->view('redirect',array('info'=>'地址错误！'));
			return false;
		}
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		$id=$_GET['id'];
		$data['product']=$this->getdata->getContent('essay',$id);
		$this->load->view('home/product',$data);
	}
	public function essay(){
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
			$this->load->view('redirect',array('info'=>'地址错误！'));
			return false;
		}
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//'商品列表'
		$parameters=array(
			'result'=>'data',
			'column'=>4,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['products']=$this->getdata->getEssays($parameters);
		$id=$_GET['id'];
		$data['essay']=$this->getdata->getContent('essay',$id);
		$this->load->view('home/essay',$data);
	}
	public function productlist(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//'商品列表'
		$parameters=array(
			'result'=>'data',
			'column'=>4,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['products']=$this->getdata->getEssays($parameters);
		$this->load->view('home/productlist',$data);
	}
	public function comment(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//'论坛'
		$parameters=array(
			'result'=>'data',
			'column'=>5,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['comments']=$this->getdata->getEssays($parameters);
		$this->load->view('home/comment',$data);
	}
	public function service(){
		$data=array();
		//品牌理念-品牌信念-1
		$parameters=array(
			'result'=>'data',
			'column'=>7,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['service1']=$this->getdata->getEssays($parameters);
		//品牌理念-品牌信念-2
		$parameters=array(
			'result'=>'data',
			'column'=>8,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['service2']=$this->getdata->getEssays($parameters);
		//品牌理念-品牌信念-3
		$parameters=array(
			'result'=>'data',
			'column'=>9,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['service3']=$this->getdata->getEssays($parameters);
		//品牌理念-品牌信念-4
		$parameters=array(
			'result'=>'data',
			'column'=>10,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['service4']=$this->getdata->getEssays($parameters);
		//品牌理念-品牌信念-5
		$parameters=array(
			'result'=>'data',
			'column'=>11,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['service5']=$this->getdata->getEssays($parameters);
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//'论坛'
		$parameters=array(
			'result'=>'data',
			'column'=>5,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['comments']=$this->getdata->getEssays($parameters);
		$this->load->view('home/service',$data);
	}
	public function productservice(){
		$data=array();
		//品牌理念-产品工艺-1
		$parameters=array(
			'result'=>'data',
			'column'=>12,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['productservice1']=$this->getdata->getEssays($parameters);
		//品牌理念-产品工艺-2
		$parameters=array(
			'result'=>'data',
			'column'=>13,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['productservice2']=$this->getdata->getEssays($parameters);
		//品牌理念-产品工艺-3
		$parameters=array(
			'result'=>'data',
			'column'=>14,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['productservice3']=$this->getdata->getEssays($parameters);
		//品牌理念-产品工艺-4
		$parameters=array(
			'result'=>'data',
			'column'=>15,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['productservice4']=$this->getdata->getEssays($parameters);
		//品牌理念-产品工艺-5
		$parameters=array(
			'result'=>'data',
			'column'=>16,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['productservice5']=$this->getdata->getEssays($parameters);
		//品牌理念-产品工艺-6
		$parameters=array(
			'result'=>'data',
			'column'=>17,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['productservice6']=$this->getdata->getEssays($parameters);
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		$this->load->view('home/productservice',$data);
	}
	public function brand(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//顶部图片
		$parameters=array(
			'result'=>'data',
			'column'=>26,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dingbu']=$this->getdata->getEssays($parameters);
		//'品牌活动'
		$parameters=array(
			'result'=>'data',
			'column'=>6,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['pinpaihuodong']=$this->getdata->getEssays($parameters);
		$this->load->view('home/brand',$data);
	}
	public function hpp(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//Hpp
		$parameters=array(
			'result'=>'data',
			'column'=>18,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['hpps']=$this->getdata->getEssays($parameters);
		$this->load->view('home/hpp',$data);
	}
	public function hpp_bk(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		//首页-底部
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		//Hpp
		$parameters=array(
			'result'=>'data',
			'column'=>18,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['hpps']=$this->getdata->getEssays($parameters);
		$this->load->view('home/hpp_bk',$data);
	}
	public function contactus(){
        $data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		$this->load->view('home/contactus',$data);
	}
	public function aboutus(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		$this->load->view('home/aboutus',$data);
	}
	public function help(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		$this->load->view('home/help',$data);
	}
	public function inside(){
		$data=array();
		//首页-次底部-左
		$parameters=array(
			'result'=>'data',
			'column'=>22,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzuo']=$this->getdata->getEssays($parameters);
		//首页-次底部-中
		$parameters=array(
			'result'=>'data',
			'column'=>24,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuzhong']=$this->getdata->getEssays($parameters);
		//首页-次底部-右
		$parameters=array(
			'result'=>'data',
			'column'=>25,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['cidibuyou']=$this->getdata->getEssays($parameters);
		$parameters=array(
			'result'=>'data',
			'column'=>23,
			'orderBy'=>array('time'=>'DESC')
		);
		$data['dibu']=$this->getdata->getEssays($parameters);
		$this->load->view('home/inside',$data);
	}
}
