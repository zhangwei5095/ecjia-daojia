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
 * ECJIA 订单管理语言文件
 */
return array(
	/* 订单搜索 */
	'order_sn' 		=> '订单号',
	'consignee' 	=> '收货人',
	'label_consignee' => '收货人：',
	'all_status' 	=> '订单状态',
	'thumb_img' 	=> '缩略图',
		
	'cs' => array(
		OS_UNCONFIRMED 	=> '待确认',
		CS_AWAIT_PAY 	=> '待付款',
		CS_AWAIT_SHIP 	=> '待发货',
		CS_SHIPPED		=> '已发货',
		CS_FINISHED 	=> '已完成',
		PS_PAYING 		=> '付款中',
		OS_CANCELED 	=> '取消',
		OS_INVALID 		=> '无效',
		OS_RETURNED 	=> '退货',
		OS_SHIPPED_PART => '部分发货',
	),
		
	/* 订单状态 */
	'os' => array(
		OS_UNCONFIRMED 		=> '未确认',
		OS_CONFIRMED 		=> '已确认',
		OS_CANCELED 		=> '<font color="red">取消</font>',
		OS_INVALID 			=> '<font color="red">无效</font>',
		OS_RETURNED 		=> '<font color="red">退货</font>',
		OS_SPLITED 			=> '已分单',
		OS_SPLITING_PART 	=> '部分分单',
	),
		
	'ss' => array(
		SS_UNSHIPPED 	=> '未发货',
		SS_PREPARING 	=> '配货中',
		SS_SHIPPED 		=> '已发货',
		SS_RECEIVED 	=> '收货确认',
		SS_SHIPPED_PART => '已发货(部分商品)',
		SS_SHIPPED_ING 	=> '发货中',
	),
		
	'ps' => array(
		PS_UNPAYED 	=> '未付款',
		PS_PAYING	=> '付款中',
		PS_PAYED 	=> '已付款',
	),
		
	'ss_admin' => array(
		SS_SHIPPED_ING => '发货中（前台状态：未发货）'
	),
				
	/* 订单操作 */
	'label_operable_act'	=> '当前可执行操作：',
	'label_action_note' 	=> '操作备注：',
	'label_invoice_note' 	=> '发货备注：',
	'label_invoice_no' 		=> '发货单号：',
	'label_cancel_note'	 	=> '取消原因：',
	'notice_cancel_note' 	=> '（会记录在商家给客户的留言中）',
	'pay_order'				=> '支付订单 %s',
	
	'op_confirm' 	=> '确认',
	'op_pay' 		=> '付款',
	'op_prepare' 	=> '配货',
	'op_ship' 		=> '发货',
	'op_cancel' 	=> '取消',
	'op_invalid' 	=> '无效',
	'op_return' 	=> '退货',
	'already_shipped' => '已发货',
	'op_unpay' 		=> '设为未付款',
	'op_unship' 	=> '未发货',
	
	'op_cancel_ship' 	=> '取消发货',
	'op_receive' 		=> '已收货',
	'op_assign' 		=> '指派给',
	'op_after_service' 	=> '售后',
	'act_ok' 			=> '操作成功',
	'act_false' 		=> '操作失败',
	'act_ship_num' 		=> '此单发货数量不能超出订单商品数量',
	'act_good_vacancy' 	=> '商品已缺货',
	'act_goods_vacancy' => '商品 %s 已缺货',
	'act_good_delivery' => '货已发完',
	'notice_gb_ship' 	=> '备注：团购活动未处理为成功前，不能发货',
	'op_remove' 		=> '删除',
	'op_you_can' 		=> '您可进行的操作',
	'op_split' 			=> '生成发货单',
	'op_to_delivery' 	=> '去发货',
		
	/* 订单列表 */
	'order_amount' 			=> '应付金额',
	'total_fee' 			=> '总金额',
	'shipping_name' 		=> '配送方式',
	'pay_name' 				=> '支付方式',
	'address' 				=> '地址',
	'order_time' 			=> '下单时间',
	'detail' 				=> '查看',
	'phone' 				=> '电话',
	'group_buy' 			=> '（团购）',
	'error_get_goods_info' 	=> '获取订单商品信息错误',
	'exchange_goods' 		=> '（积分兑换）',
		
	//追加
	'merge_confirm' 	=> '您确定要合并这两个订单吗？',
	'action_note_sure' 	=> '请输入操作备注！',
	'back_order_info' 	=> '返回订单详情！',
		
	/* 订单搜索 */
	'label_order_sn' 	=> '订单号：',
	'label_all_status' 	=> '订单状态：',
	'label_user_name' 	=> '购货人：',
	'label_consignee' 	=> '收货人：',
	'label_email' 		=> '电子邮件：',
	'label_address' 	=> '地址：',
	'label_zipcode' 	=> '邮编：',
	'label_tel' 		=> '电话：',
	'label_mobile' 		=> '手机：',
	'label_shipping' 	=> '配送方式：',
	'label_payment' 	=> '支付方式：',
	'label_order_status' 	=> '订单状态：',
	'label_pay_status' 		=> '付款状态：',
	'label_shipping_status' => '发货状态：',
	'label_area' 		=> '所在地区：',
	'label_time' 		=> '下单时间：',
	
	/* 订单详情 */
	'prev' 				=> '前一个订单',
	'next' 				=> '后一个订单',
	'print_order' 		=> '打印订单',
	'print_shipping' 	=> '打印快递单',
	'print_order_sn' 	=> '订单编号：',
	'print_buy_name' 	=> '购货人：',
	'label_consignee_address' => '收货地址：',
	'no_print_shipping' => '很抱歉，目前您还没有设置打印快递单模板，不能进行打印。',
	'suppliers_no' 		=> '不指定供货商本店自行处理',
	'restaurant' 		=> '本店',
	
	'order_info' 	=> '订单信息',
	'base_info' 	=> '基本信息',
	'other_info' 	=> '其他信息',
	'consignee_info'=> '收货人信息',
	'fee_info' 		=> '费用信息',
	'action_info' 	=> '操作信息',
	'shipping_info' => '配送信息',
	'heading_order_info' => '订单信息',
	
	'label_how_oos' 		=> '缺货处理：',
	'label_how_surplus' 	=> '余额处理：',
	'label_pack' 			=> '包装：',
	'label_card' 			=> '贺卡：',
	'label_card_message' 	=> '贺卡祝福语：',
	'label_order_time' 		=> '下单时间：',
	'label_pay_time' 		=> '付款时间：',
	'label_shipping_time' 	=> '发货时间：',
	'label_sign_building' 	=> '标志性建筑：',
	'label_best_time' 		=> '最佳送货时间：',
	'label_inv_type' 		=> '发票类型：',
	'label_inv_payee' 		=> '发票抬头：',
	'label_inv_content' 	=> '发票内容：',
	'label_postscript' 		=> '客户给商家的留言：',
	'label_region' 			=> '所在地区：',
	
	'label_shop_url' 		=> '网址：',
	'label_shop_address' 	=> '地址：',
	'label_service_phone' 	=> '电话：',
	'label_print_time' 		=> '打印时间：',
	
	'label_suppliers' 		=> '选择供货商：',
	'label_agency' 			=> '办事处：',
	'suppliers_name' 		=> '供货商',
	
	'product_sn' 			=> '货品号',
	'goods_info' 			=> '商品信息',
	'goods_name' 			=> '商品名称',
	'goods_name_brand' 		=> '商品名称 [ 品牌 ]',
	'goods_sn' 				=> '货号',
	'goods_price' 			=> '价格',
	'goods_number' 			=> '数量',
	'goods_attr' 			=> '属性',
	'goods_delivery' 		=> '已发货数量',
	'goods_delivery_curr' 	=> '此单发货数量',
	'storage' 				=> '库存',
	'subtotal' 				=> '小计',
	'label_total' 			=> '合计：',
	'label_total_weight' 	=> '商品总重量：',
	'label_goods_price'		=> '商品价格：',
	'label_goods_number'	=> '商品数量：',
	
	'label_goods_amount' 	=> '商品总金额：',
	'label_discount' 		=> '折扣：',
	'label_tax' 			=> '发票税额：',
	'label_shipping_fee' 	=> '配送费用：',
	'label_insure_fee' 		=> '保价费用：',
	'label_insure_yn' 		=> '是否保价：',
	'label_pay_fee' 		=> '支付费用：',
	'label_pack_fee' 		=> '包装费用：',
	'label_card_fee' 		=> '贺卡费用：',
	'label_money_paid' 		=> '已付款金额：',
	'label_surplus' 		=> '使用余额：',
	'label_integral' 		=> '使用积分：',
	'label_bonus' 			=> '使用红包：',
	'label_order_amount' 	=> '订单总金额：',
	'label_money_dues' 		=> '应付款金额：',
	'label_money_refund' 	=> '应退款金额：',
	'label_to_buyer' 		=> '商家给客户的留言：',
	'save_order' 			=> '保存订单',
	'notice_gb_order_amount' => '（备注：团购如果有保证金，第一次只需支付保证金和相应的支付费用）',
	
	'action_user' 		=> '操作者：',
	'action_time' 		=> '操作时间',
	'order_status' 		=> '订单状态',
	'pay_status' 		=> '付款状态',
	'shipping_status' 	=> '发货状态',
	'action_note' 		=> '备注：',
	'pay_note' 			=> '支付备注：',
	
	'sms_time_format' 	=> 'm月j日G时',
	'order_shipped_sms' => '您的订单%s已于%s发货 [%s',
	'order_splited_sms' => '您的订单%s,%s正在%s [%s',
	'order_removed' 	=> '订单删除成功',
	'return_list' 		=> '返回订单列表',
	'detailed_information'	=>	'详细信息',
	
	/* 订单处理提示 */
	'surplus_not_enough'	=> '该订单使用 %s 余额支付，现在用户余额不足',
	'integral_not_enough' 	=> '该订单使用 %s 积分支付，现在用户积分不足',
	'bonus_not_available' 	=> '该订单使用红包支付，现在红包不可用',
	'order_prepare_message' => '订单号为 %s 的商品正在备货中，请您耐心等待',
	'order_goods_served'	=> '商品已送达，请签收，感谢您下次光顾！',
	'order_send_message'	=> '订单号为 %s 的商品已发货，请您耐心等待',
	'notice_merchant_message' => '已通知商家处理，请耐心等待',
	'pay_repeat_message'	=> '该订单已经支付，请勿重复支付。',
	'not_enough_balance'	=> '您的余额不足以支付整个订单，请选择其他支付方式。',
			
	/* 购货人信息 */
	'display_buyer' => '显示购货人信息',
	'buyer_info' 	=> '购货人信息',
	'pay_points' 	=> '消费积分',
	'rank_points' 	=> '等级积分',
	'user_money' 	=> '账户余额',
	'email' 		=> '电子邮件',
	'rank_name' 	=> '会员等级',
	'bonus_count' 	=> '红包数量',
	'zipcode' 		=> '邮编',
	'tel' 			=> '电话',
	'mobile' 		=> '备用电话',
	
	/* 合并订单 */
	'order_sn_not_null'					=> '请填写要合并的订单号',
	'two_order_sn_same'					=> '要合并的两个订单号不能相同',
	'order_not_exist' 					=> '订单 %s 不存在',
	'os_not_unconfirmed_or_confirmed' 	=> '%s 的订单状态不是“未确认”或“已确认”',
	'ps_not_unpayed' 					=> '订单 %s 的付款状态不是“未付款”',
	'ss_not_unshipped' 					=> '订单 %s 的发货状态不是“未发货”',
	'order_user_not_same' 				=> '要合并的两个订单不是同一个用户下的',
	'merge_invalid_order' 				=> '对不起，您选择合并的订单不允许进行合并的操作。',
	'order_merge_invalid'				=> '订单合并失败',
	'and'								=> '与',
	'new_order_is'						=> '，合并成新订单，订单号为：',
	'merge_success_notice'				=> '%s 与  %s 合并成新订单，订单号为：%s',
	
	'from_order_sn' 	=> '从订单：',
	'to_order_sn' 		=> '主订单：',
	'merge' 			=> '合并',
	'notice_order_sn' 	=> '当两个订单不一致时，合并后的订单信息（如：支付方式、配送方式、包装、贺卡、红包等）以主订单为准。',
	
	/* 批处理 */
	'pls_select_order' 	=> '请选择您要操作的订单',
	'no_fulfilled_order'=> '没有满足操作条件的订单。',
	'updated_order' 	=> '更新的订单：',
	'order' 			=> '订单：',
	'confirm_order' 	=> '有订单无法设置为确认状态',
	'invalid_order' 	=> '有订单无法设置为无效',
	'cancel_order' 		=> '有订单无法取消',
	'remove_order' 		=> '有订单无法被移除',
	'remove'			=> '移除',
	'check_info' 		=> '查看详情',
	
	/* 编辑订单打印模板 */
	'edit_order_templates' 	=> '编辑订单打印模板',
	'template_resetore' 	=> '还原模板',
	'edit_template_success' => '编辑订单打印模板操作成功!',
	'remark_fittings' 		=> '（配件）',
	'remark_gift' 			=> '（赠品）',
	'remark_favourable' 	=> '（特惠品）',
	'remark_package' 		=> '（礼包）',
	
	/* 订单来源统计 */
	'from_order' 	=> '订单来源：',
	'from_ad_js' 	=> '广告：',
	'from_goods_js' => '商品站外JS投放',
	'from_self_site'=> '来自本站',
	'from' 			=> '来自站点：',
		
	/* 添加、编辑订单 */
	'add_order'		=> '添加订单',
	'edit_order' 	=> '编辑订单',
	
	'step' => array(
		'user' 		=> '请选择您要为哪个会员下订单',
		'goods' 	=> '选择商品',
		'consignee' => '设置收货人信息',
		'shipping' 	=> '选择配送方式',
		'payment' 	=> '选择支付方式',
		'other' 	=> '设置其他信息',
		'money' 	=> '设置费用',
	),
		
	'anonymous' 	=> '匿名用户',
	'by_useridname' => '按会员编号或会员名搜索',
	'button_prev' 	=> '上一步',
	'button_next' 	=> '下一步',
	'button_finish' => '完成',
	'button_cancel' => '取消',
	'button_submit'	=> '确定',
	'button_search' => '搜索',
	'name' 			=> '名称',
	'desc' 			=> '描述',
	'shipping_fee' 	=> '配送费',
	'free_money'	=> '免费额度',
	'insure' 		=> '保价费',
	'pay_fee' 		=> '手续费',
	'pack_fee' 		=> '包装费',
	'card_fee' 		=> '贺卡费',
	'no_pack' 		=> '不要包装',
	'no_card' 		=> '不要贺卡',
	'add_to_order' 	=> '加入订单',
	'calc_order_amount' => '计算订单金额',
	'available_surplus' => '可用余额：',
	'available_integral'=> '可用积分：',
	'available_bonus' 	=> '可用红包：',
	'admin' 			=> '管理员添加',
	'search_goods' 		=> '按商品编号或商品名称或商品货号搜索：',
	'category' 			=> '分类',
	'label_category' 	=> '分类：',
	'brand' 			=> '品牌',
	'user_money_not_enough' 	=> '用户余额不足',
	'pay_points_not_enough' 	=> '用户积分不足',
	'money_paid_enough' 		=> '已付款金额比商品总金额和各种费用之和还多，请先退款',
	'price_note' 				=> '备注：商品价格中已包含属性加价',
	'select_pack' 				=> '选择包装',
	'select_card' 				=> '选择贺卡',
	'select_shipping' 			=> '请先选择配送方式',
	'want_insure' 				=> '我要保价',
	'update_goods' 				=> '更新商品',
	'notice_user' 				=> '<strong>注意：</strong>搜索结果只显示前50条记录，如果没有找到相应会员，请更精确地查找。另外，如果该会员是从论坛注册的且没有在商城登录过，也无法找到，需要先在商城登录。',
	'amount_increase' 			=> '由于您修改了订单，导致订单总金额增加，需要再次付款',
	'amount_decrease' 			=> '由于您修改了订单，导致订单总金额减少，需要退款',
	'continue_shipping' 		=> '由于您修改了收货人所在地区，导致原来的配送方式不再可用，请重新选择配送方式',
	'continue_payment' 			=> '由于您修改了配送方式，导致原来的支付方式不再可用，请重新选择支付方式',
	'refund' 					=> '退款',
	'cannot_edit_order_shipped' => '您不能修改已发货的订单',
	'address_list' 				=> '从已有收货地址中选择：',
	'order_amount_change' 		=> '订单总金额由 %s 变为 %s',
	'shipping_note' 			=> '说明：因为订单已发货，修改配送方式将不会改变配送费和保价费。',
	'change_use_surplus' 		=> '编辑订单 %s ，改变使用预付款支付的金额',
	'change_use_integral' 		=> '编辑订单 %s ，改变使用积分支付的数量',
	'return_order_surplus' 		=> '由于取消、无效或退货操作，退回支付订单 %s 时使用的预付款',
	'return_order_integral' 	=> '由于取消、无效或退货操作，退回支付订单 %s 时使用的积分',
	'order_gift_integral' 		=> '订单 %s 赠送的积分',
	'return_order_gift_integral'=> '由于退货或未发货操作，退回订单 %s 赠送的积分',
	'invoice_no_mall' 			=> '&nbsp;&nbsp;&nbsp;多个发货单号，请用英文逗号（“,”）隔开。',
		
	'js_lang' => array(
		'input_price' 			=> '自定义价格',
		'pls_search_user' 		=> '请搜索并选择会员',
		'confirm_drop' 			=> '确认要删除该商品吗？',
		'invalid_goods_number' 	=> '商品数量不正确',
		'pls_search_goods' 		=> '请搜索并选择商品',
		'pls_select_area' 		=> '请完整选择所在地区',
		'pls_select_shipping' 	=> '请选择配送方式',
		'pls_select_payment' 	=> '请选择支付方式',
		'pls_select_pack' 		=> '请选择包装',
		'pls_select_card' 		=> '请选择贺卡',
		'pls_input_note' 		=> '请填写备注信息！',
		'pls_input_cancel' 		=> '请输入取消原因！',
		'pls_select_refund' 	=> '请选择退款方式！',
		'pls_select_agency' 	=> '请选择办事处！',
		'pls_select_other_agency' 	=> '该订单现在就属于这个办事处，请选择其他办事处！',
		'loading' 					=> '加载中...',
		'confirm_merge'				=> '您确定要合并这两个订单吗？',
		'remove_confirm' 			=> '删除订单将清除该订单的所有信息。您确定要这么做吗？',
		'merge_order_required'		=> '还没有选择完需要合并的订单哦！',
		'ok'						=> '确定',
		'cancel'					=> '取消',
		'operate_order_required'	=> '请选择需要操作的订单！',
		'select_user_empty'			=> '未搜索到会员信息',
		'select_goods_empty'		=> '未搜索到商品信息',
		'no_goods_number'			=> '无货',
		'no_brand_name'				=> '无品牌',
		'market_price'				=> '市场价',
		'goods_price'				=> '本店价',
		'custom_price'				=> '自定义价格',
		'no_other_attr'				=> '暂无其他属性',
		'not_add_goods'				=> '还没有添加商品哦！请搜索后加入订单！',
		'consignee_required'		=> '请填写收货人！',
		'email_required'			=> '请输入电子邮件！',
		'tel_required'				=> '请输入电话号码！',
		'address_required'			=> '请输入详细地址！',
		'city_required'				=> '请选择所在地区！',
		'shipping_required'			=> '请选择配送方式！',
		'payment_required'			=> '请选择支付方式！',
		'confirm'					=> '确认',
		'pay'						=> '付款',
		'unpay'						=> '未付款',
		'prepare'					=> '配货',
		'unship'					=> '未发货',
		'receive'					=> '收货确认',
		'invalid'					=> '无效',
		'after_service' 			=> '售后',
		'return_goods'				=> '退货',
		'refund'					=> '退款',
	),
	
	'pls_select_agency' 	=> '请选择办事处！',
	
	/* 订单操作 */
	'order_operate' 		=> '订单操作：',
	'label_refund_amount' 	=> '退款金额：',
	'label_handle_refund' 	=> '退款方式：',
	'label_refund_note' 	=> '退款说明：',
	'return_user_money' 	=> '退回用户余额',
	'create_user_account'	=> '生成退款申请',
	
	'not_handle' 			=> '不处理，误操作时选择此项',
	'order_refund' 			=> '订单退款：%s',
	'order_pay' 			=> '订单支付：%s',
	'send_mail_fail'		=> '发送邮件失败',
	'send_message' 			=> '发送/查看留言',
	'refund_error_notice'	=> '匿名用户不能返回退款到帐户余额！',
	'error_notice'			=> '操作有误！请重新操作！',
	
	/* 发货单操作 */
	'delivery_operate' 	=> '发货单操作：',
	'delivery_sn_number'=> '发货单流水号：',
	'invoice_no_sms' 	=> '请填写发货单号！',
	
	/* 发货单搜索 */
	'delivery_sn' => '发货单',
	
	/* 发货单状态 */
	'delivery_status' => array(
		0 	=> '已发货',
		1 	=> '退货',
		2 	=> '正常',
	),
	
	'normal'			=>	'正常',
	
	/* 发货单标签 */
	'label_delivery_status' => '发货单状态',
	'label_suppliers_name' 	=> '供货商',
	'label_delivery_time' 	=> '生成时间',
	'label_delivery_sn' 	=> '发货单流水号',
	
	'label_add_time' 	=> '下单时间',
	'label_update_time' => '发货时间',
	'label_send_number' => '发货数量',
	
	/* 发货单提示 */
	'tips_delivery_del' => '发货单删除成功！',
		
	/* 退货单操作 */
	'back_operate'		=> '退货单操作：',
	
	/* 退货单标签 */
	'return_time' 		=> '退货时间：',
	'label_return_time'	=> '退货时间',
	
	/* 退货单提示 */
	'tips_back_del' 	=> '退货单删除成功！',
	'goods_num_err' 	=> '库存不足，请重新选择！',
	
	//追加
	'action_user_two' 	=> '操作者',
	'op' => array(
		'confirm' 		=> '确认',
		'pay' 			=> '付款',
		'prepare' 		=> '配货',
		'ship' 			=> '发货',
		'cancel' 		=> '取消',
		'invalid' 		=> '无效',
		'return' 		=> '退货',
		'unpay' 		=> '设为未付款',
		'unship' 		=> '未发货',
		'cancel_ship' 	=> '取消发货',
		'receive' 		=> '已收货',
		'assign' 		=> '指派给',
		'after_service' => '售后',
		'remove' 		=> '删除',
		'you_can' 		=> '您可进行的操作',
		'split' 		=> '生成发货单',
		'to_delivery' 	=> '去发货',
	),
	'shipping_not_need' 			=>	'无需使用配送方式',
	
	//订单状态
	'label_finished'				=> '已完成',
	'label_await_ship'				=> '待发货',
	'label_await_pay'				=> '待付款',
	'label_await_confirm'			=> '待收货',
	'label_canceled'				=> '已取消',
	'label_shipped_part'			=> '部分发货',
	
	'order_back_list'				=>	'退货单列表',
	'return_look'					=>	'退货单操作：查看',
	'return_form'					=>	'无法找到对应退货单',
	'no_invoice'					=>	'无法找到响应的发货单收货人',
	'a_mistake'						=>	'操作有误',
	'bulk_operations'				=>	'批量操作',
	'confirm_delete'				=>	'您确定需要删除这些退货单吗？',
	'pls_select_retun'				=>	'请选择需要操作的退货单！',
	'pls_delivery_sn_number'		=>	'请输入发货单流水号',
	'pls_consignee'					=>	'请输入订单号或者收货人',
	'search'						=>	'搜索',
	'confirm_delete_one'			=>	'您确定需要删除该退货单吗？',
	'look_order'					=>	'查看订单',
	'display_consignee_info'		=>	'显示收货人信息',
	'delivery_delete'				=>	'您确定需要删除这些发货单吗？',
	'pls_select_delivery'			=>	'请选择需要操作的发货单！',
	'filter'						=>	'筛选',
	
	'search_order_confirm'			=>	'订单不存在请重新搜索',
	'pls_add_orders_user_type'		=>	'请先选择添加订单的用户类型',
	'pls_add_orders_user'			=>	'请选择添加订单的会员',
	'add_order_goods_info'			=>	'添加订单商品信息',
	'confirm_shipping_address'		=>	'确认收货地址',
	'add_order_shipping'			=>	'添加订单配送方式',
	'add_order_payment'				=>	'添加订单支付方式',
	'add_order_other_info'			=>	'添加订单其他信息',
	'add_order_money_info'			=>	'添加订单费用信息',
	'order_ship'					=>	'订单已发货！无法修改订单了（配送方式和发货单号除外）',
	'edit_goods'					=>	'编辑订单商品信息',
	'edit_order_receiver'			=>	'编辑订单收货人信息',
	'edit_order_shipping'			=>	'编辑订单配送方式',
	'edit_order_payment'			=>	'编辑订单支付方式',
	'edit_order_other_info'			=>	'编辑订单其他信息',
	'edit_order_money_info'			=>	'编辑订单费用信息',
	'edit_order_ship'				=>	'编辑订单发货单号',
	'pls_try_again'					=>	'订单生成失败,请重新尝试',
	'log_edit_goods'				=>	'编辑商品，',
	'log_add_goods'					=>	'添加商品，',
	'order_is'						=>	'订单号是 ',
	'update_order_ok'				=>	'订单商品更新成功',
	'pls_search_add'				=>	'您还没有选择商品,请搜索后加入订单哦!',
	'goods_add_order_ok'			=>	'商品成功加入订单',
	'log_edit_order'				=>	'编辑收货人，订单号是 ',
	'log_edit_shipping'				=>	'编辑配送方式，',
	'log_edit_payment'				=>	'编辑支付方式，',
	'log_edit_money'				=>	'编辑费用信息，',
	'log_edit_info'					=>	'编辑信息，订单号是 ',
	'cancel_add_new_order'			=>	'取消添加新订单',
	'order_operating'				=>	'订单操作：生成发货单',
	'not_exist_order'				=>	'该订单不存在',
	'pls_other_remark'				=>	'请填写备注信息及其他信息',
	'confirm_ok_order'				=>	'确认成功的订单：',
	'invalid_ok_order'				=>	'无效成功的订单：',
	'cancel_ok_order'				=>	'取消成功的订单：',
	'delete_ok_order'				=>	'删除成功的订单：',
	'log_maybe_handle'				=>	'您可进行的操作：',
	'unable_operation_order'		=>	'无法对订单执行该操作',
	'delete_error'					=>	'删除失败',
	'update_error'					=>	'更新失败',
	'no_special_grade'				=>	'非特殊等级',
	'not_member_inf_found'			=>	'未找到相关会员信息',
	'no_phone_number'				=>	'暂无手机号',
	'unverified'					=>	'未验证',
	'verified'						=>	'已验证',
	
	'confirm_approval_order'		=>	'您确定要审批这些订单吗？',
	'pls_select_order'				=>	'请选择需要操作的订单',
	'confirm_order_invalid'			=>	'您确定需要把这些订单设置为无效吗？',
	'confirm_order_cancel'			=>	'您确定要取消这些订单吗？',
	'search_order'					=>	'搜索订单',
	'user_purchase_information'		=>	'购买用户信息',
	'confirm_delete_order'			=>	'您确定要删除该订单么？',
	
	'no_order_operation_record'		=>	'该订单暂无操作记录',
	'pls_order_id'					=>	'请输入订单号或者订单id',
	'invoice_information'			=>	'发票信息',
	'product_thumbnail'				=>	'商品缩略图',
	'warehouse_name'				=>  '仓库名称',
	'order_no_goods'				=>	'该订单暂无商品',
	'operation_record'				=>	'操作记录',
	'order_operate_list' 			=> 	'订单操作',
	'self_support'					=>  '自营',
	'merchants_name'				=>  '商家名称',
	'main_order'					=>  '（主订单）',
	'child_order'					=>  '（子订单）',
	
	'start_time' 					=> 	'开始时间',
	'end_time' 						=> 	'结束时间',
	'to' 							=> 	'至',
	'shipping_address_information'	=>	'收货地址信息',
	'country_lable'					=>	'国家：',
	'province_and_city_lable'		=>	'省/市：',
	'city_lable'					=>	'市：',
	'area_lable'					=>	'区：',
	'shipping_payment'				=>	'配送/支付方式',
	'no_correspondence'				=>	'您可能没有添加配送插件或填写收货人地址信息！暂无对应的配送方式！',
	'buy_select'					=>	'选择购买用户',
	'order_goods_select'			=>	'选择订单商品',
	'payment_delivery'				=>	'支付方式/配送方式',
	'claim_costs'					=>	'确认费用',
	'member_user'					=>	'会员用户',
	'user_email_search'				=>	'按会员邮箱或会员名搜索：',
	'pls_keywords'					=>	'请输入关键字',
	'search_user_list'				=>	'搜索会员，搜到的会员将展示在下方列表框中。点击列表中选项，背景变蓝即为选中状态。',
	'filter_information_members'	=>	'筛选搜索到的会员信息',
	'no_content_yet'				=>	'暂无内容',
	'member_info'					=>	'会员信息',
	'member_name_lable'				=>	'会员名称：',
	'member_email_lable'			=>	'会员邮箱：',
	'member_iphone_lable'			=>	'会员手机：',
	'member_rank_lable'				=>	'会员等级：',
	'registration_time'				=>	'注册时间：',
	'email_verification'			=>	'邮箱验证：',
	'last_login_time'				=>	'最后登录时间：',
	'last_login_ip'					=>	'最后登录IP：',
	'confirm_delete_order_goods'	=>	'您确定要删除订单商品吗？',
	'filter_information_goods'		=>	'筛选搜索到的商品信息',
	'goods_sn_lable' 				=> 	'货号：',
	'commodity_stocks_lable' 		=> 	'商品库存：',
	'commercial_property' 			=> 	'商品属性',
	'region_list' 					=> 	'所在地区',
	'iphone'						=>	'电话/手机',
	'default_shipping_address'		=>	'（默认收货地址）',
	'fill_in_shipping_address'		=>	'填写收货地址',
	'address_lable'					=>	'详细地址：',
	'invoice_related'				=>	'发票相关',
	'message_remarks'				=>	'留言/备注',
	'remove_confirm' 				=>  '删除订单将清除该订单的所有信息。您确定要这么做吗？',
			
    //催单列表
    'list_oder_sn'				=> '订单编号',
    'list_consignee_address'	=> '收货地址',
    'list_audit_status'			=> '审核状态',
    'lsit_reminder'				=> '催单时间',
    'reminder_list'				=> '发货提醒列表',
    'processed'					=> '已处理',
    'untreated'					=> '未处理',
    
    'order_manage'			=> '订单管理',
    'order_list'			=> '订单列表',
    'order_query'			=> '订单查询',
    'merge_order'			=> '合并订单',
    'order_delivery_list'	=> '发货单列表',
    'order_reminder_list'	=> '催货单列表',
    
    'order_ss_edit'			=> '编辑发货状态',
    'order_ps_edit'			=> '编辑付款状态',
    'order_os_edit'			=> '编辑订单状态',
    'order_edit'			=> '添加编辑订单',
    'order_view'			=> '查看未完成订单',
    'order_view_finished'	=> '查看已完成订单',
    'repay_manage'			=> '退款申请管理',
    'booking_manage'		=> '缺货登记管理',
    'sale_order_stats'		=> '订单销售统计',
    'client_flow_stats'		=> '客户流量统计',
    'delivery_view'			=> '查看发货单',
    'back_view'				=> '查看退货单',
    'remind_order_view'		=> '催单列表',
    
    'guest_stats'			=> '客户统计',
    'order_stats'			=> '订单统计',
    'sale_general_stats' 	=> '销售概况',
    'users_order_stats'		=> '会员排行',
    'sale_list_stats'		=> '销售明细',
    'sale_order_stats'		=> '销售排行',
    'visit_sold_stats'		=> '访问购买率',
    'adsense_conversion_stats' => '广告转化率',
    
    'invalid_parameter'		=> '参数无效',
    'etc'					=> '等',
    'kind_of_goods'			=> '种商品',
    'check_money_fail_info'	=> '【支付的金额有误】:支付的金额有误',
    'check_money_fail'		=> '支付的金额有误',
    'pay_log_id'			=> '【支付日志id】:',
    'pay_status'			=> '支付状态',
    'buyers'				=> '买家',
    'new_order_notice'		=> '新订单通知：您有',
    'order_and'				=> '个新订单以及',
    'new_pay_order'			=> '个新付款的订单。',
    'click_view'			=> '点击查看',
    'new_order'				=> '最新订单',
    'order_stats_info'		=> '订单统计信息',
    
    'overview'				=> '概述',
    'more_info'             => '更多信息：',
    
    'order_back_help'		=> '欢迎访问ECJia智能后台退货单列表页面，系统中所有的退货单都会显示在此列表中。',
    'about_order_back'		=> '关于退货单列表帮助文档',
    
    'order_delivery_help'	=> '欢迎访问ECJia智能后台发货单列表页面，系统中所有的发货单都会显示在此列表中。',
    'about_order_delivery'	=> '关于发货单列表帮助文档',
    
    'delivery_info_help'	=> '欢迎访问ECJia智能后台发货单详情页面，在此页面可以查看有关发货单的详情信息。',
    'about_delivery_help'	=> '关于发货单详情帮助文档',
    
    'order_reminder_help'	=> '欢迎访问ECJia智能后台发货提醒列表页面，显示买家催款情况。',
    'about_order_reminder'	=> '关于发货提醒列表帮助文档',
    
    'no_delivery_order'		=> '无法找到对应发货单！',
    'order_operate_view'	=> '发货单操作：查看',
    'no_delivery_consigness'=> '无法找到相应的发货单收货人！',
    'operate_error'			=> '操作有误！',
    
    'order_list_help'		=> '欢迎访问ECJia智能后台订单列表页面，系统中所有的订单都会显示在此列表中。',
    'about_order_list'		=> '关于订单列表帮助文档',
    
    'order_info_help'		=> '欢迎访问ECJia智能后台订单详情页面，在此页面可以查看有关订单的所有信息。',
    'about_order_info'		=> '关于订单详情帮助文档',
    
    'order_query_help'		=> '欢迎访问ECJia智能后台订单查询页面，在此页面输入订单有关信息可以对该订单进行查询操作。',
    'about_order_query'		=> '关于订单查询帮助文档',
    
    'order_merge_help'		=> '欢迎访问ECJia智能后台合并订单页面，在此页面可以对订单进行合并。',
    'about_order_merge'		=> '关于合并订单帮助文档',
    
    'add_order_help'		=> '欢迎访问ECJia智能后台添加订单页面，在此页面可以进行添加订单操作。',
    'about_add_order'		=> '关于添加订单帮助文档',
    
    //仪表盘中模块
    'more'					=> '查看更多',
    'order_operatio'		=> '订单操作：退款',
    
    'not_shipping_orders'	=> '待发货订单',
    'unconfirmed_orders'	=> '未确认订单',
    'unpaid_orders'			=> '待支付订单',
    'finished_orders'		=> '已成交订单数',
    'booking'				=> '新缺货登记',
    'refund_application'	=> '退款申请',
    'parts_delivery_order'	=> '部分发货订单',
    
    'yuan'					=> '元',
    'monad'					=> '单',
    'order_money'			=> '本月订单总额',
    'order_count'			=> '本月订单数量',
    'wait_confirm_order'	=> '今日待确认订单',
    'today_order'			=> '今日待发货订单',
    'produce'				=> '生成',
    'back_sn'				=> '退货单',
    'order_payment'			=> '订单支付方式',
    'order_consignee'		=> '订单收货人',
    'error_order_detail'	=> '订单不属于该用户',
    'all'					=> '全部',
    'merchants'				=> '商家',
    
    'enter_merchant_keywords' 	=> '请输入商家名称关键字',
    'store_info'				=> '店铺信息',
    'label_merchants_name'		=> '店铺名称：',
    'label_responsible_person' 	=> '负责人：',
    'label_contact_mobile'		=> '联系方式：',
    'label_company_name'		=> '公司名称：',
    
    'label_expect_shipping_time'=> '期望送达时间：',
    'label_express_user'		=> '配送员：',
    'label_express_user_mobile'	=> '配送员电话：',
    
    'place_order'				=> '订单提交成功',
    'unpay'						=> '待付款',
    'payed'						=> '已付款',
    'shipping'					=> '配货中',
    'shipped'					=> '已发货',
    'confirm_receipted'			=> '已确认收货',
    'order_finished'			=> '订单已完成',
    'order_cancel'				=> '订单已取消',
    'merchant_process'			=> '等待商家接单',
    'express_user_pickup'		=> '配送员已取货',
    
    'submit_order'				=> '提交订单',
    'pay_for_order'				=> '支付订单',
    'merchant_shipping'			=> '商家发货',
    'confirm_receipt'			=> '确认收货',
    'surplus_type_0'			=> '充值',
    'time_format' 				=> '时间格式',
    'virtual_card_oos' 			=> '虚拟卡已缺货',
    'no_priv' 					=> '你没有权限操作他人订单',
    'order_already_received' 	=> '此订单已经确认过了，感谢您在本站购物，欢迎再次光临。',
    'order_invalid'          	=> '您提交的订单不正确。',
    'order_not_exist' 		 	=> '该订单不存在！',
    
    'current_ss_not_cancel' 		=> '只有在未发货状态下才能取消，你可以与店主联系。',
    'current_ps_not_cancel' 		=> '只有未付款状态才能取消，要取消请联系店主。',
    'current_os_not_unconfirmed' 	=> '当前订单状态不是“未确认”。',
    'current_os_already_confirmed' 	=> '当前订单已经被确认，无法取消，请与店主联系。',
    'return_surplus_on_cancel' 		=> '取消订单 %s，退回支付订单时使用的预付款',
    'return_integral_on_cancel' 	=> '取消订单 %s，退回支付订单时使用的积分',
    'buyer_cancel' 					=> '用户取消',
    'self'							=> '自营',
);

// end