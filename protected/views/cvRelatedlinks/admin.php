<?php
/* @var $this CvRelatedlinksController */
/* @var $model CvRelatedlinks */

$this->breadcrumbs=array(
	'Cv Relatedlinks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvRelatedlinks', 'url'=>array('index')),
	array('label'=>'Create CvRelatedlinks', 'url'=>array('create')),
);


?>

<h1>Manage Cv Relatedlinks</h1>

<html>
<head>

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable({
    	responsive: true});
} );
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#delete").on('click', function () {
		alert('hello');
		var url = $('#appURL').val();
		var url1 = $('#app1URL').val();
	    id=[];
	    var id = $("input[name='letter[]']:checked").map(function() { 
	            return this.value; 
	          }).get();
        alert('hello'+id)
	    $.ajax({
	   type: "POST",
	   data: {id:id},
	   url:url,
	   success: function(msg){
		   alert('success')
		   window.location.reload();
	   }
	});
	});
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	$(".delete_sin").on('click', function () {
	
		var url = $('#app1URL').val();
	
	    
	    var id = $(this).data('id');
       
	    $.ajax({
	   type: "POST",
	   data: {id:id},
	   url:url,
	   success: function(msg){
		   alert('success')
		   window.location.reload();
	   }
	});
	});
});
</script>
</head>
<body>

<input type="button" id="delete" calss="deleteall" value="deleteall" />
<input type="hidden" id="appURL"  value="<?php echo $this->createUrl

('cvRelatedlinks/deleteAll')?>"/>
<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl

('cvRelatedlinks/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>&nbsp;</th>
            <th>link id</th>
            <th>menu id</th>
            <th>link url</th>
            <th>link label</th>
          
             <th>is_delete</th>
           <th>operations</th>
       
        </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $value)
    {
    
    ?>
        <tr>
        <?php 
     if($value->is_delete=='Y')
     {
     	?>
     	<td>&nbsp;</td>
     	<?php 
     }
     
     else{
     	?>
        	<td><input type="checkbox" value="<?php echo $value->link_id?>" 

name="letter[]" />
        	</td>
       
      
          <?php 
     }
    ?>
            <td><?php echo $value->link_id?></td>
             <td><?php echo $value->menu_id?></td>
              <td><?php echo $value->link_url?></td>
               <td><?php echo $value->link_label?></td>
               
             
              <td><?php echo $value->is_delete ?></td>
               <td><a href="/cv_helper/index.php/cvRelatedlinks/view/<?php echo $value->link_id?>">view</a><br>
               <a href="" data-id="<?php echo $value->link_id?>" class="delete_sin">del</a><br>
               <a href="/cv_helper/index.php/cvRelatedlinks/update/<?php echo $value->link_id?>">update</a></td>
              
               
    
    
          
       
        </tr>
        <?php 
    }
    ?>
 
    </tbody>
</table>

</body>
</html>