<?php
/* @var $this CvSiteadsController */
/* @var $model CvSiteads */

$this->breadcrumbs=array(
	'Cv Siteads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvSiteads', 'url'=>array('index')),
	array('label'=>'Create CvSiteads', 'url'=>array('create')),
);


?>

<h1>Manage Cv Siteads</h1>

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

('cvSiteads/deleteAll')?>"/>
<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl

('cvSiteads/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>&nbsp;</th>
            <th>ad id</th>
            <th>menu id</th>
            <th>ad description</th>
            <th>position id</th>
           
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
        	<td><input type="checkbox" value="<?php echo $value->ad_id?>" 

name="letter[]" />
        	</td>
       
      
          <?php 
     }
    ?>
            <td><?php echo $value->ad_id?></td>
             <td><?php echo $value->menu_id?></td>
              <td><?php echo $value->ad_description?></td>
               <td><?php echo $value->position_id?></td>
               
               
              <td><?php echo $value->is_delete ?></td>
               <td><a href="/cv_helper/index.php/cvSiteads/view/<?php echo $value->ad_id?>">view</a><br>
               <a href="" data-id="<?php echo $value->ad_id?>" class="delete_sin">del</a><br>
               <a href="/cv_helper/index.php/cvMenudetails/update/id/<?php echo $value->ad_id?>">update</a></td>
              
               
    
    
          
       
        </tr>
        <?php 
    }
    ?>
 
    </tbody>
</table>

</body>
</html>