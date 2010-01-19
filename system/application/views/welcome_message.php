<html>
<head>
<title>Welcome to CodeIgniter</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="site_container">
	<div class="panel_left">
		<h3>Tasks</h3>
		<ul>
			<li>Task List 1</li>
			<ul>
				<li>This is the first task.</li>
			</ul>
		</ul>
	</div>
	<div class="panel_right">
		<h3>Current Tasks</h3>
		<div id="tasks_current">
			<div class="task">
				<input type="checkbox" name="task_1" />This is the first task.
			</div>
			<div class="task">
				<input type="checkbox" name="task_2" />This is the second task.
			</div>
			<div class="task">
				<input type="checkbox" name="task_3" />This is the third task.
			</div>
			<div class="task">
				<input type="checkbox" name="task_4" />This is the fourth task.
			</div>
			<div class="task">
				<input type="checkbox" name="task_5" />This is the fifth task.
			</div>
			<div class="task">
				<input type="checkbox" name="task_6" />This is the sixth task.
			</div>
		</div>
		<h3>History</h3>
		<div id="tasks_history">
			<div class="task_complete">
				<input type="checkbox" name="task_7" disabled="disabled" />This is the seventh task.
			</div>
			<div class="task_complete">
				<input type="checkbox" name="task_8" disabled="disabled" />This is the eighth task.
			</div>
		</div>
	</div>
</div>

</body>
</html>