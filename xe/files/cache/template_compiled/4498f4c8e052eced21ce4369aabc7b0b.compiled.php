<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/tpl/css/editor.css--><?php $__tmp=array('modules/editor/tpl/css/editor.css','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/css/admin.css--><?php $__tmp=array('modules/admin/tpl/css/admin.css','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<!--#Meta:common/css/bootstrap.min.css--><?php $__tmp=array('common/css/bootstrap.min.css','','','');Context::loadFile($__tmp,'true','','');unset($__tmp); ?>
<section class="section">
	<h1><?php echo $__Context->component->title ?> ver. <?php echo $__Context->component->version ?></h1>
<table class="x_table x_table-striped x_table-hover">
<tr>
	<th scope="row"><div><?php echo $__Context->lang->component_author ?></div></th>
	<td>
		<?php if($__Context->component->author&&count($__Context->component->author))foreach($__Context->component->author as $__Context->author){ ?>
		<?php echo $__Context->author->name ?> <?php if($__Context->author->homepage || $__Context->author->email_address){ ?>(<?php if($__Context->author->homepage){ ?><a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->author->homepage ?></a><?php };
if($__Context->author->homepage && $__Context->author->email_address){ ?>, <?php };
if($__Context->author->email_address){ ?><a href="mailto:<?php echo $__Context->author->email_address ?>"><?php echo $__Context->author->email_address ?></a><?php } ?>)<?php } ?><br />
		<?php } ?>
</tr>
<?php if($__Context->component->homepage){ ?>
<tr>
	<th scope="row"><div><?php echo $__Context->lang->homepage ?></div></th>
	<td class="blue"><a href="<?php echo $__Context->component->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->component->homepage ?></a></td>
</tr><?php } ?>
<tr>
	<th scope="row"><div><?php echo $__Context->lang->regdate ?></div></th>
	<td><?php echo zdate(str_replace('-',"",$__Context->component->date), 'Y-m-d') ?></td>
</tr>
<?php if($__Context->component->license || $__Context->component->license_link){ ?>
<tr>
	<th scope="row"><div><?php echo $__Context->lang->component_license ?></div></th>
	<td>
		<?php echo nl2br(trim($__Context->component->license)) ?>
	<?php if($__Context->component->license_link){ ?>
		<p><a href="<?php echo $__Context->component->license_link ?>" onclick="window.close(); return false;"><?php echo $__Context->component->license_link ?></a></p>
	<?php } ?>
	</td>
</tr><?php } ?>
<?php if($__Context->component->description){ ?>
<tr>
	<th scope="row"><div><?php echo $__Context->lang->component_description ?></div></th>
	<td><?php echo nl2br(trim($__Context->component->description)) ?></td>
</tr><?php } ?>
</table>
<?php if($__Context->component->history){ ?>
<h1 class="h1"><?php echo $__Context->lang->component_history ?></h1>
<table class="x_table x_table-striped x_table-hover">
<?php if($__Context->component->history&&count($__Context->component->history))foreach($__Context->component->history as $__Context->history){ ?>
<tr class="row<?php echo $__Context->cycle_idx ?>">
	<th scope="row"><div>
		<?php echo $__Context->history->version ?><br />
		<?php echo zdate($__Context->history->date, 'Y-m-d') ?>
	</div></th>
	<td >
		<?php if($__Context->history->author&&count($__Context->history->author))foreach($__Context->history->author as $__Context->author){ ?>
		<p><?php echo $__Context->author->name ?> (<a href="<?php echo $__Context->author->homepage ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->author->homepage ?></a> / <a href="mailto:<?php echo $__Context->author->email_address ?>"><?php echo $__Context->author->email_address ?></a>)</p>
		<?php } ?>
		<?php if($__Context->history->description){ ?>
		<p><?php echo nl2br(trim($__Context->history->description)) ?></p>
		<?php } ?>
		<?php if($__Context->history->logs){ ?>
		<ul>
			<?php if($__Context->history->logs&&count($__Context->history->logs))foreach($__Context->history->logs as $__Context->log){ ?>
			<?php if($__Context->log->link){ ?>
				<li><a href="<?php echo $__Context->log->link ?>" onclick="window.close(); return false;"><?php echo $__Context->log->text ?></a></li>
			<?php }else{ ?>
				<li><?php echo $__Context->log->text ?></li>
			<?php } ?>
			<?php } ?>
		</ul>
		<?php } ?>
	</td>
</tr>
<?php } ?>
</table>
<?php } ?>
</section>
