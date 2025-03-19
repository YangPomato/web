
<html>
    <head>
        <title>reg account</title>
        <meta charset="UTF-8">
<?php
    if(isset($_POST["acct"])){
        if(strcmp($_POST["pass1"],$_POST["pass2"])){
            printf("alert('passdiff');");
        } else{
            $filename="member.json";
            $newmember=true;
            $member=[];
            if(file_exists($filename)){
                $all=file_get_contents($filename);
                $member=json_decode($all,true);
                foreach($member as $m){
                    if(0==strcmp($m["id"],$_POST["acct"]))
                    printf("alert('member exist');");
                    $newmember=false;
                    break;
                }
            }
            
            if($newmember){
                array_push($member,[
                    "id"=>$_POST["acct"],
                    "name"=>$_POST["name"],
                    "pw"=>password_hash($_POST["pass1"],PASSWORD_DEFAULT)]);
                var_dump($member);
                json_encode($member);
                var_dump($json);

                var_dump(json_decode($json));
                file_put_contents($filename,json_encode($member));
                //printf("location.href='login.php';");
            
            }
        }
    }           
        
        

    
?>
    </head>
    <body>
        <h1>reg account</h1>
        <form method="post">
            <p>account:<input type="text" name="acct" placeholder="login account"></p>
            <p>name:<input type="text" name="name" placeholder="login name"></p>
            <p>password:<input type="text" name="pass1" placeholder="login password"></p>
            <p>check password:<input type="text" name="pass2" placeholder="check password"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>