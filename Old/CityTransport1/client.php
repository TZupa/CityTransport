<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> City Transport </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		<link rel="stylesheet" type="text/css" href="style/style.css" />
	</head>
	<body>

	
	
	
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped" id="myTable">
    <thead>
		 <button class="btn btn-primary btn-xs pull-right" onclick="addRow()">Ajouter une ligne</button>

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Parent ID</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <tr>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td class="text-center"><button class="editbtn btn btn-info btn-xs glyphicon glyphicon-edit" onclick="editRow(this)">Edit</button> <button class="deletebtn btn btn-danger btn-xs" onclick="deleteRow(this)"><span class="glyphicon glyphicon-remove"></span>Delete</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Products</td>
                <td>Main Products</td>
                <td class="text-center"><button class="editbtn btn btn-info btn-xs glyphicon glyphicon-edit" onclick="editRow(this)">Edit</button> <button class="deletebtn btn btn-danger btn-xs" onclick="deleteRow(this)"><span class="glyphicon glyphicon-remove"></span>Delete</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td class="text-center"><button class="editbtn btn btn-info btn-xs glyphicon glyphicon-edit" onclick="editRow(this)">Edit</button> <button class="deletebtn btn btn-danger btn-xs" onclick="deleteRow(this)"><span class="glyphicon glyphicon-remove"></span>Delete</button></td>
            </tr>
    </table>
    </div>
</div>

<script>

  
  
  	function editRow(btn) {
      
          var currentTD = $(btn).parents('tr').find('td');
          if ($(btn).html() == 'Edit') {                  
              $.each(currentTD, function () {
                  $(this).prop('contenteditable', true)
              });
          } else{
             $.each(currentTD, function () {
                  $(this).prop('contenteditable', false)
              });
          }

          $(btn).html($(btn).html() == 'Edit' ? 'Save' : 'Edit')

      }
	  

 
  
  
  function deleteRow(btn) {
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);
}
  function addRow() {
  var table = document.getElementById("myTable"); 
  var row = table.insertRow(1);

  // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
	
  cell4.setAttribute("class","text-center");
  cell4.innerHTML = '<button class="editbtn btn btn-info btn-xs glyphicon glyphicon-edit" onclick="editRow(this)">Edit</button> <button class="deletebtn btn btn-danger btn-xs" onclick="deleteRow(this)"><span class="glyphicon glyphicon-remove"></span>Delete</button>'; 
	
}


</script>


















	</body>
</html>