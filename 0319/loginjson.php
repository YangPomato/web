<html>
    <head>
        <title>register account</title>
        <meta charset="UTF-8">
        <script>
<?php
    if(isset($_POST["acct"])){
        $filename="member.json";
        if(file_exists($filename)){
            $all=file_get_contents($filename);
            $member=json_decode($all,true);
            foreach($member as $m){
                if(0==strcmp($member[0],$_POST["acct"]) && password_verify($_POST["pass"],$member[2])){
                    printf("alert('success');");
                    printf("location.href='regjson.php';");
                    break;
                }
        
            }

            }else{
                printf("alert('no member');");
            }
    }
            
        
      
    
?>
        </script>
        <body>
            <H1>register account</H1>
            <form method="post">
            <p>account:<input type="text" name="acct"></p>
            <p>name:<input type="text" name="name"></p>
            <p>password:<input type="password" name="pass1"></p>
            <p>confirm password:<input type="password" name="pass2"></p>
            <p><input type="submit" value="login"></p>    
            </form>
        </body>
    </head>
</html>