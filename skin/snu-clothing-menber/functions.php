<?php
if(!defined('ABSPATH')) exit;

define('KBOARD_snu_clothing_menber_VERSION', '1.6');

load_plugin_textdomain('kboard-snu-clothing-menber', false, dirname(plugin_basename(__FILE__)) . '/languages');

if(!function_exists('kboard_snu_clothing_menber_scripts')){
	add_action('wp_enqueue_scripts', 'kboard_snu_clothing_menber_scripts', 999);
	add_action('kboard_iframe_head', 'kboard_snu_clothing_menber_scripts');
	function kboard_snu_clothing_menber_scripts(){
		$localize = array(
			'missing_link_address' => __('Missing link address.', 'kboard-snu-clothing-menber'),
			'no_more_data' => __('There is no more data to display.', 'kboard-snu-clothing-menber'),
		);
		wp_localize_script('kboard-script', 'kboard_snu_clothing_menber_localize_strings', $localize);
	}
}

if(!function_exists('kboard_snu_clothing_menber_more_view')){
	add_action('init', 'kboard_snu_clothing_menber_more_view');
	function kboard_snu_clothing_menber_more_view(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		$board_id = isset($_GET['board_id'])?intval($_GET['board_id']):'';
		
		if(!$board_id){
			$board_id = isset($_GET['kboard_id'])?intval($_GET['kboard_id']):'';
		}
	
		if($action == 'kboard_snu_clothing_menber_more_view' && $board_id){
			echo kboard_builder(array('id'=>$board_id));
			exit;
		}
	}
}

if(!function_exists('kboard_snu_clothing_menber_shortcusts')){
	add_action('wp_ajax_kboard_snu_clothing_menber_shortcusts', 'kboard_snu_clothing_menber_shortcusts');
	add_action('wp_ajax_nopriv_kboard_snu_clothing_menber_shortcusts', 'kboard_snu_clothing_menber_shortcusts');
	function kboard_snu_clothing_menber_shortcusts(){
		$content_uid = isset($_POST['content_uid'])?intval($_POST['content_uid']):'';
		if($content_uid){
			$content = new KBContent();
			$content->initWithUID($content_uid);
			$content->increaseView();
		}
		exit;
	}
}

if(!function_exists('kboard_snu_clothing_menber_print')){
	function kboard_snu_clothing_menber_print($link){
		if(strpos($link, 'http://') !== false || strpos($link, 'https://') !== false){
			return $link;
		}
		return "http://{$link}";
	}
}

// 생년월일 -> 나이 구하기 - 시작
if (!function_exists('kboard_snu_is_valid_date')) {
  function kboard_snu_is_valid_date($date) {
    $format = 'Y-m-d';
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
  }
}

if (!function_exists('kboard_snu_get_age')) {
  function kboard_snu_get_age($birth_date) {
    $birth_date = new DateTime($birth_date);
    $now = new DateTime();
    $interval = $now->diff($birth_date);
    return $interval->y;
  }
}
// 생년월일 -> 나이 구하기 - 끝

// 이름으로 정렬하기 - 시작
if (!function_exists('kboard_snu_add_name_sorting_type')) {
  add_filter('kboard_list_sorting_types', 'kboard_snu_add_name_sorting_type', 1, 1);
  function kboard_snu_add_name_sorting_type($sorting_types) {
      if (empty($sorting_types)) $sorting_types = [];
      $sorting_types[] = 'name';
      return array_unique($sorting_types);
  }
}

if (!function_exists('kboard_snu_sort_by_name')) {
  add_filter('kboard_list_orderby', 'kboard_snu_sort_by_name', 1, 3);
  function kboard_snu_sort_by_name($orderby, $board_id, $obj) {
      global $wpdb;

      if (!isset($_REQUEST['kboard_list_sort'])) return $orderby;
      if (empty($_REQUEST['kboard_list_sort'])) return $orderby;
      if ($_REQUEST['kboard_list_sort'] !== 'name') return $orderby;

      return "`{$wpdb->prefix}kboard_board_content`.`title` ASC";
  }
}
// 이름으로 정렬하기 - 끝


// 검색 고도화 하기 - 시작
if (!function_exists('kboard_snu_get_custom_fields')) {
  // 검색시 이 필드들이 query에 들어가도록 한다
  function kboard_snu_get_custom_fields() {
    return $custom_fields = [
        'academic_change',
        'student_id',
        'graduation_date',
        'academic_year',
        'type_classification',
        'birth_date',
        'department',
        'registration_category',
        'graduation_school',
        'email_out_of_campus',
        'name_english',
        'advisor',
        'classification_of_major',
        'course',
        'academic_status',
        'completion_date',
        'major',
        'semester_leave_no',
        'semesters_enrolled_no',
        'academic_classification',
        'nationality',
        'current_job',
        'university',
        'day_night',
        'admission_classification',
        'graduate_school',
        'attendance',
        'mobile_no',
        'name_chinese',
        'tel',
        'entrance_date',
        'gender',
        'email_on_campus'
    ];
  }
}

