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
$LANG['schp_imgsrc']        = '轮播图片地址';
$LANG['schp_imgurl']        = '轮播图片链接';
$LANG['schp_imgdesc']       = '图片说明';
$LANG['schp_sort']          = '排序';
$LANG['trash_img_confirm']  = '您要删除这张轮播图片么？';
$LANG['custom_del_confirm'] = '您确定删除此广告吗？';
$LANG['tab_change_alert']   = '请先将自定义广告全部“关闭”,\n\n然后才可以点击系统默认。';
$LANG['trash_img']          = '删除这张轮播图片';
$LANG['custom_drop_img']    = '删除此广告';
$LANG['custom_change_img']  = '修改状态';
$LANG['add_new']            = '添加图片';
$LANG['add_flash']          = '添加播放器';
$LANG['add_ad']             = '自定义添加广告';
$LANG['add_picad']          = '添加图片广告';
$LANG['edit_picad']         = '编辑图片广告';
$LANG['edit_ad']            = '自定义编辑广告';
$LANG['title_flash_name']   = '广告名称';
$LANG['title_flash_type']   = '广告类型';
$LANG['title_flash_time']   = '添加时间';
$LANG['title_flash_status'] = '状态';
$LANG['title_upload_notice'] = '上传该广告的图片文件,或者你也可以指定一个远程URL地址为广告的图片';

$LANG['img_src']            = '图片地址';
$LANG['img_url']            = '图片链接';
$LANG['form_none']          = '表单信息不全,添加失败';
$LANG['web_url_no']         = '远程地址错误。请填写完整的 URL 地址！';
$LANG['src_empty']          = '地址错误。';
$LANG['back_custom_set']    = '返回自定义设置页';
$LANG['edit_ok']            = '操作成功';
$LANG['edit_no']            = '操作失败';
$LANG['id_error']           = '没有指定的轮播图片！';
$LANG['src_empty']          = '请填写轮播图片地址';
$LANG['link_empty']         = '请填写链接地址';
$LANG['go_url']             = '轮播图片列表';
$LANG['ad_play_url']        = '广告轮播列表';
$LANG['return_edit']        = '返回编辑页';
$LANG['width_height']       = '此模板的图片标准宽度为：%s 标准高度为：%s';
$LANG['invalid_type']       = '您上传的图片格式不正确！';
$LANG['flash_template']     = '可用轮播图片样式';
$LANG['current_theme']      = '当前样式';
$LANG['install_success']    = '启用Flash样式成功。';
$LANG['ad_img']             = '图片';
$LANG['ad_flash']           = 'Flash';
$LANG['ad_html']            = '代码';
$LANG['ad_text']            = '文字';

/* 内容页标签 */
$LANG['lable_flash_name']   = '广告名称：';
$LANG['lable_flash_type']   = '广告类型：';
$LANG['lable_flash_status'] = '状态：';
$LANG['lable_upload']       = '上传：';
$LANG['lable_url']          = '链接地址：';
$LANG['lable_from_web']     = '或者远程URL地址：';
$LANG['lable_content']      = '内容：';

/* 标签 */
$LANG['system_set']         = '系统默认';
$LANG['custom_set']         = '自定义';

/* JS 语言项 */
$LANG['js_languages']['setupConfirm'] = '启用新的Flash样式将覆盖原来的样式。<br />您确定要启用选定的样式吗？';

// end