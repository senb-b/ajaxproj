$(document).ready(function(){

	displayAll();

	function displayAll()
	{
		$.ajax({
			type: 'GET',
			url:"database/displayAll.php",
			dataType: 'text',
			success:function(data, status, xhr)
			{
				$('#viewRecords .tbody').html(data);
			},
			error: function(xhr,status,error){
				$message = "<h1>"+xhr['status']+" "+error+"</h1";
				$('body').html($message);
			}
		});
	}

		$('#addform').on("submit", function(e){
			e.preventDefault();
			var data = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'database/addRecord.php',
			data: data,
			success: function (data, status, xhr) {
				displayAll();  
			},
			error: function(xhr , status , error) {
				$message = "<h1>"+xhr['status']+" "+error+"</h1";
				$('body').html($message);
			}
		});
	});

	$(document).on('click','.edit',function(){
		var id = $(this).attr("value");
		$.ajax({
			type: 'GET',
			url: 'database/viewRecord.php?id='+id,
			dataType: 'json',
			success: function (data, status, xhr) {
				$("#editForm [name='id']").val(data["id"]);
				$("#editForm [name='name']").val(data["name"]);
				$("#editForm [name='age']").val(data["age"]);
				$("#editForm [name='course']").val(data["course"]);
			},
			error: function(xhr , status , error) {
				$message = "<h1>"+xhr['status']+" "+error+"</h1";
				$('body').html($message);
			}
		});

	});

	$('#editForm').on("submit", function(e){
		e.preventDefault();
		var data = $(this).serialize();
	$.ajax({
		type: 'POST',
		url: 'database/updateRecord.php',
		data: data,
		success: function (data, status, xhr) {
			displayAll();
		},
		error: function(xhr , status , error) {
			$message = "<h1>"+xhr['status']+" "+error+"</h1";
			$('body').html($message);
		}
	});
	});

		$(document).on('click','.delete',function(){
		var id = $(this).attr("value");
		var name = $(this).attr("data-value");
			$.ajax({
				type: 'GET',
				url: 'database/deleteRecord.php?id='+id,
				success: function (data, status, xhr) { 
					displayAll();
				},
				error: function(xhr , status , error) {
					$message = "<h1>"+xhr['status']+" "+error+"</h1";
					$('body').html($message);
				}
			});
		
	});


});