// 검색 옵션에 위의 커스텀 필드들을 넣는다
if (!function_exists('kboard_snu_kboard_list_search_option')) {
  add_filter('kboard_list_search_option', 'kboard_snu_kboard_list_search_option', 1, 3);
  function kboard_snu_kboard_list_search_option($search_option, $board_id, $obj) {
    if (!isset($_REQUEST['keyword'])) return $search_option;
    if (empty($_REQUEST['keyword'])) return $search_option;

    $keyword = $_REQUEST['keyword'];

    $custom_fields = kboard_snu_get_custom_fields();

    $custom_search_options = array_reduce($custom_fields, function($acc, $cur) use ($keyword) {
        if (!$acc) $acc = [];
        $acc[$cur] = array(
            'key' => $cur,
            'compare' => 'LIKE',
            'wildcard' => 'both',
            'value' => $keyword,
        );
        return $acc;
    });
    $custom_search_options['relation'] = "OR";

    return $custom_search_options;
  }
}

// 커스텀 필드를 바탕으로 생성된 수많은 INNER_JOIN을 하나로 바꿔준다
if (!function_exists('kboard_snu_reduce_inner_join')) {
  add_filter('kboard_list_from', 'kboard_snu_reduce_inner_join', 1, 3);
  function kboard_snu_reduce_inner_join($from_str, $board_id, $obj){
    if (!isset($_REQUEST['keyword'])) return $from_str;
    if (empty($_REQUEST['keyword'])) return $from_str;
  
    return '`snuclothingmenber_kboard_board_content` INNER JOIN `snuclothingmenber_kboard_board_option` ON `snuclothingmenber_kboard_board_content`.`uid`=`snuclothingmenber_kboard_board_option`.`content_uid`';
  }
}

// 필드들을 넣으면 where절이 막 생기는데 이를 수정한다
// 1. 검색어와 옵션검색을 AND로 연결하는데, 이것을 OR로 바꿔준다
// 2. from 구문에서 INNER_JOIN을 하나 빼고 삭제했기 때문에, 커스텀 필드용 INNER_JOIN을 삭제하고 정식 INNER_JOIN 하나만 남겨놓는다
if (!function_exists('kboard_snu_kboard_filter')) {
  add_filter('kboard_list_where', 'kboard_snu_kboard_filter', 1, 3);
  function kboard_snu_kboard_filter($query_str_where, $board_id, $obj) {
    global $wpdb;

    if (!isset($_REQUEST['keyword'])) return $query_str_where;
    if (empty($_REQUEST['keyword'])) return $query_str_where;

    $first_option_pos = strpos($query_str_where, 'option_key');
    if (!$first_option_pos) return $query_str_where;

    // AND -> OR
    $sub_where = substr($query_str_where, 0, $first_option_pos);
    $last_and_pos = strrpos($sub_where, ' AND ');
    $where_before_option = substr($query_str_where, 0, $last_and_pos);
    $where_after_option = substr($query_str_where, $last_and_pos + strlen(' AND '));
    $new_where = $where_before_option . ' OR ' . $where_after_option;

    // custom INNER_JOIN 삭제, 공식 INNER_JOIN만 사용한다
    $custom_fields = kboard_snu_get_custom_fields();
    foreach($custom_fields as $field) {
        $table = 'option_' . $field;
        $replace = "{$wpdb->prefix}kboard_board_option";
        $new_where = str_replace($table, $replace, $new_where);
    }

    return $new_where;
  }
}
// 검색 고도화 하기 - 끝


// 상세보기를 누르면 조회수를 올린다
if (!function_exists('kboard_snu_update_view_count_action')) {
  add_action( 'wp_ajax_kboard_snu_update_view_count_action', 'kboard_snu_update_view_count_action' );
  add_action( 'wp_ajax_nopriv_kboard_snu_update_view_count_action', 'kboard_snu_update_view_count_action' );
  function kboard_snu_update_view_count_action() {
    global $wpdb;

    if (!isset($_POST['uid'])) {
      wp_send_json_error(array(
        "code" => 404,
        "message" => 'no value'
      ));
      return;
    }
    $uid = intval($_POST['uid']);

    if (empty($uid)) {
      wp_send_json_error(array(
        "code" => 403,
        "message" => 'empty value'
      ), 401);
      return;
    }

    $wpdb->query("UPDATE `{$wpdb->prefix}kboard_board_content` SET `view`=`view`+1 WHERE `uid`='{$uid}'");
  }
}
