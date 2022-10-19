<html>
<head>
	<title>Chat application in php using web scocket programming</title>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/partials/_header.html") ?>

	<style type="text/css">
		html,
		
		#wrapper
		{
			display: flex;
		  	flex-flow: column;
		  	height: 100%;
		}
		#remaining
		{
			flex-grow : 1;
		}
		#messages {
			height: 200px;
			background: whitesmoke;
			overflow: auto;
		}
		#chat-room-frm {
			margin-top: 10px;
		}
		#user_list
		{
			height:450px;
			overflow-y: auto;
		}

		#messages_area
		{
			height: 650px;
			overflow-y: auto;
			background-color:#e6e6e6;
		}

	</style>
</head>
<body>
	<div class="container">
		<br />
        <h3 class="text-center">PHP Chat Application using Websocket - Display User with Online or Offline Status</h3>
        <br />
		<div class="row">
			
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header"><h3>Chat Room</h3></div>
					<div class="card-body" id="messages_area">
					<?php
					

						echo '
						<div class="row justify-content-end">
							<div class="col-sm-10">
								<div class="shadow-sm alert alert-success">
									<b>Enes - </b>selammmmmm
									<br />
									<div class="text-right">
										<small><i>10.10.2021 14.10</i></small>
									</div>
								</div>
							</div>
						</div>
						';
					
					?>
					</div>
				</div>

				<form method="post" id="chat_form" data-parsley-errors-container="#validation_error">
					<div class="input-group mb-3">
						<textarea class="form-control" id="chat_message" name="chat_message" placeholder="Type Message Here" data-parsley-maxlength="1000" data-parsley-pattern="/^[a-zA-Z0-9\s]+$/" required></textarea>
						<div class="input-group-append">
							<button type="submit" name="send" id="send" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
						</div>
					</div>
					<div id="validation_error"></div>
				</form>
			</div>
			<div class="col-lg-4">
			
				<input type="hidden" name="login_user_id" id="login_user_id" value="1" />
				<div class="mt-3 mb-3 text-center">
					<img src="" width="150" class="img-fluid rounded-circle img-thumbnail" />
					<h3 class="mt-2">ENES NAME</h3>
					<a href="profile.php" class="btn btn-secondary mt-2 mb-2">Edit</a>
					<input type="button" class="btn btn-primary mt-2 mb-2" name="logout" id="logout" value="Logout" />
				</div>
				
				?>

				<!-- <div class="card mt-3">
					<div class="card-header">User List</div>
					<div class="card-body" id="user_list">
						<div class="list-group list-group-flush">
						<?php
						if(count($user_data) > 0)
						{
							foreach($user_data as $key => $user)
							{
								$icon = '<i class="fa fa-circle text-danger"></i>';

								if($user['user_login_status'] == 'Login')
								{
									$icon = '<i class="fa fa-circle text-success"></i>';
								}

								if($user['user_id'] != $login_user_id)
								{
									echo '
									<a class="list-group-item list-group-item-action">
										<img src="'.$user["user_profile"].'" class="img-fluid rounded-circle img-thumbnail" width="50" />
										<span class="ml-1"><strong>'.$user["user_name"].'</strong></span>
										<span class="mt-2 float-right">'.$icon.'</span>
									</a>
									';
								}

							}
						}
						?>
						</div>
					</div>
				</div> -->

			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	
	$(document).ready(function(){

		var conn = new WebSocket('ws://localhost:8080');
		conn.onopen = function(e) {
		    console.log("Connection established!");
		};

		conn.onmessage = function(e) {
		    console.log(e.data);

		    var data = JSON.parse(e.data);

		    var row_class = '';

		    var background_class = '';

		    if(data.from == 'Me')
		    {
		    	row_class = 'row justify-content-start';
		    	background_class = 'text-dark alert-light';
		    }
		    else
		    {
		    	row_class = 'row justify-content-end';
		    	background_class = 'alert-success';
		    }

		    var html_data = "<div class='"+row_class+"'><div class='col-sm-10'><div class='shadow-sm alert "+background_class+"'><b>"+data.from+" - </b>"+data.msg+"<br /><div class='text-right'><small><i>"+data.dt+"</i></small></div></div></div></div>";

		    $('#messages_area').append(html_data);

		    $("#chat_message").val("");
		};

		$('#chat_form').parsley();

		$('#messages_area').scrollTop($('#messages_area')[0].scrollHeight);

		$('#chat_form').on('submit', function(event){

			event.preventDefault();

			if($('#chat_form').parsley().isValid())
			{

				var user_id = $('#login_user_id').val();

				var message = $('#chat_message').val();

				var data = {
					userId : user_id,
					msg : message
				};

				conn.send(JSON.stringify(data));

				$('#messages_area').scrollTop($('#messages_area')[0].scrollHeight);

			}

		});
		
		// $('#logout').click(function(){

		// 	user_id = $('#login_user_id').val();

		// 	$.ajax({
		// 		url:"action.php",
		// 		method:"POST",
		// 		data:{user_id:user_id, action:'leave'},
		// 		success:function(data)
		// 		{
		// 			var response = JSON.parse(data);

		// 			if(response.status == 1)
		// 			{
		// 				conn.close();
		// 				location = 'index.php';
		// 			}
		// 		}
		// 	})

		// });

	});
	
</script>
</html>