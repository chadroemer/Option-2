<?php
	/**
	 * Get a list of users from Active Directory.
	 */
	$ldap_password = 'PASSWORD';
	$ldap_username = 'USERNAME@DOMAIN';
	$ldap_connection = ldap_connect(HOSTNAME);
	if (FALSE === $ldap_connection){
		// Uh-oh, something is wrong...
	}

	// We have to set this option for the version of Active Directory we are using.
	ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
	ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.

	if (TRUE === ldap_bind($ldap_connection, $ldap_username, $ldap_password)){
		$ldap_base_dn = 'DC=XXXX,DC=XXXX';
		$search_filter = '(&(objectCategory=person)(samaccountname=*))';
		$attributes = array();
		$attributes[] = 'givenname';
		$attributes[] = 'mail';
		$attributes[] = 'samaccountname';
		$attributes[] = 'sn';
		$result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter, $attributes);
		if (FALSE !== $result){
			$entries = ldap_get_entries($ldap_connection, $result);
			for ($x=0; $x<$entries['count']; $x++){
				if (!empty($entries[$x]['givenname'][0]) &&
					 !empty($entries[$x]['mail'][0]) &&
					 !empty($entries[$x]['samaccountname'][0]) &&
					 !empty($entries[$x]['sn'][0]) &&
					 'Shop' !== $entries[$x]['sn'][0] &&
					 'Account' !== $entries[$x]['sn'][0]){
					$ad_users[strtoupper(trim($entries[$x]['samaccountname'][0]))] = array('email' => strtolower(trim($entries[$x]['mail'][0])),'first_name' => trim($entries[$x]['givenname'][0]),'last_name' => trim($entries[$x]['sn'][0]));
				}
			}
		}
		ldap_unbind($ldap_connection); // Clean up after ourselves.
	}

	$message .= "Retrieved ". count($ad_users) ." Active Directory users\n";
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

</body>
</html>