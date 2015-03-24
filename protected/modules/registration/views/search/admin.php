<?php
/* @var $this SearchController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
);


?>

<h1>Manage Registrations</h1>

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
<input type="hidden" id="appURL"  value="<?php echo $this->createUrl('registration/search/deleteAll')?>"/>
<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl('registration/search/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>&nbsp;</th>
            <th>user id</th>
            <th>username</th>
            <th>password</th>
            
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
        	<td><input type="checkbox" value="<?php echo $value->userid?>" 

name="letter[]" />
        	</td>
       
      
          <?php 
     }
    ?>
            <td><?php echo $value->userid?></td>
             <td><?php echo $value->username?></td>
              <td><?php echo $value->password?></td>
               <td><?php echo $value->role?></td>
               
              
              <td><?php echo $value->is_delete ?></td>
               <td><a href="/cv_helper/index.php/registration/search/view/id/<?php echo $value->userid?>">view</a><br>
               <a href="" data-id="<?php echo $value->userid?>" class="delete_sin">del</a><br>
               <a href="/cv_helper/index.php/registration/search/update/id/<?php echo $value->userid?>">update</a></td>
              
               
    
    
          
       
        </tr>
        <?php 
    }
    ?>
 
    </tbody>
</table>

</body>
</html>