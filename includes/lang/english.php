<?php
/**
 * Control System Administrator Panel. CSAPanel
 *
 * Copyright CSAPanel, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 * @Developer : Cristian G. Danasel
 * @copyright : CSAPanel (http://www.csa-panel.ro)
 * @license : Under GNU Apache-2.0
 */


$lang = array(
	'no_javascript' => "This software requires javascript to be enabled in your browser",
	'dashboard' => "Dashboard",
	'home' => "Home",
	'clients' => "Clients",
	'id' => "ID",
	'pleasewait' => "Please wait...",
	'processing' => "Processing...",
	'requestprocessing' => "Your request is currently being processed",
	'requestprocessing2' => "Please wait a few moments while we perform the requested action.",
	'controlpanellogin' => "Control Panel Login",
	'login' => "Login",
	'loginsucces' => "Login Succes",
	'invalidlogin' => "Invalid email or password",
	'loginverified' => "Login verified, redirecting to panel",
	'unablelogin' => "Unable to login",
	'recoverpassword' => "Recover Password",
	'accountsuspended' => "Your account is suspended",
	'recoveryemail' => "An email has been sent including your login details",
	'recoveryemailerror' => "Unable to send a recovery email, please contact an administrator.",
	'noaccount' => "No account was found with that email address",
	'forgotpassword' => "Forgot Password",
	'email' => "Email",
	'username' => "Username",
	'password' => "Password",
	'confirmation' => "Confirmation Dialog",
	'language' => "Language",
	'nopermission' => "You do not have permission to access that page",
	'timedout' => "The application timed out while performing an action you requested",
	'edit' => "Edit",
	'delete' => "Delete",
	'loadingerror' => "Error loading information",
	'send' => "Send",
	'save' => "Save",
	'add' => "Add",
	'yesstr' => "Yes",
	'nostr' => "No",
	'configuration' => "Configuration",
	'settings' => "Settings",
	'ok' => "OK",
	'cancel' => "Cancel",
	'help' => "Help",
	'optimize' => "Optimize Database",
	'table' => "Table",
	'operation' => "Operation",
	'messages' => "Messages",
	'optimizedone' => "Optimizing tables... Done!",
	'optimizetips' => "This operation tells the MySQL server to clean up the database tables, optimizing them for better performance.",
	'optimizetips2' => "It is recommended that you run this at least once a month.",
	'recentevents' => "Recent Events",
	'norecentevents' => "No recent events.",
	'events' => "Events",
	'time' => "Timestamp",
	'runby' => "Run by",
	'noevents' => "No events have been logged",
	'viewall' => "View All",
	'description' => "Description",
	'logout' => "Logout",
	'statistics' => "Statistics",
	'generalsettings' => "Panel Settings",
	'panelinfo' => "Panel Information",
	'profile' => "Profile",
	'opssomething' => "Ops! Something is not right please contact the developer to fix this issues!",
	'cleareventlog' => "Clear Eventlog",
	'utilities' => "Utilities",
	'eventlogs' => "Event Logs",
	'eventlog' => "Eventlog",
	'eventlogclear' => "Eventlog clear success!",
	'eventlogempty' => "The event log is empty, you can not clear your eventlog since is empty!",
	'eventlogerror' => "An error occurred when cleaning please contact a developer to fix it!",
	'user' => "User",
	'documentation' => "Documentation",
	'management' => "Management",
	'deleteclient' => "Delete Client",
	'userremoved' => "The user has been removed",
	'smartsearch' => "Smart Search",
	'search' => "Search",
	'links' => "Links",
	'linksprofile' => "Profile Link",
	'linksprofileinfo' => "Please add your link to set the id clients whit the profile of your website. Do not use http:// or www.",
	//------------------------------- ADMINISTRATOR --------------------------------------------
	'myprofile' => "My profile",
	'yourprofilesetting' => "Your Profile Settings",
	'profilenotfound' => "Your profile was not found",
	'administrators' => "Administrators",
	'editadministrator' => "Edit Administrator",
	'addadministrator' => "Add Administrator",
	'deleteadministrator' => "Delete Administrator",
	'administratorremoved' => "The administrator has been removed",
	'nouserdatabase' => "The user was not found in the database",
	'errormainadmin' => "Unable to remove the main administrator",
	'usersaved' => "The user has been saved",
	'nouserspecified' => "No user was specified",
	'novalidemail' => "No email specified or invalid email address",
	'mainprivledges' => "You cannot remove the main admin privilege on this account without having another user set as main admin",
	'invalidemail' => "The email you entered is already in use, blacklisted, or invalid",
	'usernotexist' => "This user does not exist in the system.",
	'useradded' => "The user has been added",
	'nopassword' => "No password specified",
	'noneset' => "None set",
	'nouserfound' => "No user was found matching the critera",
	'active' => "Active",
	'suspended' => "Suspended",
	'allowedips' => "Allowed IPs",
	'deleteadmin' => "Are you sure you want to delete this admin?",
	'status' => "Status",
	'mainadmin' => "Main Admin",
	'firstname' => "First Name",
	'lastname' => "Last Name",
	'phone' => "Phone",
	'address' => "Address",
	'city' => "City",
	'country' => "Country",
	'state' => "State",
	'zipcode' => "ZipCode",
	'notes' => "Notes",
	'nodetails' => "We sorry but we do not found any details.",
	'noproof' => "We sorry but we do not found any proof.",
	//-------------------------- CLIENTS ----------------------------------
	'clientsummary' => "Client Summary",
	'name' => "Name",
	'userid' => "ID Users",
	'client_add' => "Add Client",
	'adduser' => "Add User",
	'edituser' => "Edit User",
	'client_list' => "Client List",
	'deleteuser' => "Delete User",
	'client' => "Client",
	'addclient' => "Add a new client",
	'manage' => "Manages",
	'untrustworthy' => "Untrustworthy",
	'pending' => "Pending",
	'trust' => "Trust",
	'usertrust' => "Trust users",
	'userpending' => "Pending users",
	'useruntrustworthy' => "Untrustworthy users",
	'proof' => "Proof",
	'realname' => "Firstname / Lastname",
	'unknown' => "Unknown",
	'approve' => "Approve",
	'nouserid' => "To add new client you need to specified the userid.",
	'proofnotdefined' => "To add new client you need to specified proof.",
	'clientexist' => "E-mail / User ID is already in database.",
	'userapprove' => "Clients was approve and add to main list.",
	//-------------------------- Settings ---------------------------------
	'title' => "Title",
	'template' => "Template",
	'defaultlanguage' => "Default Language",
	'timezone' => "Timezone",
	'forcehttps' => "Force HTTPS",
	'forcehttpstooltip' => "When this is enabled all users will be forced to use HTTPS, before enabling this make sure that HTTPS is properly configured on your web server.",
	'baseurl' => "Base URL",
	'redirectlogout' => "Redirect logout",
	'redirecttooltip' => "Enter a url here to redirect the user to when they logout.",
	'phpdebugging' => "PHP Debugging",
	'debugtooltip' => "Enable this when you need to debug php modifications.",
	'smartydebugging' => "Smarty Debugging",
	'debugsmartytooltip' => "Enable this to debug the template files.",
	'disabled' => "Disabled",
	'enabled' => "Enabled",
	'savesettings' => "Save Settings",
	'general' => "General",
	'eventlogging' => "Event Logging",
	'debugging' => "Debugging",
	'settingssaved' => "Settings have been saved",
	'savesettings' => "Save settings",
	'bugs' => "Bugs Reports",
	// ------------------------- Interface ------------------------------------
	'admincp' => "AdminCP",
	'top10' => "Top 10",
	'top10info' => "Last 10 Clients added.",
	'chooselang' => "Choose Language",
	'english' => "English",
	'romanian' => "Romanian",
	'dateadd' => "Date Added",
	'view' => "View",
	'addprooftip' => "Please enter your evidence, evidence may be Url (Link) and these links will be placed one above the other.",
	'adddetailstip' => "Please enter your details or arguments, details can be defined by your opinion or issue that was happening. Please enter the text or write it always enter when you start using a different sentence.",
	'addrealnametip' => "Enter the real name of the person you report it, please use Name and Surname ex : Cristian G. Danasel.",
	'addstatustip' => "Select statusu you want to define user.",
	'adduseridtip' => "Enter your user ID identical to the one that existed on that site.",
	'addemailtip' => "Enter e-mail on that site or e-mail where the action happened and it is known that e-mail.",
	'addreportclient' => "Report User",
	'addreportinfo' => "Add a user filling in the dates below.",
	'report' => "Report",
	'clientlist' => "Client List",
	'clientlistinfo' => "Here you can find a user, using intelligent search just adding email or name you want."
);
$lang['eventvars'] = array(
	'login' => "Admin {runby} logged in",
	'addedadmin' => "Administrator added: {user}",
	'editedadmin' => "Administrator edited: {user}",
	'deleteadmin' => "Administrator deleted: {username}",
	'addeduser' => "Client added: {user}",
	'editeduser' => "Client edited: {user}",
	'deleteuser' => "Client deleted: {username}",
	'approveuser' => "The Clients: {username} was approve."
);