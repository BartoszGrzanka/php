<?php

session_start();
$USERNAME="dupa";
$PASSWORD ="dupa1";
if (isset($_POST['submit'])) {
    if ($_POST['login'] == $USERNAME) {
        if ($_POST['password']==$PASSWORD) {
            $_SESSION['user'] = "WspaniałyCzłowiek";
            echo "Zalogowano";
            header("Refresh: 1,url=LoginForm.php");
        }
        else{
            echo "Incorrect password";

        }
    }
    else{
        echo "Incorrect login";

    }
}
else{
    echo "LoginError";

}
/*<script type="text/javascript">
    var delayInMilliseconds = 5000; //1 second = 1000

    setTimeout(function() {
        <?php header("Location: LoginForm.php");?>
    }, delayInMilliseconds);
</script>*/
header("Refresh: 5,url=LoginForm.php")
?>
