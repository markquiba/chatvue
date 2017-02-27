<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chat</title>
	<script>
	    window.Laravel =  <?php echo json_encode([
	        'csrfToken' => csrf_token(),
	    ]); ?>
    </script>

	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div id="app">
		<h1>Chatroom</h1>
		<chat-log :messages="messages"></chat-log>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>
	</div>
	<script src="js/app.js" charset="utf-8"></script>
</body>
</html>