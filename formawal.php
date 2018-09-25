<form method="POST" action="proses.php">
<?php
session_start();
error_reporting(0);
        $user = array(
                        "user" => "dianwp",
                        "pass"=>"2008"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        $_SESSION["username"] = $_POST['username']; 
        echo "Anda Berhasil Login $_POST[username]";
    } else {
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        <center>
    <table>
<tr>
    <td><label for="username">Username</label></td>
    <td><input type="text" name="username" id="username" style="width: 170px;height: 30px"></td>
</tr>
<tr>
    <td><label for="password">Password</label></td>
    <td><input type="password" name="password" id="password" style="width: 170px;height: 30px"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="submit" value="submit" style="color: black; width: 100px;height: 40px;border-radius: 10px"</td>
</tr>
</table>
</center>
    </form>    
<?php } ?>