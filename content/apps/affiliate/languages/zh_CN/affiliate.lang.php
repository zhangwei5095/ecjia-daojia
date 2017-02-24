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
 * ECJIA 应用语言包
 */
return array(
	'on' 	=> '开启',
	'off' 	=> '关闭',
	
	'separate_by' => array(
		0	=> '推荐注册分成',
		1 	=> '推荐订单分成',
	),
	
	'expire' 				=> '推荐时效：',
	'level_point_all' 		=> '积分分成总额百分比：',
	'level_money_all' 		=> '现金分成总额百分比：',
	'level_register_all' 	=> '注册积分分成数：',
	'level_register_up' 	=> '等级积分分成上限：',
	'level_point' 			=> '积分分成百分比',
	'level_money' 			=> '现金分成百分比',
		

	'label_level_point'		=> '积分分成百分比：',
	'label_level_money' 	=> '现金分成百分比：',
		
	'edit_ok' 				=> '操作成功',
	'level_error'		 	=> '最多可以设5个级别！',
	'levels' 				=> '推荐人级别',
	'label_levels'			=> '推荐人级别：',
		
	'js_languages' => array(
		'lang_removeconfirm' 	=> '您确定要删除这个等级么？',
		'save' 					=> '保存',
		'cancel' 				=> '取消',
	),
	
	'unit' => array(
		'hour' 	=> '小时',
		'day' 	=> '天',
		'week' 	=> '周',
	),
	
	'addrow' 	=> '增加',
	'all_null' 	=> '不能全为空',
	
	'help_expire' 	=> '访问者点击某推荐人的网址后，在此时间段内注册、下单，均认为是该推荐人的所介绍的。',
	'help_lpa' 		=> '订单积分的此百分比部分作为分成用积分。',
	'help_lma' 		=> '订单金额的此百分比部分作为分成用金额。',
	'help_lra' 		=> '介绍会员注册，介绍人所能获得的等级积分。',
	'help_lru' 		=> '等级积分到此上限则不再奖励介绍注册积分。',
		
	//追加
	'is_on'				=> '是否开启',
	'label_is_on'		=> '是否开启：',
	'add_affiliate'		=> '添加分成',
	'affiliate_percent'	=> '分成比例',
	'add_affiliate_percent'	=> '添加分成比例',
	'update_affiliate_percent' => '编辑分成比例',
	'affiliate_percent_list' => '分成比例列表',
	'level_point_empty'	=> '请输入积分分成百分比',
	'level_point_wrong'	=> '积分分成百分比格式不正确，应为数字类型',
	'level_money_empty'	=> '请输入现金分成百分比',
	'level_money_wrong'	=> '现金分成百分比格式不正确，应为数字类型',
	'add_success'		=> '添加成功',
	'level_point_is'	=> '积分百分比为 ',
	'level_money_is'	=> '现金百分比为 ',
	'edit_success'		=> '编辑成功',
	'edit_fail'			=> '编辑失败',
	'remove_success'	=> '删除成功',
	'remove_fail'		=> '删除失败',
	'affiliate_type'	=> '推荐分成类型：',
	'edit_level_point'	=> '编辑积分分成百分比',
	'edit_level_money'	=> '编辑现金分成百分比',
	
	'affiliate_config'		=> '推荐邀请设置',
	'affiliate_manage'		=> '推荐管理',
	'affiliate_set'			=> '推荐设置',
	'sharing_management'	=> '分成管理',
	'affiliate_set_manage'	=> '推荐设置管理',
	'affiliate_set_update'	=> '推荐设置更新',
	'affiliate_set_drop'	=> '推荐设置删除',
	'affiliate_percent_manage'	=> '分成比例管理',
	'affiliate_percent_update'	=> '分成比例更新',
	'affiliate_percent_drop'	=> '分成比例删除',
	'recommend_management'	=> '推荐分成管理',
	'recommend_update'		=> '推荐分成更新',
	'affiliate'				=> '推荐分成',
	'config'				=> '配置',
	'do'					=> '执行',
	'cancel'				=> '取消',
	'rollback'				=> '撤销',
	'ok'					=> '确定',
	'notice'				=> '推荐设置已关闭',
	
	'label_level_register_integral_all'	=> '消费积分分成数：',
	'label_level_register_integral_up'	=> '消费积分分成上限人数：',
	'label_level_register_account_all'	=> '余额分成数：',
	'label_level_register_account_up'	=> '余额分成上限人数：',
	
	'level_register_integral_all_help'	=> '介绍会员注册或下单时，介绍人所能获得消费积分奖励。',
	'level_register_integral_up_help'	=> '推荐人数到此上限则不再消费积分。（0为不限制人数）',
	'level_register_account_all_help'	=> '介绍会员注册或下单时，介绍人所能获得余额奖励。',
	'level_register_account_up_help'	=> '推荐人数到此上限则不再奖励余额。（0为不限制人数）',
);

//end