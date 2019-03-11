<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App
{
	protected $CI;
	private $layout;
	private $title;
	private $active;

	public function __construct()
	{
		$this->CI = &get_instance();
		$this->CI->load->model("menu_model");
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($var)
	{
		$this->title = $var;
	}

	public function getLayout()
	{
		return $this->layout;
	}

	public function setlayout($var)
	{
		$this->layout = $var;
	}

	public function getActive()
	{
		return $this->active;
	}

	public function setActive($var)
	{
		$this->active = $var;
	}

	public function render($title = "Science Journal UDRU", $render, $data = null, $backoffice = true)
	{
		$this->setTitle($title);
		$view = $this->CI->load->view('public/' . $render, $data, true);
		$this->setLayout($view);
		if ($backoffice) {
			$this->CI->load->view('templates/backoffice/content', null);
		} else {
			$this->CI->load->view('templates/frontoffice/content', null);
		}
	}

	public function get_post($post) {
		$data = array();
		foreach ($post as $key => $value) {
			$data[$key] = $value;
		}
		return $data;
	}

	public function script()
	{
		$current = $this->CI->uri->segment(1);
		$script  = $this->CI->uri->segment(2);

		if (file_exists('assets/scripts/' . $current . '/' . $script . '.js')) {
			return "<script src='" . base_url() . "assets/scripts/" . $current . "/" . $script . ".js'></script>";
		} elseif (file_exists('assets/scripts/' . $current . '/' . $current . '.js')) {
			return "<script src='" . base_url() . "assets/scripts/" . $current . "/" . $current . ".js'></script>";
		} else {
			return "";
		}
	}

	public function getMenuRole($base_url,$group)
	{
		$menuLevel1 = $this->CI->menu_model->getMenuRole('1',$group);
		$menuLevel2 = $this->CI->menu_model->getMenuRole('2',$group);
		$menu = "";
		foreach ($menuLevel1['result'] as $mlevel1) {
			$active = $this->CI->uri->segment(1) == $mlevel1->menu_url ? 'active' : '';
			// $icon =  $mlevel1->menu_icon != ''? $mlevel1->menu_icon : '';

			if ($mlevel1->menu_url !== '#') {
				$menu .= '<li class="' . $active . '">';
				$menu .= '<a  href="' . $base_url . $mlevel1->menu_url . '">' . $mlevel1->menu_icon . ' ' . $mlevel1->menu_name . '</a>';
				$menu .= '</li>';
			} else {
				$menu .=' <li class="menu-item-has-children dropdown">';
				$menu .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '.$mlevel1->menu_icon.' '.$mlevel1->menu_name.'</a>';
				$menu .= '<ul class="sub-menu children dropdown-menu">';

				foreach ($menuLevel2['result'] as $mlevel2) {
					if ($mlevel1->menu_id == $mlevel2->menu_parent) {
						$menu .= '<li>'.$mlevel2->menu_icon.'<a href="'.$base_url.$mlevel2->menu_url.'">'.$mlevel2->menu_name.'</a></li>';
					}
				}

				$menu .= '</ul>';
				$menu .= '</li>';


			}

			//---------- end else ----------//
		}
		return $menu;

	}


	public function timeline($user_id)
	{
		$datatimeline = $this->CI->menu_model->timeline($user_id);
		foreach ($datatimeline as $fieldTimeline) {
			$timelines = array(
				'user_id'      => $fieldTimeline->user_id,
				'user_status'  => $fieldTimeline->user_status,
				'createUser'   => $fieldTimeline->createUser,
				'regis_id'     => $fieldTimeline->regis_id,
				'regis_status' => $fieldTimeline->regis_status,
				'createRegis'  => $fieldTimeline->createRegis,
				'pay_id'       => $fieldTimeline->pay_id,
				'pay_status'   => $fieldTimeline->pay_status,
				'createPay'    => $fieldTimeline->createPay,
			);
		}

		$html = <<<HTML
		<!-- Start Timeline -->
		<div class="container">
		<div class="row">
		<div class="col-md-12 mt-5">
		<ul class="timeline" id="timeline">
HTML;
		if(!empty($timelines['createUser'])):
			$html .= <<<HTML
			<li class="li complete">
			<div class="timestamp">
			<span class="date">
HTML;
			$html .= $timelines['createUser'];
			$html .= <<<HTML
			</span>
			</div>
			<div class="status">
			สมัครสมาชิก
			</div>
			</li>
HTML;
		else:
			$html .= <<<HTML
			<li class="li">
			<div class="timestamp">
			<span class="date">ถัดไป <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
			</div>
			<div class="status">
			สมัครสมาชิก
			</div>
			</li>
HTML;
		endif;

		if(!empty($timelines['createRegis'])):
			$html .= <<<HTML
			<li class="li complete">
			<div class="timestamp">
			<span class="date">
HTML;
			$html .= $timelines['createRegis'];
			$html .= <<<HTML
			</span>
			</div>
			<div class="status">
			ลงทะเบียนบทความ
			</div>
			</li>
HTML;
		else:
			$html .= <<<HTML
			<li class="li">
			<div class="timestamp">
			<span class="date">ถัดไป <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
			</div>
			<div class="status">
			ลงทะเบียนบทความ
			</div>
			</li>
HTML;
		endif;

		if(!empty($timelines['pay_status'])):
			$html .= <<<HTML
			<li class="li complete">
			<div class="timestamp">
			<span class="date">
HTML;
			$html .= ($none = ($timelines['pay_status'] == "NONE")?"รอชำระค่าลงทะเบียน" : $wait = ($timelines['pay_status'] == "WAIT")?"รอตรวจสอบ" : $success = ($timelines['pay_status'] == "SUCCESS")? $timelines['createPay'] : "" );
			$html .= <<<HTML
			</span>
			</div>
			<div class="status">
			ชำระค่าลงทะเบียน
			</div>
			</li>
			<li class="li complete">
			<div class="timestamp">
			<span class="date">14/06/2562</span>
			</div>
			<div class="status">
			นำเสนอผลงาน
			</div>
			</li>
HTML;
		else:
			$html .= <<<HTML
			<li class="li">
			<div class="timestamp">
			<span class="date">ถัดไป <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
			</div>
			<div class="status">
			ชำระค่าลงทะเบียน
			</div>
			</li>
			<li class="li ">
			<div class="timestamp">
			<span class="date">14/06/2562</span>
			</div>
			<div class="status">
			นำเสนอผลงาน
			</div>
			</li>
HTML;
		endif;

		$html .= <<<HTML
		</ul>
		<hr>
		</div>
		</div>
		</div>
		<!-- End Timeline -->
HTML;
		return $html;
	}

}

/* End of file App.php */
/* Location: ./application/libraries/App.php */
