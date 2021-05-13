<html>  
<head>  
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Covid 19 Patient Management</title>  
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/gif">

 
    <link rel = "stylesheet" type = "text/css" href = "formstyle.css"> 
    <style type="text/css">
    #frm{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 65px;  
    margin: 55px auto;  
    background: #ffffff54;  
    padding: 50px;  
    }  
    #btn{  
        color: #fff;  
        background: #337ab7; 
        padding: 7px;  
        margin-left: 70%;  
    }  
    </style>  
</head>  
<body>

    <center><h1 style="margin-top: 50px;font-size: 60px;color: white;font-family: 'Rowdies', cursive;">Covid 19 Patient Management</h1></center>
    <center><p style="font-size: 20px;color: white;">Enter </br> Username : admin </br> Password : admin</p></center>
    <div id = "frm" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">  
        <center><h1>Login</h1></center>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  