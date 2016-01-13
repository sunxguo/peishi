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
		$this->load->view('home/product');
	}
	public function essay(){
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
			$this->load->view('redirect',array('info'=>'地址错误！'));
			return false;
		}
		$id=$_GET['id'];
		$data['essay']=$this->getdata->getContent('essay',$id);
		$this->load->view('home/essay',$data);
	}
	public function productlist(){
		$this->load->view('home/productlist');
	}
	public function comment(){
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
		$this->load->view('home/productservice',$data);
	}
	public function brand(){
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
		$this->load->view('home/hpp');
	}
	public function contactus(){
		$this->load->view('home/contactus');
	}
	public function aboutus(){
		$this->load->view('home/aboutus');
	}
	public function help(){
		$this->load->view('home/help');
	}
	public function inside(){
		$this->load->view('home/inside');
	}
}
