<?php
/* Smarty version 3.1.39, created on 2024-10-12 09:29:30
  from 'C:\xampp\htdocs\ibilling\ui\theme\ibilling\settings_edit_role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_670a79ba38bce1_63619749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1346c0d0f7089918d4a0b2a3c11d31101f594b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ibilling\\ui\\theme\\ibilling\\settings_edit_role.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670a79ba38bce1_63619749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033852109670a79ba329782_72770783', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_2033852109670a79ba329782_72770783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2033852109670a79ba329782_72770783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Role'];?>
</h5>

                </div>
                <div class="ibox-content">



                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/edit_role_post/" method="post" accept-charset="utf-8">
                        <div class="form-group"><label for="rname" class="control-label"> <small class="req text-danger">* </small>Role Name</label><input type="text" id="rname" name="rname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->rname;?>
"></div>

                        <hr>


                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-bordered roles no-margin">
                                    <thead>
                                    <tr>
                                        <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Permission'];?>
</th>
                                        <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</th>
                                        <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</th>
                                        <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create'];?>
</th>
                                        <th class="text-center text-danger bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>

                                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['id'];?>
">
                                            <td class="bold"><?php echo $_smarty_tpl->tpl_vars['permission']->value['pname'];?>
</td>
                                            <td class="text-center">
                                                <div class="checkbox">
                                                    <div class="i-checks"><label  style="padding-left: 0"> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view" class="ib_checkbox" type="checkbox" value="yes" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'view')) {?>checked<?php }?>></label></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkbox">
                                                    <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit" class="ib_checkbox" type="checkbox" value="yes" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'edit')) {?>checked<?php }?>></label></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkbox">
                                                    <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create" class="ib_checkbox" type="checkbox" value="yes" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'create')) {?>checked<?php }?>></label></div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="checkbox checkbox-danger">
                                                    <div class="i-checks"><label> <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete" class="ib_checkbox" type="checkbox" value="yes" <?php if (Misc::check_permission_by_role_id($_smarty_tpl->tpl_vars['role']->value->id,$_smarty_tpl->tpl_vars['permission']->value['id'],'delete')) {?>checked<?php }?>></label></div>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </tbody>
                                </table>

                                <input type="hidden" name="rid" id="rid" value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
">

                                <button class="md-btn md-btn-primary" type="submit" id="submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>                        </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
