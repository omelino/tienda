<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:37:43
         compiled from "C:\xampp\htdocs\tienda\themes\leo_hitechgame\modules\blockgrouptop\blockgrouptop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2292957ab5857d3fb80-57080933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0f49f2fe4121d2a1004d3e3b2e8a9203f9ca96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\leo_hitechgame\\modules\\blockgrouptop\\blockgrouptop.tpl',
      1 => 1470840701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2292957ab5857d3fb80-57080933',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'link' => 0,
    'img_lang_dir' => 0,
    'PS_CATALOG_MODE' => 0,
    'currencies' => 0,
    'request_uri' => 0,
    'cookie' => 0,
    'f_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab5857d89f10_48766098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab5857d89f10_48766098')) {function content_57ab5857d89f10_48766098($_smarty_tpl) {?>

<!-- Block languages module -->

<div id="leo_block_top" class="topbar-box pull-right popup-over e-scale">
	<div class="popup-title">
		<i class="fa fa-cog"></i>
	</div>
	<div class="popup-content">
		<div id="countries" class="languages-block">
			<span><?php echo smartyTranslate(array('s'=>'Language','mod'=>'blockgrouptop'),$_smarty_tpl);?>
</span>
			<ul id="first-languages" class="countries_ul">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>class="selected_language"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
							<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])) {?>
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
							<?php } else { ?>
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">

							<?php }?>
						<?php }?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" />
						<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
							</a>
						<?php }?>
					</li>
				<?php } ?>
			</ul>
		</div>
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
			<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
			<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post"> 	
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
				<span><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'blockgrouptop'),$_smarty_tpl);?>
</span>
				<ul id="first-currencies" class="currencies_ul">
					<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
						<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
							<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['sign'];?>

							</a>
						</li>
					<?php } ?>
				</ul>
			</form>
			<?php }?>
		<?php }?>
	</div>
</div>


<!-- /Block languages module -->
<?php }} ?>
