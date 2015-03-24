<?php
/* @var $this CvUserlogsController */
/* @var $model CvUserlogs */

$this->breadcrumbs=array(
	'Cv Userlogs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvUserlogs', 'url'=>array('index')),
	array('label'=>'Create CvUserlogs', 'url'=>array('create')),
);


?>

<h1>Manage Cv Userlogs</h1>

<html>
<head>
<!-- DataTables CSS -->


<link rel="stylesheet" type="text/css" 

href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" 

src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" 

src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
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

('cvUserlogs/deleteAll')?>"/>
<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl

('cvUserlogs/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>&nbsp;</th>
            <th>log id</th>
            <th>user id</th>
            <th>menu id</th>
            <th>description</th>
            <th>date</th>
            
             <th>is_delete</th>
           <th>&nbsp;</th>
       
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
        	<td><input type="checkbox" value="<?php echo $value->log_id?>" 

name="letter[]" />
        	</td>
       
      
          <?php 
     }
    ?>
            <td><?php echo $value->log_id?></td>
             <td><?php echo $value->user_id?></td>
              <td><?php echo $value->menu_id?></td>
               <td><?php echo $value->description?></td>
               
               <td><?php echo $value->date ?></td>
            
              <td><?php echo $value->is_delete ?></td>
               <td><a href="/cv_helper/index.php/cvUserlogs/view/<?php echo $value->log_id?>">view</a><br>
               <a href="" data-id="<?php echo $value->log_id?>" class="delete_sin">del</a><br>
               <a href="/cv_helper/index.php/cvUserlogs/update/id/<?php echo $value->log_id?>">update</a></td>
              
               
    
    
          
       
        </tr>
        <?php 
    }
    ?>
 
    </tbody>
</table>

</body>
</html>