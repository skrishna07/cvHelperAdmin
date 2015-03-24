<?php
/* @var $this CvUserdetailsController */
/* @var $model CvUserdetails */

$this->breadcrumbs=array(
	'Cv Userdetails'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CvUserdetails', 'url'=>array('index')),
	array('label'=>'Create CvUserdetails', 'url'=>array('create')),
);


?>

<h1>Manage Cv Userdetails</h1>

<html>
<head>
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" 

href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css">

  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" 

src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  
<!-- DataTables -->
  
<script type="text/javascript" charset="utf8" 

src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>

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

('cvUserdetails/deleteAll')?>"/>
<input type="hidden" id="app1URL"  value="<?php echo $this->createUrl

('cvUserdetails/delete')?>"/>
<table id="table_id" class="display">
    <thead>
        <tr>
        <th>&nbsp;</th>
            <th>user id</th>
            <th>name</th>
            <th>email</th>
            <th>contact</th>
            <th>username</th>
            <th>password</th>
            <th>role</th>
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
        	<td><input type="checkbox" value="<?php echo $value->user_id?>" 

name="letter[]" />
        	</td>
       
      
          <?php 
     }
    ?>
            <td><?php echo $value->user_id?></td>
             <td><?php echo $value->name?></td>
              <td><?php echo $value->email?></td>
               <td><?php echo $value->contact?></td>
               
               <td><?php echo $value->username ?></td>
             <td><?php echo $value->password ?></td>
              <td><?php echo $value->role ?></td>
              <td><?php echo $value->is_delete ?></td>
               <td><a href="/cv_helper/index.php/cvUserdetails/view/<?php echo $value->user_id?>">view</a><br>
               <a href="" data-id="<?php echo $value->user_id?>" 

class="delete_sin">del</a><br>
               <a href="/cv_helper/index.php/cvUserdetails/update/id/<?php echo $value->user_id?>">update</a></td>
              
               
    
    
          
       
        </tr>
        <?php 
    }
    ?>
 
    </tbody>
</table>

</body>
</html>