<?php /* Smarty version Smarty-3.1.14, created on 2014-06-09 21:59:28
         compiled from "Z:\home\prestashop16.ru\www\admin0969\themes\default\template\controllers\modules\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318205395d9e0a0ad53-07597427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48021ab02e1d35ace6299ac4bd5b2f1d3ba43ae9' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\admin0969\\themes\\default\\template\\controllers\\modules\\configure.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
    '7c0ebd5b79d9344be92a8b43eccf979549199bf0' => 
    array (
      0 => 'Z:\\home\\prestashop16.ru\\www\\admin0969\\themes\\default\\template\\page_header_toolbar.tpl',
      1 => 1397131752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318205395d9e0a0ad53-07597427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'page_header_toolbar_title' => 0,
    'page_header_toolbar_btn' => 0,
    'is_multishop' => 0,
    'shop_list' => 0,
    'multishop_context' => 0,
    'breadcrumbs2' => 0,
    'toolbar_btn' => 0,
    'k' => 0,
    'table' => 0,
    'btn' => 0,
    'help_link' => 0,
    'tab_modules_open' => 0,
    'tab_modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5395d9e10313f2_92077538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5395d9e10313f2_92077538')) {function content_5395d9e10313f2_92077538($_smarty_tpl) {?>


<?php if (!isset($_smarty_tpl->tpl_vars['title']->value)&&isset($_smarty_tpl->tpl_vars['page_header_toolbar_title']->value)){?>
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_header_toolbar_title']->value, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value)){?>
	<?php $_smarty_tpl->tpl_vars['toolbar_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value, null, 0);?>
<?php }?>

<div class="bootstrap">
	<div class="page-head">
		
		<h2 class="page-title">
			<?php echo smartyTranslate(array('s'=>'Configure "%s" module','sprintf'=>$_smarty_tpl->tpl_vars['module_display_name']->value),$_smarty_tpl);?>

		</h2>
		

		
		<ul class="breadcrumb page-breadcrumb">
			
			<?php if ($_smarty_tpl->tpl_vars['is_multishop']->value&&$_smarty_tpl->tpl_vars['shop_list']->value&&($_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_GROUP||$_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_SHOP)){?>
				<li class="breadcrumb-multishop">
					<?php echo $_smarty_tpl->tpl_vars['shop_list']->value;?>

				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!=''){?>
				<li class="breadcrumb-current">
					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!=''){?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['icon']!=''){?><i class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['icon'], ENT_QUOTES, 'UTF-8', true);?>
"></i><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!=''){?></a><?php }?>
				</li>
			<?php }?>
			<li><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</li>
			<li>
				<i class="icon-wrench"></i>
				<?php echo smartyTranslate(array('s'=>'Configure'),$_smarty_tpl);?>

			</li>
		</ul>
		

		
        <script type="text/javascript">
            var header_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Confirm reset'),$_smarty_tpl);?>
';
            var body_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Would you like to delete the content related to this module ?'),$_smarty_tpl);?>
';
            var left_button_confirm_reset = '<?php echo smartyTranslate(array('s'=>'No - reset only the parameters'),$_smarty_tpl);?>
';
            var right_button_confirm_reset = '<?php echo smartyTranslate(array('s'=>'Yes - reset everything'),$_smarty_tpl);?>
';
        </script>
		<div class="page-bar toolbarBox">
			<div class="btn-toolbar">
				<ul class="nav nav-pills pull-right">
					<li>
						<a id="desc-module-back" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['back_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">
							<i class="process-icon-back" ></i>
							<div><?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<!-- <li>
						<a id="desc-module-disable" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_disable_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
">
							<i class="process-icon-off"></i>
							<div><?php echo smartyTranslate(array('s'=>'Disable'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-uninstall" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_uninstall_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
">
							<i class="process-icon-uninstall"></i>
							<div><?php echo smartyTranslate(array('s'=>'Uninstall'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<li>
						<a id="desc-module-reset" class="toolbar_btn <?php if ($_smarty_tpl->tpl_vars['is_reset_ready']->value){?>reset_ready<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['module_reset_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
">
							<i class="process-icon-reset"></i>
							<div><?php echo smartyTranslate(array('s'=>'Reset'),$_smarty_tpl);?>
</div>
						</a>
					</li> -->
					<?php if (isset($_smarty_tpl->tpl_vars['module_update_link']->value)){?>
					<li>
						<a id="desc-module-update" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_update_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Update'),$_smarty_tpl);?>
">
							<i class="process-icon-refresh"></i>
							<div><?php echo smartyTranslate(array('s'=>'Check update'),$_smarty_tpl);?>
</div>
						</a>
					</li>
					<?php }?>
					<li>
						<a id="desc-module-hook" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['module_hook_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
">
							<i class="process-icon-anchor"></i>
							<div><?php echo smartyTranslate(array('s'=>'Manage hooks'),$_smarty_tpl);?>
</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
		
	</div>
</div>
<?php }} ?>