<html>
    <head>
        <title>reg account</title>
        <meta charset="UTF-8">
<?php
    if(isset($_POST["acct"])){
        if(strcmp($_POST["pass1"],$_POST["pass2"])){
            printf("alert('passdiff');");
        } else{
            $filename="member.csv"
            $fp=fopen("member.csv","a")
            if(file_exists($filename)){
                $fp=fopen($filename,"r")
                while(($member=fgetcsv($fp,1000))!==false){
                    if(0==strcmp($member[0].$_POST["acct"]){
                        printf("alert('member');");
                        $newmember=false;
                        break;
                    }
                }
                fclose($fp);
            }
            if($newmember){

            }
            fputcsv($fp,[$_POST["acct"],$_POST["name"],
                password_hash($_POST["pass1"],PASSWORD_DEFAULT)]);
            fclose($fp);
        }
                printf("location.href='login.php';");

        }
            
        }
        

    }
?>
    </head>
    <body>
        <h1>reg account</h1>
        <form method="post">
            <p>account:<input type="text" name="acct"></p>
            <p>name:<input type="text" name="name"></p>
            <p>password:<input type="text" name="pass1"></p>
            <p>check password:<input type="text" name="pass2"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>