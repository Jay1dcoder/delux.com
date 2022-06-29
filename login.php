<html>
    <head>
<title>user login and registration</title>
</head>
<body>
<h2>login here</h2>
<form action='validation.php' method='post'>
<div class='form-group'>
    <label>username</label>
    <input type ='text' name='user' class= 'form-control' required>

    <label>password</label>
    <input type ='password' name='password' class= 'form-control' required>
<button type='submit' class='btn btn-primary'>login</button>
</div>
</form>






<h2>register here</h2>
<form action='registration.php' method='post'>
<div class='form-group'>
    <label>username</label>
    <input type ='text' name='user' class= 'form-control' required>

    <label>password</label>
    <input type ='password' name='password' class= 'form-control' required>
<button type='submit' class='btn btn-primary'>login</button>
</div>
</form>
<script src='validate.js'></script>
</body>
</html>