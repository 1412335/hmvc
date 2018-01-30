<?php /* Smarty version 3.1.28-dev/21, created on 2018-01-30 10:18:37
         compiled from "C:\xampp\htdocs\demo\application\views\default\partials\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:69085a70386db25e35_26345848%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de016d6da3f9ffa6e4f273d91763ee865b88448' => 
    array (
      0 => 'C:\\xampp\\htdocs\\demo\\application\\views\\default\\partials\\sidebar.tpl',
      1 => 1516854459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69085a70386db25e35_26345848',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5a70386db38817_87910006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a70386db38817_87910006')) {
function content_5a70386db38817_87910006 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '69085a70386db25e35_26345848';
?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/AdminLTE/dist/img/user2-160x160.jpg class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            
                
                    
                    
                
                
                    
                    
                        
                        
                            
                            
                                
                                
                                    
                                    
                                
                            
                        
                    
                
            

			<li class="treeview active">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Manage Category</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/tpl/category"><i class="fa fa-circle-o"></i> List Categories</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/tpl/category/add"><i class="fa fa-circle-o"></i> New Category</a></li>
				</ul>
			</li>

			<li class="treeview active">
				<a href="#">
					<i class="fa fa-dashboard"></i> <span>Manage Article</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/tpl/article"><i class="fa fa-circle-o"></i> List Articles</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/tpl/article/add"><i class="fa fa-circle-o"></i> New Article</a></li>
				</ul>
			</li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?php }
}
?>