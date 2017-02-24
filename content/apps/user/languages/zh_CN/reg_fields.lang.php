<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');

/**
 * ECJIA 会员注册项管理语言文件 
 */
return array(
	'21_reg_fields' 	=> '会员注册项设置',
	'field_name' 		=> '会员注册项名称',
	'field_order' 		=> '排序权值',
	'field_display'  	=> '是否显示',
	'field_need' 		=> '是否必填',
	'add_reg_field' 	=> '添加会员注册项',
	'edit_reg_field' 	=> '编辑会员注册项',
	'reg_field_name'	=> '注册项名称',
	
	'field_name_exist' 	 	=> '会员注册项名 %s 已经存在。',
	'add_field_success'  	=> '会员注册项已经添加成功。',
	'edit_field_success' 	=> '会员注册项已经修改成功。',
		
	'add_continue' 		=> '继续添加会员注册项',
	'back_list' 		=> '返回会员注册项列表',
	'order_not_num' 	=> '输入的排序权值不是有效的数字。',
	'no_edit' 			=> '系统保留不可修改',
	'no_remove' 		=> '系统保留不可删除',
	
	/* 提示信息  */
	'add_success'		=> '添加成功',	
	'edit_success' 		=> '编辑成功',
	'edit_fail'			=> '编辑失败',
	'drop_success' 		=> '删除成功',
	'quick_edit' 		=> '点击修改内容',
	'edit_state' 		=> '点击改变状态',
		
	/* JS 语言 */
	'js_languages' => array(
		'field_name_empty' => '您没有输入会员注册字段名称。'
	),
			
	'change_ok'					=>	'切换成功',
	'edit_field_name'			=>	'编辑会员注册名称',
	'edit_sequence'				=>	'编辑排序',
	'click_switch_status'		=>	'点击切换状态',
	'delete_field_confirm'		=>	'您确定要删除会员注册项吗？',
	'delete' 					=>	'移除',
	'submit_update'         	=> 	'更新',
	
	'label_reg_field_name'		=> 	'注册项名称：',
	'label_field_order' 		=> 	'排序权值：',
	'label_field_display'		=> 	'是否显示：',
	'label_field_need' 			=> 	'是否必填：',
	'reg_field_name_confirm'	=>	'请输入注册项名称',
	'reg_field_order_confirm'	=>	'请输入排序',
);

// end