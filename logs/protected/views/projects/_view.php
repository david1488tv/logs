<?php
/* @var $this ProjectsController */
/* @var $data Projects */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<?php echo CHtml::link(CHtml::encode('Make dump of DB'), array('/projects/dump', 'projId' => $data->name)); ?>
	<br />
	
	<?php echo CHtml::link(CHtml::encode('Watch logs'), array('ftp/index', 'projId' => $data->name)); ?>

</div>