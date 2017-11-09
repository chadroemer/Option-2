<?php
/**
 * Created by Joe of ExchangeCore.com
 */
if(isset($_POST['username']) && isset($_POST['password'])){

    $dc = "ldap://dc1.winona.edu";
	
    $dc_connect = ldap_connect($dc);
    $username = $_POST['username'];
    $password = $_POST['password'];

    $dc_connect_user = 'winona' . "\\" . $username;

    ldap_set_option($dc_connect, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($dc_connect, LDAP_OPT_REFERRALS, 0);

    $bind = @ldap_bind($dc_connect, $dc_connect_user, $password);


    if ($bind) {
        $filter="(sAMAccountName=$username)";
        $result = ldap_search($dc_connect,"dc=winona,dc=edu",$filter);
        ldap_sort($dc_connect,$result,"sn");
        $info = ldap_get_entries($dc_connect, $result);
        for ($i=0; $i<$info["count"]; $i++)
        {
            if($info['count'] > 1)
                break;
            echo "<p>Welcome <strong> ". $info[$i]["sn"][0] .", " . $info[$i]["givenname"][0] ."</strong><br /> Your username is:  <strong>(" . $info[$i]["samaccountname"][0] .")</strong></p>\n";

        }
        @ldap_close($dc_connect);
    } else {
        $msg = "Invalid username / password";
        echo $msg;
    }

}else{
?>
    <form action="#" method="POST">
        <label for="username">Username: </label><input id="username" type="text" name="username" /> 
        <label for="password">Password: </label><input id="password" type="password" name="password" />      
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php } ?> 