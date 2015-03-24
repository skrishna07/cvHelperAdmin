<?php
/* @var $this CvMenudetailsController */
/* @var $model CvMenudetails */

$this->breadcrumbs=array(
	'Cv Menudetails'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvMenudetails', 'url'=>array('index')),
	array('label'=>'Create CvMenudetails', 'url'=>array('create')),
);

?>

<h1>Manage Cv Menudetails</h1>

<html>
<head>
<!-- DataTables CSS -->

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

('cvMenudetails/deleteAll')?>"/>
<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl

('cvMenudetails/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>&nbsp;</th>
            <th>menu </th>
            <th>label</th>
            <th>parent menu</th>
            <th>sub menu</th>
            <th>header/footer</th>
            <th>faq menu</th>
            <th>menu link</th>
             <th>is_delete</th>
           <th>options</th>
       
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
        	<td><input type="checkbox" value="<?php echo $value->menu_id?>" 

name="letter[]" />
        	</td>
       
      
          <?php 
     }
    ?>
            <td><?php echo $value->menu_id?></td>
             <td><?php echo $value->menu_label?></td>
              <td><?php echo $value->parent_menu_id?></td>
               <td><?php echo $value->has_sub_menu?></td>
               
               <td><?php echo $value->is_header_footer ?></td>
             <td><?php echo $value->is_faq_menu ?></td>
              <td><?php echo $value->menu_link ?></td>
              <td><?php echo $value->is_delete ?></td>
               <td><a href="/cv_helper/index.php/cvMenudetails/view/<?php echo $value->menu_id?>">view</a><br>
               <a href="" data-id="<?php echo $value->menu_id?>" class="delete_sin">del</a><br>
               <a href="/cv_helper/index.php/cvMenudetails/update/id/<?php echo $value->menu_id?>">update</a></td>
              
               
    
    
          
       
        </tr>
        <?php 
    }
    ?>
 
    </tbody>
</table>

</body>
</html>