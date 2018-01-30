<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 11:15:08
         compiled from "C:\xampp\htdocs\demo\application\views\default\article\view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:165385a7045ac5cbc86_30208176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a85b4241a5893f7abcdfcfdcae2ae394bbc145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\article\\view.tpl',
      1 => 1517307277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165385a7045ac5cbc86_30208176',
  'variables' => 
  array (
    'article' => 0,
    'base_url' => 0,
    'related_articles' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a7045ac6673e1_61341225',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a7045ac6673e1_61341225')) {
function content_5a7045ac6673e1_61341225 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\demo\\application\\third_party\\Smarty\\plugins\\modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '165385a7045ac5cbc86_30208176';
echo $_smarty_tpl->getSubTemplate ("../partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Home"), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../partials/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section class="content">
    <div class="container">
        <div class="row">

            <div class="col-md-7">
                <div class="article">
                    <div class="title"><h2><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['article']->value['article_name']);?>
</h2></div>
                    <div class="category">Category: <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
categories/<?php echo $_smarty_tpl->tpl_vars['article']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['cat_name'];?>
</a></div>
                    <div class="date">Created|Modified: <?php echo $_smarty_tpl->tpl_vars['article']->value['article_created_date'];?>
 | <?php echo $_smarty_tpl->tpl_vars['article']->value['article_created_date'];?>
</div>
                    <div class="des"><b><?php echo $_smarty_tpl->tpl_vars['article']->value['article_des'];?>
</b></div>
                    <div class="image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploads/articles/<?php echo $_smarty_tpl->tpl_vars['article']->value['article_thumbnail'];?>
" height="250" alt="Article Image">
                    </div>
                    <div class="content"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_content'];?>
</div>
                    <div class="tags">Tags: <?php echo $_smarty_tpl->tpl_vars['article']->value['article_tags'];?>
</div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="box box-default box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Related articles</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <?php
$foreach_0_item_sav['s_item'] = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_from = $_smarty_tpl->tpl_vars['related_articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_0_item_sav['item'] = $_smarty_tpl->tpl_vars['item'];
?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="media">
                                        <a class="media-left" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uploads/articles/<?php echo $_smarty_tpl->tpl_vars['item']->value['article_thumbnail'];?>
" style="width: 64px; height: 64px;">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
articles/<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['item']->value['article_name']);?>
</a></h4>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['article_des'];?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                <hr>
                            
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['item'];
}
if ($foreach_0_item_sav['s_item']) {
$_smarty_tpl->tpl_vars['item'] = $foreach_0_item_sav['s_item'];
}
?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("../partials/foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>