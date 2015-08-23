<?php /* Smarty version Smarty-3.1.18, created on 2015-08-23 12:31:55
         compiled from ".\templates\data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12555d85a6c3f4c78-63604737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a8b665bffded7abe93a62c7a5372e2c165717fa' => 
    array (
      0 => '.\\templates\\data.tpl',
      1 => 1440322310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12555d85a6c3f4c78-63604737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55d85a6c567cf9_70010813',
  'variables' => 
  array (
    'teams' => 0,
    'key' => 0,
    'links_for_teams_preview' => 0,
    'team' => 0,
    'last_tour_results' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d85a6c567cf9_70010813')) {function content_55d85a6c567cf9_70010813($_smarty_tpl) {?><!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Таблица результатов чемпионата Украины по футболу(Премьер-лига)</title>
    <link rel="stylesheet" href="css/style.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="chart-wrap">
    <div class="chart-title">УКРАИНА. ПРЕМЬЕР-ЛИГА, 2015 - 2016</div>
    <div id="dashboard-stats" class="chart bars-horizontal brand-primary">
        <div class="chart-table">Турнирная таблица</div>
        <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['team']->key;
?>
            <div class="row">

                <p class="label"><img src="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['links_for_teams_preview']->value[$_tmp1];?>
" alt="lorem"><?php echo $_smarty_tpl->tpl_vars['team']->value["name"];?>
</p>
                <div class="bar-wrap">
                    <div class="bar" data-value="<?php echo $_smarty_tpl->tpl_vars['team']->value["point"];?>
"></div>
                </div>
                <span class="number"><?php echo $_smarty_tpl->tpl_vars['team']->value["point"];?>
</span>
            </div>
        <?php } ?>
    </div>
    <div class="result">
        <div class="chart-tour">Результати последнего тура</div>
        <div class ="result_list">
            <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['last_tour_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['links_for_teams_preview']->value[$_smarty_tpl->tpl_vars['result']->value["master"]];?>
">
                <?php echo $_smarty_tpl->tpl_vars['result']->value["count"];?>

                <img src="<?php echo $_smarty_tpl->tpl_vars['links_for_teams_preview']->value[$_smarty_tpl->tpl_vars['result']->value["guest"]];?>
">
                <br/>
            <?php } ?>
        </div>

    </div>
</div>
<div id="author"><a href="https://github.com/Bugaevskiy">Hungry Junior</a</div>
</body>
</html><?php }} ?>
