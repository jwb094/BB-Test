<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#insert').click(function(event){
            event.preventDefault();
            $.ajax({
            url:"insert.php",
            method:"post",
            data:$('form').serialize(),
            dataType:"text",
            success:function(strMessage){
                $('#message').text(strMessage)
               }
            })
        })
    })
    </script>
</head>
<body>
<br>
<br>
<h1>New User</h1>
<p id="message"></p>
<div class="container">
    <form method="post">
        <table cellpadding="5" cellspacing="5">
            <tr><th>Name</th><td><input type="text" class="form-control" name="name" id="name"></td></tr>
            <tr><th>Email</th><td><input type="text" class="form-control" name="email" id="email"></td></tr>
            <tr><th>Gender</th><td><input type="text" class="form-control" name="gender" id="gender"></td></tr>
            <tr><th>Happy to receive Comm</th><td><input type="text" class="form-control" name="comms" id="comms"></td></tr>
            <tr><th>Password</th><td><input type="text" class="form-control" name="password" id="password"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" class="btn btn-success" name="insert" id="insert"></td></tr>
        </table>
    </form>
</div>

</body>
</html>