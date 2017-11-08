// create connection and command objects
var ADConnection = new ActiveXObject("ADODB.connection");
var ADCommand = new ActiveXObject("ADODB.Command");

// 600 second timeout
ADConnection.ConnectionTimeout = 600;
// not entirly sure as I just copied this from online
ADConnection.Open("Data Source=Active Directory Provider;Provider=ADsDSOObject");
ADCommand.ActiveConnection = ADConnection;
// return 10000 rows at a time
ADCommand.Properties("Page Size") = 10000;
// i think this is defaulting to subtree
ADCommand.Properties("Searchscope") = 2;
// 600 second time out (not sure why this is needed twice)
ADCommand.Properties("Timeout") = 600;
// i don't want to cache results
ADCommand.Properties("Cache Results") = false;
// not sure what all the options do but this one seems to work for what i need
ADCommand.Properties("Chase Referrals") = 96;
ADCommand.CommandTimeout = 600;

// the LDAP query information
var ou = "DC=company,DC=com";
var filter = "....";
var fields = "name,mail";
var level = "sublevel";

// GC doesn't contain certain properties so for those have to use LDAP
var queryType = fields.match(/,(memberof|member),/ig) ? "LDAP" : "GC";

// put the query together
ADCommand.CommandText = "<" + queryType + "://" + ou + ">;" + filter + ";" + fields + ";" + level;

// execute
var recordSet = ADCommand.Execute;

// get the fields that were pulled
fields = fields.split(",");

// place to store the data into a JS friendly object
