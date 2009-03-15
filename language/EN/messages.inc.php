<?php
/***************************************************************************
 *   copyright				: (C) 2008 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/

if(!defined('InWeBid')) exit();

$MSG['COPYRIGHT'] = ""; //your copyright message
// // CHARSET ENCODING
// // Change the charset according to the language used in this file.
// // UTF-8 should work with almost any language
$CHARSET = "UTF-8";
// // DOCUMENT DIRECTION
// // Change the $DOCDIR variable below according to the document direction neeeded
// // by the language you are using.
// // Possible values are:
// // - ltr (default) - means left-to-right document (almost any language)
// // - rtl - means right-to-left document (i.e. arabic, hebrew, ect).
$DOCDIR = "ltr";
// // Error messages and user interface messages are below. Translate them taking care of leaving
// // The PHP and HTML tags unchanged.
// // Error messages =============================================================
$ERR = ""; // leave this line as is
$ERR_000 = ""; // leave this line as is
$ERR_001 = "Database access error. Please contact the site administrator.";
$ERR_002 = "Name missing";
$ERR_003 = "Username missing";
$ERR_004 = "Password missing";
$ERR_005 = "Please, repeat your password";
$ERR_006 = "Passwords do not match";
$ERR_007 = "E-mail address missing";
$ERR_008 = "Please, insert a valid e-mail address";
$ERR_009 = "The username already exists in the database";
$ERR_010 = "Username too short (min 6 chars)";
$ERR_011 = "Password too short (min 6 chars)";
$ERR_012 = "Address missing";
$ERR_013 = "City missing";
$ERR_014 = "Country missing";
$ERR_015 = "ZIP/Post code missing";
$ERR_016 = "Please, insert a valid ZIP/Post code";
$ERR_017 = "Item's title missing";
$ERR_018 = "Item's description missing";
$ERR_019 = "Starting bid missing";
$ERR_020 = "Minimum quantity field is not correct";
$ERR_021 = "Reserve price missing";
$ERR_022 = "The reserve price you inserted is not correct";
$ERR_023 = "Choose a category for your item";
$ERR_024 = "Choose a payment method";
$ERR_025 = "User unknown";
$ERR_026 = "Password incorrect";
$ERR_027 = "Currency symbol missing";
$ERR_028 = "Please, insert a valid e-mail address";
$ERR_029 = "User data are already registered";
$ERR_030 = "Fields must be numeric and in nnnn.nn format";
$ERR_031 = "The form you are submitting is not complete";
$ERR_032 = "One or both the e-mail addresses are not correct";
$ERR_033 = "Invalid confirmation link";
$ERR_034 = "Your bid must be at least: ";
$ERR_035 = "Days field must be numeric";
$ERR_036 = "The seller cannot bid in his/her own auctions";
$ERR_037 = "Search keyword cannot be empty";
$ERR_038 = "Login incorrect";
$ERR_039 = "You have already confirmed your registration.";
$ERR_040 = "You are the winning bidder and cannot place a bid lower than your previous maximum bid.";
$ERR_041 = "Please, choose a rate between 1 and 5";
$ERR_042 = "You comment is missing";
$ERR_043 = "Incorect field format: must be numeric"; //HERE
$ERR_044 = "Cookies must be enabled to login.";
$ERR_045 = "No closed auctions for this user.";
$ERR_046 = "No active auctions for this user.";
$ERR_047 = "Required fields missing";
$ERR_047_a = "Username is invalid can only contain letters and numbers";
$ERR_048 = "Incorrect login";
$ERR_049 = "Database connection failed. Please edit your includes/data.inc.php
            file to set your database parameters.";
$ERR_050 = "Acceptance text missing";
$ERR_051 = "Please, insert a valid number of digits";
$ERR_052 = "Please, insert the number of news to show in the news box";
$ERR_053 = "Please, insert a valid number of news";
$ERR_054 = "Please, fill in both the password fields";
$ERR_055 = "User <I>%s</I> already exists in the database";
$ERR_056 = "Bid increment value missing";
$ERR_057 = "Bid increment values must be numeric";
$ERR_058 = "Incorrect money format.";
$ERR_059 = "Your previous bid for this auction is higher than your current bid.<br>  In Dutch Auctions you may not place a bid if your previous <b>amount of bid times the quantity</b> is greater than your <b>amount of current bid times the quantity</b>.";
$ERR_060 = "The end date is less than or equal to the start date. Change the auction's duration to fix this problem.";
$ERR_061 = "The buy now price you inserted is not correct";
$ERR_062 = "You may not set a reserve price in a Dutch Auction";
$ERR_063 = "You may not use custom increment in a Dutch Auction";
$ERR_064 = "You may not use the Buy Now feature in a Dutch Auction";
$ERR_065 = "Error updating information";
$ERR_066 = "Error deleting information";
$ERR_067 = "Required fields missing (all fields are required).";
$ERR_100 = "User does not exist";
$ERR_101 = "Password incorrect";
$ERR_102 = "Username does not exist";
$ERR_103 = "You cannot rate yourself";
$ERR_104 = "All fields required";
$ERR_105 = "Username does not exist";
$ERR_106 = "<br><br>No user specified";
$ERR_107 = "Username is too short";
$ERR_108 = "Password is too short";
$ERR_109 = "Passwords do not match";
$ERR_110 = "E-mail address incorrect";
$ERR_111 = "Such a user already exists";
$ERR_112 = "Data missing";
$ERR_113 = "You must be at least 18 years old to register";
$ERR_114 = "No active auctions for this category";
$ERR_115 = "E-mail address already used";
$ERR_116 = "No help available on that topic.";
$ERR_117 = "Incorrect date format";
$ERR_119 = "sample error message for preview purposes.<br>
			MySQL said: cannot connect to server (localhost)";
$ERR_122 = "No auction found";
$ERR_601 = "Quantity field not correct";
$ERR_602 = "Images must be GIF or JPG";
$ERR_603 = "The image is too large.";
$ERR_604 = "This auction already exists";
$ERR_605 = "The specified ID is not valid";
$ERR_606 = "The specified auction ID is not correct";
$ERR_607 = "Your bid is below the minimum bid";
$ERR_608 = "The specified quantity is not correct";
$ERR_609 = "User does not exist";
$ERR_610 = "Fill in your username and password";
$ERR_611 = "Password incorrect";
$ERR_612 = "You cannot bid, you are the seller!";
$ERR_613 = "You cannot bid, you are the winner!";
$ERR_614 = "This auction is closed";
$ERR_615 = "You cannot bid below the minimum bid!";
$ERR_616 = "Zip/Post code too short";
$ERR_617 = "Telephone number incorrect";
$ERR_618 = "Your account has been suspended or you didn't confirm it.";
$ERR_619 = "This auction has been suspended";
$ERR_620 = "Parent category has been deleted by the Administrator.";
$ERR_700 = "Incorrect date format";
$ERR_701 = "Invalid quantity (must be >0).";
$ERR_702 = "Current Bid must be greater than minimum bid.";
$ERR_703 = "<br>You may not leave feed about this user! <br>You are not a winner/seller in this  closed auction!";
$ERR_704 = "<br>You may not leave feedback about this user! <br>This auction is not closed!";
$ERR_705 = "You may only leave feedback, if you have a closed transaction with this user!";
$ERR_706 = "<I>Max. number of pictures</I> must be numeric.";
$ERR_707 = "<I>Max picture size</I> cannot be zero.";
$ERR_708 = "<I>Max picture size</I> must be numeric.";
$ERR_709 = "The picture you uploaded is too big. It cannot exceed ";
$ERR_710 = "Wrong file type. Allowed types are: GIF, PNG and JPEG";
$ERR_711 = "You cannot buy, you are the seller!";
$ERR_712 = "<b>Buy It Now</b> is not available for this auction";
$ERR_713 = "Sorry, you are suspended by the administrator.";
$ERR_714 = "You have not accivated your account yet";
$ERR_5000 = "Messages to show must be numeric";
$ERR_5001 = "Messages to show cannot be zero";
$ERR_5002 = "You must select at least one statistic type (accesses, browsers & platforms, by country)";
$ERR_5007 = "To set up a private auction you must select at least one user from the Invited Users list.";
$ERR_5014 = "Subject or message missing";
$ERR_5029 = "Name missing";
$ERR_5030 = "Username missing";
$ERR_5031 = "Password missing";
$ERR_5032 = "Please enter you password twice";
$ERR_5033 = "E-mail address missing";
$ERR_5034 = "Address missing";
$ERR_5035 = "City missing";
$ERR_5036 = "Province missing";
$ERR_5037 = "Country missing";
$ERR_5038 = "ZIP/Post code missing";
$ERR_5039 = "Telephone missing";
$ERR_5040 = "Birthdate missing or incomplete";
$ERR_5045 = "The reserve price cannot be less than the minimum bid";
$ERR_5046 = "The buy now price cannot be less than the minimum bid and/or the reserve price";
$ERR_25_0001 = "Please choose a sub-category";
$ERR_25_0002 = "<p>URL file-access is disabled on your server so WeBid is unable to run the version check</p>";

// // UI Messages =============================================================
$MSG['001'] = "New user registration";
$MSG['002'] = "Your name";
$MSG['003'] = "Username";
$MSG['004'] = "Password";
$MSG['005'] = "Please, repeat your password";
$MSG['006'] = "Your e-mail address";
$MSG['007'] = "Submit";
$MSG['008'] = "Delete";
$MSG['009'] = "Address";
$MSG['010'] = "City";
$MSG['011'] = "State/Province";
$MSG['012'] = "ZIP/Post Code";
$MSG['013'] = "Telephone";
$MSG['014'] = "Country";
$MSG['015'] = "--Select here";
$MSG['016'] = "Registration completed. Your data has been received.<br>A confirmation e-mail has been sent to: <i>%s</i>";
$MSG['016_a'] = "Registration completed. Your data has been received.<br>The site admin will shortly review your account, once your account has been accepted by the admin you will be able to login";
$MSG['016_b'] = "Registration completed. Your data has been received.<br>You may now login using your username and password.";
$MSG['017'] = "Item title";
$MSG['018'] = "Item description<br>(HTML allowed)";
$MSG['019'] = "Default Image";
$MSG['020'] = "Auction starts with";
$MSG['021'] = "Reserve price";
$MSG['022'] = "Duration";
$MSG['023'] = "Shipping fee";
$MSG['024'] = "Your new password";
$MSG['025'] = "Shipping conditions";
$MSG['026'] = "Payment methods";
$MSG['027'] = "Choose a category";
$MSG['028'] = "Sell an item";
$MSG['029'] = "No";
$MSG['030'] = "Yes";
$MSG['031'] = "Buyer pays shipping expenses";
$MSG['032'] = "Seller pays shipping expenses";
$MSG['033'] = "International shipping";
$MSG['034'] = "Preview auction";
$MSG['035'] = "Reset form";
$MSG['036'] = "Submit my data";
$MSG['037'] = "No image available";
$MSG['038'] = "Asking Price";
$MSG['039'] = "No reserve price";
$MSG['040'] = "Submit auction";
$MSG['041'] = "Item category";
$MSG['042'] = "Item description";
$MSG['043'] = "Will NOT ship internationally";
$MSG['044'] = "Fill in your username and password and submit the form.";
$MSG['045'] = "Users management";
$MSG['046'] = "You can still <a href='sell.php?mode=recall'>make changes</a> to your auction";
$MSG['047'] = " new";
$MSG['048'] = "User Registration Fields";
$MSG['049'] = "If you are not registered, ";
$MSG['050'] = "(min 6 chars)";
$MSG['051'] = "Main page";
$MSG['052'] = "Login";
$MSG['053'] = "Edit admin e-mail";
$MSG['054'] = "Submit new e-mail";
$MSG['055'] = "Edit the admin e-mail address below";
$MSG['056'] = "E-mail address updated";
$MSG['057'] = "Edit the currency symbol below";
$MSG['058'] = "Submit new currency";
$MSG['059'] = "Email Sent";
$MSG['060'] = "Currency symbol updated";
$MSG['061'] = "INSTALLATION";
$MSG['062'] = "ADMINISTRATION";
$MSG['063'] = "CONFIGURATION";
$MSG['064'] = "Step 1. - Create MySQL database";
$MSG['065'] = "Step2. - Create necessary tables";
$MSG['066'] = "Step 3. - Populate tables";
$MSG['067'] = "View Open Auctions";
$MSG['068'] = "Display Custom Increments";
$MSG['069'] = "Auctions Duration";
$MSG['070'] = "Select <b>Yes</b> if you want the custom bid increment selection to be displayed in the Sell page. Otherwise select <b>No</b>";
$MSG['071'] = "Update";
$MSG['072'] = " users are awaiting feedback from you";
$MSG['073'] = "Lines delete";
$MSG['074'] = "Use the checkbox Delete and the button DELETE to delete lines. Simply edit the text fields and press UPDATE to save the changes.";
$MSG['075'] = "Payment Methods";
$MSG['076'] = "Currency Symbol";
$MSG['077'] = "Edit admin e-mail address";
$MSG['078'] = "Categories Table";
$MSG['081'] = "Countries Table";
$MSG['084'] = "Message posted";
$MSG['086'] = "Categories table updated";
$MSG['087'] = "Description";
$MSG['089'] = "Process changes";
$MSG['090'] = "Countries table updated";
$MSG['091'] = "Change language";
$MSG['092'] = "Edit, delete or add payment methods using the form below.";
$MSG['093'] = "Payment methods table updated";
$MSG['094'] = "Edit, delete or add countries using the form below.";
$MSG['095'] = "Welcome, You're Now A Member!";
$MSG['096'] = "Actual language";
$MSG['097'] = "Days";
$MSG['098'] = "Registration Confirmation";
$MSG['099'] = "Your Auction Has Been Confirmed";
$MSG['100'] = "Your auction has been properly received.<br>A confirmation e-mail has been sent to your e-mail address.<br>";
$MSG['101'] = "Auction URL: ";
$MSG['102'] = " Go! ";
$MSG['103'] = " Search ";
$MSG['104'] = "Browse ";
$MSG['105'] = "View history";
$MSG['106'] = "Send to a friend";
$MSG['107'] = "User's e-mail";
$MSG['108'] = "View picture";
$MSG['109'] = "Day";
$MSG['111'] = "Auction started";
$MSG['112'] = "Your Auction Has Closed";
$MSG['113'] = "Auction ID";
$MSG['114'] = "No picture available";
$MSG['115'] = "Bid now!<br>It's FREE";
$MSG['116'] = "Current Bid";
$MSG['117'] = "Higher bidder";
$MSG['118'] = "Ends within";
$MSG['119'] = "# of bids";
$MSG['120'] = "Bid increment";
$MSG['121'] = "Place Your Maximum Bid Here";
$MSG['122'] = "Edit, delete or add auction durations using the form below";
$MSG['123'] = "Durations table updated";
$MSG['124'] = "Minimum bid";
$MSG['125'] = "Seller";
$MSG['126'] = " days, ";
$MSG['126b'] = " day, ";
$MSG['126a'] = "days ago";
$MSG['127'] = "Starting Bid";
$MSG['128'] = "Bid Increments";
$MSG['129'] = "ID";
$MSG['130'] = "Bid";
$MSG['131'] = "Buyer";
$MSG['133'] = "Bid increments table";
$MSG['134'] = "Current bid";
$MSG['135'] = "Edit, delete or add increments using the form below.<br>
            Be careful, there's no control over the table's values congruence.
            You must take care to check it yourself. The only data check performed is over the fields content (must be numeric) but the relation between them is not checked.<br>
            [<a href=\"javascript:window_open('incrementshelp.php','incre',400,500,30,30)\" CLASS=\"links\">Read more</a>]";
$MSG['136'] = "and";
$MSG['137'] = "Increment";
$MSG['138'] = "Back to the auction";
$MSG['139'] = "Send this auction to a friend";
$MSG['140'] = "Your friend's name";
$MSG['141'] = "Your friend's e-mail";
$MSG['143'] = "Your e-mail";
$MSG['144'] = "Add a comment";
$MSG['145'] = "Send to your friend";
$MSG['146'] = "This auction has been sent to ";
$MSG['147'] = "Send to another friend";
$MSG['148'] = "Help";
$MSG['149'] = "You can contact this user using the form below.";
$MSG['150'] = "Send request";
$MSG['151'] = " The e-mail you requested is ";
$MSG['152'] = "Confirm your bid";
$MSG['153'] = "To bid you must be registered.";
$MSG['154'] = "You Are Bidding on:";
$MSG['155'] = "Item:";
$MSG['156'] = "Your bid:";
$MSG['158'] = "Submit my bid";
$MSG['159'] = "Your bid has been registered";
$MSG['159'] = "Bidder:";
$MSG['160'] = "Increments table updated";
$MSG['161'] = "Edit, delete or add categories using the form below.<br>[<a HREF=\"javascript:window_open('categorieshelp.php','incre',400,300,30,30)\" CLASS=\"links\">Read more</a>]";
$MSG['163'] = "Register!";
$MSG['165'] = "Category: ";
$MSG['166'] = "Home";
$MSG['167'] = "Picture";
$MSG['168'] = "Auction";
$MSG['169'] = "Actual bid";
$MSG['170'] = "Bids #";
$MSG['171'] = "Ends in";
$MSG['171a'] = "Ended";
$MSG['172'] = "No active auctions in this category";
$MSG['173'] = "Search result: ";
$MSG['175'] = "Date and hour";
$MSG['176'] = "Bidder";
$MSG['177'] = "Categories index";
$MSG['178'] = "Contact the bidder";
$MSG['179'] = "To get another user's e-mail address, just fill in your username and password.";
$MSG['180'] = " is:";
$MSG['181'] = "User's login";
$MSG['182'] = "Edit your personal data";
$MSG['183'] = "Your data has been updated";
$MSG['184'] = "Categories table has been updated.";
$MSG['185'] = "Currently viewing feedback for ";
$MSG['186'] = "<a href=\"javascript:history.back()\">Back</a>";
$MSG['187'] = "Your username";
$MSG['188'] = "Your password";
$MSG['189'] = "Total Due";
$MSG['190'] = "Your item's category";
$MSG['193'] = "Auction's duration";
$MSG['195'] = "Picture's URL";
$MSG['196'] = "Item's description";
$MSG['197'] = "Auction's title";
$MSG['198'] = "No items found";
$MSG['199'] = "Search";
$MSG['200'] = "Hello, ";
$MSG['201'] = "new user";
$MSG['202'] = "User's data";
$MSG['203'] = "Active auctions";
$MSG['204'] = "Closed auctions";
$MSG['205'] = "Your Control Panel";
$MSG['206'] = "User's profile";
$MSG['207'] = "Leave Feedback";
$MSG['208'] = "View Feedback";
$MSG['209'] = "Registered user since: ";
$MSG['210'] = "Contact ";
$MSG['212'] = "Auctions:";
$MSG['213'] = "View active auctions";
$MSG['214'] = "View closed auctions";
$MSG['215'] = "Forgot your password?";
$MSG['216'] = "If you have lost or forgotten your password, please fill in your username and e-mail below.<br>A new password will be generated for you";
$MSG['217'] = "A new password has been sent to your e-mail address.";
$MSG['218'] = "View user's profile";
$MSG['219'] = "Active auctions: ";
$MSG['220'] = "Closed auctions: ";
$MSG['221'] = "User login";
$MSG['222'] = "User Feedback";
$MSG['223'] = "Leave your comment";
$MSG['224'] = "Choose a rate between 1 and 5";
$MSG['225'] = "Thanks for leaving your comment";
$MSG['226'] = "Your rating ";
$MSG['227'] = "Your comment ";
$MSG['228'] = "Valued by ";
$MSG['229'] = "Newest feedback:";
$MSG['230'] = "View all feedback";
$MSG['231'] = "REGISTERED USERS";
$MSG['232'] = "AUCTIONS ";
$MSG['233'] = "More";
$MSG['234'] = "Back &gt;&gt;";
$MSG['235'] = "Register now";
$MSG['236'] = "Bidder Privacy";
$MSG['237'] = "Activate Bidder Privacy?";
$MSG['238'] = "When you activate this option the bidders identity is hidden to everyone but the seller of the item";
$MSG['239'] = "Auctions";
$MSG['240'] = "From";
$MSG['241'] = "To";
$MSG['242'] = "Sent";
$MSG['243'] = "If you want to change your password, please fill in the two fields below. Otherwise leave them blank.";
$MSG['244'] = "Edit data";
$MSG['245'] = "Logout";
$MSG['246'] = "Logged in";
$MSG['247'] = "Bidder Privacy Settings Updated";
$MSG['248'] = "Confirm your registration";
$MSG['249'] = "Confirm";
$MSG['250'] = "Refuse";
$MSG['251'] = "---- Select here";
$MSG['252'] = "Date of Birth";
$MSG['253'] = "(mm/dd/yyyy)";
$MSG['254'] = "Suggest a new category";
$MSG['255'] = "Auction's ID";
$MSG['256'] = "Or select the image you want to upload (optional)";
$MSG['257'] = "Auction's type";
$MSG['258'] = "Items quantity";
$MSG['259'] = "Item";
$MSG['261'] = "Auction type";
$MSG['262'] = "Your suggestion";
$MSG['264'] = "You still can ";
$MSG['265'] = "make changes";
$MSG['266'] = " to this auction";
$MSG['267'] = "If you reached this page, you or someone claiming to be you, signed up at this site.
			<br>To confirm your registration simply press the <b>Confirm</b> button below.
			<br>If you didn't want to register and want to delete your data from our database, use the <b>Refuse</b> button.";
$MSG['269'] = "Your bid has been registered";
$MSG['270'] = "Back";
$MSG['271'] = "Your bid has been processed";
$MSG['272'] = "Auction:";
$MSG['275'] = "Go!";
$MSG['276'] = "Categories";
$MSG['277'] = "All categories";
$MSG['278'] = "Last created auctions";
$MSG['279'] = "Higher bids";
$MSG['280'] = "Next Ending!";
$MSG['281'] = "Help Column";
$MSG['282'] = "News";
$MSG['283'] = "minimum";
$MSG['284'] = "Quantity";
$MSG['285'] = "Go back";
$MSG['286'] = " and specify a valid bid.";
$MSG['287'] = "Category";
$MSG['288'] = "Search keyword(s) cannot be empty";
$MSG['289'] = "Total pages:";
$MSG['290'] = "Total items:";
$MSG['291'] = "items per page shown";
$MSG['293'] = "NICK";
$MSG['294'] = "NAME";
$MSG['295'] = "COUNTRY";
$MSG['296'] = "E-MAIL";
$MSG['297'] = "ACTION";
$MSG['298'] = "Edit";
$MSG['300'] = "Suspend";
$MSG['301'] = "users found in the database";
$MSG['302'] = "Name";
$MSG['303'] = "E-mail";
$MSG['304'] = "Delete user";
$MSG['305'] = "Suspend user";
$MSG['306'] = "Reactivate user";
$MSG['307'] = "Are you sure you want to delete this user?";
$MSG['308'] = "Are you sure you want to suspend this user?";
$MSG['309'] = "Are you sure you want to reactivate this user?";
$MSG['310'] = "Reactivate";
$MSG['311'] = "auctions found in the database";
$MSG['312'] = "TITLE";
$MSG['313'] = "USER";
$MSG['314'] = "DATE";
$MSG['315'] = "DURATION";
$MSG['316'] = "CATEGORY";
$MSG['317'] = "DESCRIPTION";
$MSG['318'] = "CURRENT BID";
$MSG['319'] = "QUANTITY";
$MSG['320'] = "RESERVE PRICE";
$MSG['321'] = "Suspend auction";
$MSG['322'] = "Reactivate auction";
$MSG['323'] = "Are you sure you want to suspend this auction?";
$MSG['324'] = "Are you sure you want to reactivate this auction?";
$MSG['325'] = "Delete auction";
$MSG['326'] = "Are you sure you want to delete this auction?";
$MSG['327'] = "MINIMUM BID";
$MSG['328'] = "Colour";
$MSG['329'] = "Image Location";
$MSG['330'] = "Thank you for confirming your registration!<br>The registration process completed and you can now participate in our site's activities.<br>";
$MSG['331'] = "Your registration has been deleted permanently from our database.";
$MSG['332'] = "Subject";
$MSG['333'] = "Message";
$MSG['334'] = "Contact with";
$MSG['335'] = "Contact from ";
$MSG['336'] = "regarding your auction: ";
$MSG['337'] = "Your message has been sent to ";
$MSG['338'] = "Delete new";
$MSG['339'] = "Are you sure you want to delete this news?";
$MSG['340'] = "From";
$MSG['341'] = "View all news";
$MSG['342'] = " News";
$MSG['343'] = "Edit news";
$MSG['344'] = "Time Settings";
$MSG['345'] = "If you want to adjust your server time to accurately show your local time, choose the correction (+ or -) amount from your server time that you want to apply.<br>
			All the time functions in the program will apply the chosen adjustment.";
$MSG['346'] = "Time Adjustment";
$MSG['347'] = "Time settings updated";
$MSG['348'] = "Batch Procedures Settings";
$MSG['349'] = "Reply";
$MSG['350'] = "Registered Users";
$MSG['351'] = "Back to inbox";
$MSG['354'] = "Closed Auctions";
$MSG['355'] = "Enable Buy it now only auto disable";
$MSG['356'] = "Buy it now only limit";
$MSG['357'] = "percent";
$MSG['358'] = "The Buy it now auto disable feature will automatically disable the buy it now only option on the sell page when or if the percentage of buy it now only auctions reach the set value, you may want to use this as a deterrent to stop people making lots of spam buy it now only auctions";
$MSG['363'] = "Dates Format";
$MSG['364'] = "Date";
$MSG['365'] = "Admin Users";
$MSG['367'] = "New admin user";
$MSG['371'] = "WeBid needs to periodically run <CODE>cron.php</CODE> to close expired auctions and
			send notification e-mails to the seller and/or the winner.
			The recommended way to run <CODE>cron.php</CODE> is to set up a <a href=\"http://www.aota.net/Script_Installation_Tips/cronhelp.php4\" target=_blank>cronjob</a> if you
			run a Unix/Linux server.<br>
			If for any reason you can't run a cronjob on your server, you can choose the <b>Non-batch</b> option below
			to have <CODE>cron.php</CODE> run by WeBid itself: in this case <CODE>cron.php</CODE> will be run each time someone access your home page.";
$MSG['372'] = "Run cron";
$MSG['373'] = "Batch";
$MSG['374'] = "Non-batch";
$MSG['375'] = "According to the default in WeBid's Settings, <CODE>cron.php</CODE> automatically deletes auctions older than 30 days.
			<br>You may change the time period below.";
$MSG['376'] = "Delete auctions older than";
$MSG['377'] = " days";
$MSG['378'] = "Batch settings updated.";
$MSG['379'] = "Choose the date format you want to use below.";
$MSG['380'] = "<br>USA format<br><br>Non-USA format";
$MSG['382'] = "mm/dd/yyyy";
$MSG['383'] = "dd/mm/yyyy";
$MSG['384'] = "Date format updated.";
$MSG['385'] = "Recent Feedback";
$MSG['386'] = "Last Month";
$MSG['387'] = "Last Six Months";
$MSG['388'] = "Last Twelve Months";
$MSG['389'] = "Feedback As Seller";
$MSG['390'] = "Feedback As Buyer";
$MSG['400'] = "E-mail&nbsp;address";
$MSG['409'] = "Error Handling";
$MSG['410'] = "Fatal errors that occur during WeBid's execution (typically MySQL errors) will redirect users to an error page.
			You can customise the error message you want to appear in the error page below.<br>
			NOTE: HTML tags are allowed.";
$MSG['411'] = "Error Text";
$MSG['412'] = "Error E-mail Address";
$MSG['413'] = "Error Handling settings updated.";
$MSG['415'] = "Error";
$MSG['416'] = "Please report the above error message to:";
$MSG['429'] = "There were no bids or reserve price was not met";
$MSG['453'] = "Winners details";
$MSG['454'] = "Auctions you won";
$MSG['455'] = "Winner";
$MSG['456'] = "Winner's E-mail";
$MSG['457'] = "Winner's Bid";
$MSG['458'] = "Auction:&nbsp;";
$MSG['460'] = "Seller's E-mail";
$MSG['461'] = "Your Bid";
$MSG['464'] = "Advanced Search";
$MSG['471'] = "Your Auction Watch";
$MSG['472'] = "Item Watch";
$MSG['496'] = "Buy Now";
$MSG['497'] = "Buy Now Price";
$MSG['498'] = "Item purchased successfully<br>";
$MSG['499'] = "Total netural feedback received: ";
$MSG['500'] = "Total positive feedback received: ";
$MSG['501'] = "Total negitive feedback received: ";
$MSG['502'] = "Total feedback received: ";
$MSG['503'] = "Feedback";
$MSG['504'] = "COMMENT";
$MSG['505'] = "Back to user's profile";
$MSG['506'] = "sent feedback on: ";
$MSG['507'] = "Hide history";
$MSG['509'] = "User's data";
$MSG['511'] = "Edit user";
$MSG['512'] = "Edit auction";
$MSG['513'] = "Suggest a category";
$MSG['514'] = "<b>Reserve not met</b>";
$MSG['516'] = "News Management";
$MSG['517'] = " news found in the database";
$MSG['518'] = "Add new";
$MSG['519'] = "Title";
$MSG['520'] = "Content";
$MSG['521'] = "Activate";
$MSG['524'] = "SETTINGS";
$MSG['525'] = "Admin users management";
$MSG['526'] = "General Settings";
$MSG['527'] = "Site name";
$MSG['528'] = "Site URL";
$MSG['529'] = "Leave Feedback";
$MSG['530'] = "Save changes";
$MSG['531'] = "Your logo";
$MSG['532'] = "Display login box?";
$MSG['533'] = "Display news box?";
$MSG['534'] = "Show acceptance text?";
$MSG['535'] = "Your site's name will appear in the e-mail messages WeBid sends to users";
$MSG['536'] = "This must be the complete URL (starting with <b>http://</b>) of your WeBid installations.<br>
			Be sure to include the ending slash.";
$MSG['537'] = "Select <b>Yes</b> if you want the users login box to be displayed in the Home page. Otherwise select <b>No</b>";
$MSG['538'] = "Select <b>Yes</b> if you want the news box to be displayed in the Home page. Otherwise select <b>No</b>";
$MSG['539'] = "Selecting the <b>Yes</b> option below will make WeBid display the text you fill in the text box below in the users registration page just before the submit button.<br>
			This is typically used to display some legal notes users accept submitting the registration form.";
$MSG['540'] = "Admin e-mail";
$MSG['541'] = "The admin e-mail address is used to send automatic e-mail messages";
$MSG['542'] = "General settings updated";
$MSG['544'] = "Money format";
$MSG['545'] = "US style: 1,250.00";
$MSG['546'] = "European style: 1.250,00";
$MSG['547'] = "Set to zero or leave blank if you don't want decimal digits in your money representation";
$MSG['548'] = "Decimal digits";
$MSG['549'] = "Symbol position";
$MSG['550'] = "Before the amount (i.e. USD 200)";
$MSG['551'] = "After the amount (i.e. 200 USD)";
$MSG['553'] = "Currency settings updated";
$MSG['554'] = "Number of news you want to show";
$MSG['556'] = "Current logo";
$MSG['558'] = "Created";
$MSG['559'] = "Last login";
$MSG['560'] = "Status";
$MSG['561'] = "DELETE";
$MSG['562'] = "Edit admin user";
$MSG['563'] = "If you want to change the user's password use the two fields below. To maintain the current password leave them blank.";
$MSG['564'] = "Repeat password";
$MSG['565'] = "User is";
$MSG['566'] = "active";
$MSG['567'] = "not active";
$MSG['569'] = "Insert user";
$MSG['570'] = "Never logged in";
$MSG['571'] = "Standard font";
$MSG['572'] = "Error font";
$MSG['574'] = "Footer font";
$MSG['575'] = "Title font";
$MSG['576'] = "This is the font used to display error message";
$MSG['577'] = "This is the basic font used to display all the site's text, if not otherwise specified.<br>";
$MSG['584'] = "This is the font used in the footer";
$MSG['585'] = "This is the font used in the titles of pages";
$MSG['586'] = "Border colour";
$MSG['587'] = "This is the colour of the border of the most external box";
$MSG['588'] = "Navigation font";
$MSG['589'] = "This is the font format of the navigation links in the header of the pages";
$MSG['592'] = "Logged in as: ";
$MSG['594'] = "<br>
                        <FONTs COLOR=RED><b>Note:</b> for this utility to work, the number format MUST follow the USA style notation.<br>
                    Your <a HREF=currency.php>currency settings</a> will be ignored here.";
$MSG['595'] = "Links Colour";
$MSG['596'] = "Visited Links Colour";
$MSG['597'] = "Activate banners support?";
$MSG['600'] = "Banners settings updated";
$MSG['602'] = "Upload a new logo (max. 50 KB)";
$MSG['603'] = "Activate Newsletter?";
$MSG['604'] = "If you activate this option, users will be able to subscribe to your newsletter from the registration page.<br>
                        The \"Newsletter management\" will let you send e-mail messages to the subscribed users";
$MSG['605'] = "Message Body";
$MSG['607'] = "Newsletter Submission";
$MSG['608'] = "Would you like to receive our Newsletter?";
$MSG['609'] = "Check NO to unsubscribe to our Newsletter";
$MSG['610'] = "Make a selection in the image below of what you want to show in your thumbnail";
$MSG['611'] = "<b>This item has been viewed</b>";
$MSG['612'] = "<b>times</b>";
$MSG['613'] = "Thumbnail preview";
$MSG['614'] = "Use the built-in proportional increments table";
$MSG['615'] = "Use your custom fixed increment";
$MSG['616'] = "Save Thumbnail";
$MSG['617'] = "*NOTE*  If you want to change you password use the two fields below.<br>Otherwise leave them blank.";
$MSG['618'] = "Cancel";
$MSG['619'] = "Open Auctions";
$MSG['620'] = "Your bids";
$MSG['621'] = "Edit your personal profile";
$MSG['622'] = "My control panel";
$MSG['623'] = "View Messages";
$MSG['624'] = "Auction Title";
$MSG['625'] = "Started";
$MSG['626'] = "Ends";
$MSG['627'] = "N. Bids";
$MSG['628'] = "Max. Bid";
$MSG['629'] = "*If you click cancel the thumbnail image for your auction will be a squashed down version of the image you uploaded/set as default";
$MSG['630'] = "Re-list";
$MSG['631'] = "Process selected auctions";
$MSG['640'] = "*Note* If Dutch Auction you may not set a reserve price, custom increment amount or use the BUY NOW feature.";
$MSG['641'] = "Dutch auction";
$MSG['642'] = "Standard auction";
$MSG['643'] = "\n\nThe winning bid amount is:";
$MSG['644'] = "To populate the categories tree from scratch, you must first edit the
			<a HREF=categories.txt>categories.txt</a> you find in the \"admin\" directory following the instructions contained in <a HREF=\"../docs/CATEGORIES\">docs/CATEGORIES</a>.";
$MSG['645'] = "Post question for Seller";
$MSG['646'] = "You must be logged in to ask questions to the seller";
$MSG['647'] = "Ask";
$MSG['648'] = "Reply to questions";
$MSG['649'] = "Answer:";
$MSG['650'] = "Question:";
$MSG['651'] = "Question about your auction: %s";
$MSG['662'] = "<h2>Create thumbnail</h2>";
$MSG['663'] = "Picture Gallery";
$MSG['664'] = "If you activate this option, sellers will be able to upload additional pictures
            up to the maximum you specify (see below).";
$MSG['665'] = "Activate Picture Gallery?";
$MSG['666'] = "Max. Number of pictures";
$MSG['670'] = "Activate Picture Gallery fee?";
$MSG['671'] = "Max. pictures size";
$MSG['672'] = "Kbytes";
$MSG['673'] = "You can upload up to ";
$MSG['674'] = "pictures.";
$MSG['675'] = "You will be charged ";
$MSG['676'] = "for each picture you upload.";
$MSG['677'] = "Upload Pictures";
$MSG['678'] = "Close";
$MSG['679'] = "Please, follow the steps below.";
$MSG['680'] = "Select the file to upload";
$MSG['681'] = "Upload file";
$MSG['682'] = "Repeat steps 1. and 2. for each picture. When finished click on the <I>Create Gallery</I> button below.<br>When you upload the first image or set one as the default you will need to create a thumbnail for it";
$MSG['683'] = "&gt;&gt;&gt; Create Gallery &lt;&lt;&lt;";
$MSG['684'] = "Filename";
$MSG['685'] = "Size (bytes)";
$MSG['686'] = "Default";
$MSG['687'] = "Uploaded Files";
$MSG['688'] = "You already uploaded ";
$MSG['689'] = " files";
$MSG['694'] = "View Gallery";
$MSG['699'] = "Your bid of ";
$MSG['700'] = " has been entered. ";
$MSG['701'] = " Your bid was not enough to make you the highest bidder!<br>Would you like to bid again?";
$MSG['718'] = "Auction Type";
$MSG['724'] = "Additional Information";
$MSG['901'] = "Number of items";
$MSG['904'] = "This auction is closed";
$MSG['905'] = "Someone Wants You To Check Out An Auction";
$MSG['906'] = "Your Bid Is No Longer The Winner";
$MSG['907'] = " - Your Item Sold!";
$MSG['908'] = "- No Winner";
$MSG['909'] = " Auction Closed - You Have Won Item";
$MSG['910'] = "No auctions exist for this user.";
$MSG['911'] = "closed";
$MSG['912'] = "Help Management";
$MSG['913'] = "topics found in the database";
$MSG['914'] = "Topic";
$MSG['915'] = "Text";
$MSG['916'] = "Help Topics Management";
$MSG['917'] = "Add help topic";
$MSG['918'] = "Other Help Topics:";
$MSG['919'] = "General Help";
$MSG['920'] = "Activate Buy Now?";
$MSG['921'] = "If you activate this option, users will be able to buy the item from the auction right away, if there are
			no bids placed for this item. This option must first be enabled by seller who opens the auction.";
$MSG['922'] = "Send message to seller";
$MSG['923'] = "Seller location";
$MSG['924'] = "Just Listed";
$MSG['925'] = "Closing Soon";
$MSG['926'] = "Big Ticket";
$MSG['927'] = "Very Expensive";
$MSG['928'] = "Cheap Items";
$MSG['929'] = "Popular Items";
$MSG['930'] = "Hot Items";
$MSG['931'] = "Buy Now";
$MSG['932'] = "Listings posted by %s";
$MSG['1000'] = "Search keywords or item number";
$MSG['1001'] = "Search Title <b>and</b> Description";
$MSG['1002'] = "Search in Categories";
$MSG['1003'] = "Price Range";
$MSG['1004'] = "Between";
$MSG['1005'] = " and ";
$MSG['1006'] = "Payment Choice";
$MSG['1008'] = "Located In";
$MSG['1009'] = "Ending";
$MSG['1010'] = "Today";
$MSG['1011'] = "Tomorrow";
$MSG['1012'] = "in 3 Days";
$MSG['1013'] = "in 5 Days";
$MSG['1014'] = "Sort by";
$MSG['1015'] = "Items Ending First";
$MSG['1016'] = "Newly Listed Items First";
$MSG['1017'] = "Lowest Prices First";
$MSG['1018'] = "Highest Prices First";
$MSG['1020'] = "Dutch Auction";
$MSG['1021'] = "Standard Auction";
$MSG['1022'] = "SSL Support";
$MSG['1023'] = "Activate SSL support?";
$MSG['1024'] = "If you have SSL support on the server where you are running WeBid, you may want to give your customers a safer enviroment to operate.</p>
        <p>Once The SSL Support is activated, your users will operate under secure HTTPS transactions when they log in or register.</p>";
$MSG['1025'] = "SSL settings updated";
$MSG['1030'] = "Update Counters Utility";
$MSG['1031'] = "Starting counters update...";
$MSG['1056'] = "Alignment";
$MSG['1057'] = "This is the alignment of WeBid pages in your browser window.";
$MSG['5001'] = "Fonts";
$MSG['5002'] = "Colours";
$MSG['5003'] = "Site Settings";
$MSG['5004'] = "Currencies Settings";
$MSG['5005'] = "General Layout Settings";
$MSG['5006'] = "Picture Gallery Settings Updated";
$MSG['5008'] = "Site Currency";
$MSG['5010'] = "Currencies Converter";
$MSG['5011'] = "Home Page Featured Items";
$MSG['5012'] = "This is the number of featured items to show in the Home Page (NOTE: ONLY <b>featured</b> items will be displayed).<br>0
(zero) is permitted.";
$MSG['5013'] = "Last Created Items";
$MSG['5014'] = "This is the number of most recent items to show in the Home Page.<br>0
(zero) is permitted.";
$MSG['5015'] = "Higher Bids";
$MSG['5016'] = "This is the number of items to show in the Higher Bids list in the Home Page.<br>0
(zero) is permitted.";
$MSG['5017'] = "Next Ending";
$MSG['5018'] = "This is the number of items to show in the Next Ending list in the Home Page.<br>0
(zero) is permitted.";
$MSG['5019'] = "General Layout Settings Updated";
$MSG['5022'] = "USERS SEARCH";
$MSG['5023'] = "Search &gt;&gt;";
$MSG['5024'] = "Name, nick or e-mail";
$MSG['5025'] = "Account";
$MSG['5028'] = "Action";
$MSG['5029'] = "GO >>";
$MSG['5030'] = "Message Boards";
$MSG['5031'] = "New Message Board";
$MSG['5032'] = "Message Boards Management";
$MSG['5033'] = "MESSAGE BOARDS LIST";
$MSG['5034'] = "Board Title";
$MSG['5035'] = "Messages to show";
$MSG['5036'] = "This is the number of most recent messages to show for this message board.";
$MSG['5037'] = "Create as";
$MSG['5038'] = "Active";
$MSG['5039'] = "Inactive";
$MSG['5040'] = "NOTE: deleting a message board will delete all the associated messages.";
$MSG['5043'] = "# MSGS";
$MSG['5044'] = "LAST MSG";
$MSG['5046'] = "SHOW";
$MSG['5047'] = "Message Boards Settings";
$MSG['5048'] = "Activate Message Boards Service?";
$MSG['5049'] = "Show Message Boards link?";
$MSG['5050'] = "Select <b>yes</b> if you want a link to the message boards to appear in the header and footer of your site.";
$MSG['5051'] = "Message Boards Settings Updated";
$MSG['5052'] = "Edit Message Board";
$MSG['5053'] = "Last Message";
$MSG['5054'] = "Board is";
$MSG['5056'] = "You are not logged in.<br>If you post a message it will appear as posted by <b><I>Unknown user</I></b>.";
$MSG['5057'] = "Post Message";
$MSG['5058'] = "Back to message boards";
$MSG['5059'] = "Messages";
$MSG['5060'] = "Posted by ";
$MSG['5061'] = "Unknown user";
$MSG['5062'] = "View all messages";
$MSG['5063'] = "View/Edit Messages";
$MSG['5064'] = "Back to message board";
$MSG['5065'] = "Delete all messages older than";
$MSG['5067'] = "Update Counters ";
$MSG['5068'] = "Words Filter";
$MSG['5069'] = "The Words Filter option gives you the possibility to eliminate undesired words from:
<UL>
<LI>TITLE and DESCRIPTION of the auctions.
<LI>Messages posted to the message boards";
$MSG['5070'] = "Enable Words Filter?";
$MSG['5071'] = "Undesired words list";
$MSG['5072'] = "Enter the undesired words one per line (max. 255 characters per line). Note that each line will be
treated like \"one word\".";
$MSG['5073'] = "Words Filter Settings Updated";
$MSG['5074'] = "About Us Page";
$MSG['5075'] = "Terms & Conditions Page";
$MSG['5076'] = "Activate this option if you want an <U>About  us</U> link to appear in the footer of your pages.";
$MSG['5077'] = "Activate About us page?";
$MSG['5078'] = "About us page content<br>(HTML allowed)";
$MSG['5079'] = "About us Settings Updated";
$MSG['5080'] = "Note: each new line character will be converted to <b>&lt;BR&gt;</b> HTML tag.";
$MSG['5081'] = "Activate this option if you want a <U>Terms & Conditions</U> link to appear in the footer of your pages.";
$MSG['5082'] = "Activate Terms & Conditions page?";
$MSG['5083'] = "Terms & Conditions page content<br>(HTML allowed)";
$MSG['5084'] = "Terms & Conditions Settings Updated";
$MSG['5085'] = "About Us";
$MSG['5086'] = "Terms & Conditions";
$MSG['5092'] = "Auction Search";
$MSG['5093'] = "Title, Description";
$MSG['5094'] = "View&nbsp;auctions";
$MSG['5110'] = "Highlighted Items Option is: ";
$MSG['5111'] = "ON";
$MSG['5112'] = "OFF";
$MSG['5113'] = "Change";
$MSG['5115'] = "days";
$MSG['5116'] = "Bulk Uploaded auctions";
$MSG['5117'] = "Page";
$MSG['5118'] = "of";
$MSG['5119'] = "&lt;&lt;Prev";
$MSG['5120'] = "Next&gt;&gt;";
$MSG['5138'] = "Note: you can use the currency of your choice throughout the site.<br>
All the amounts users will have to pay at Paypal will be automatically converted to USD using today's rate of exchange before being sent to the Paypal server.";
$MSG['5140'] = "Account Management";
$MSG['5141'] = "Access Statistics";
$MSG['5142'] = "Settings";
$MSG['5143'] = "View Access Statistics";
$MSG['5144'] = "Please, choose below if you want WeBid to generate access statistics for your site.";
$MSG['5145'] = "Generate user access statistics";
$MSG['5146'] = "Generate browser and platform statistics";
$MSG['5147'] = "Generate domain name access statistics<br>
<b>Note: WeBid uses the <FONT FACE=Courier SIZE=2>gethostbyaddr()</FONT> PHP function. In some WeBid test installations, page load slowed down when activating this option.</b>";
$MSG['5148'] = "Statistics Settings Updated.";
$MSG['5149'] = "Activate Statistics?";
$MSG['5150'] = "Select which type of statistics you want to generate";
$MSG['5151'] = "WeBid recognises the following:&nbsp;&nbsp;";
$MSG['5152'] = '<a href="ST_browsers.html" alt="ST_browsers" class="new-window">Browsers</a>';
$MSG['5153'] = '<a href="ST_platforms.html" alt="ST_platforms" class="new-window">Platforms</a>';
$MSG['5154'] = '<a href="ST_countries.php" alt="ST_domains" class="new-window">Domains</a>';
$MSG['5155'] = "Browsers";
$MSG['5156'] = "Platforms";
$MSG['5157'] = "Domains";
$MSG['5158'] = "Access Statistics for ";
$MSG['5159'] = "Day";
$MSG['5160'] = "View historic";
$MSG['5161'] = "Page views";
$MSG['5162'] = "Unique visitors";
$MSG['5163'] = "User sessions";
$MSG['5164'] = "Totals";
$MSG['5165'] = "View Browser Statistics";
$MSG['5166'] = "View Domain Statistics";
$MSG['5167'] = "Browser Statistics for ";
$MSG['5168'] = "Domain Statistics for";
$MSG['5169'] = "Browser";
$MSG['5170'] = "Domain";
$MSG['5171'] = "Invited Users Lists";
$MSG['5172'] = "Banned Users List";
$MSG['5180'] = "User";
$MSG['5181'] = "Add &gt;&gt;";
$MSG['5182'] = "Search user (nick, name or e-mail)";
$MSG['5183'] = "users found";
$MSG['5184'] = "SELECT";
$MSG['5185'] = "Nick";
$MSG['5187'] = "Edit content of list: ";
$MSG['5188'] = "Delete selected users";
$MSG['5189'] = "Submit Auction";
$MSG['5190'] = "Reset Fields";
$MSG['5191'] = "Invited Users Lists and Banned Users List";
$MSG['5192'] = "Set this auction as <b>private</b>: only users belonging to one of the selected Invited Users List will be able to access your auction and bid.<br>
			If you don't select this option your auction will be public (visible to all users) but only invited users will be entitled to bid.";
$MSG['5193'] = "Send invitation e-mail to the invited users";
$MSG['5199'] = "Confirm bid";
$MSG['5200'] = "Post question";
$MSG['5201'] = "Post message";
$MSG['5202'] = "Add to your watch list";
$MSG['5202_0'] = "Remove from your watch list";
$MSG['5204'] = "Insert";
$MSG['5205'] = "Enable/Disable";
$MSG['5220'] = "Max. 255 chars";
$MSG['5221'] = "Highlighted items background";
$MSG['5222'] = "<b>NOTE: Home page featured items are shown in the home page, in rows of two auctions wide, so this number should be an even number.</b>";
$MSG['5223'] = "Thumbnail width (This is best set at 195 pixels or less )";
$MSG['5224'] = "pixels";
$MSG['5225'] = "Home Page Featured Auctions";
$MSG['5226'] = "View Closed Auctions";
$MSG['5227'] = "View Suspended Auctions";
$MSG['5228'] = "Show Home Page Logo?";
$MSG['5229'] = "FAQs MANAGEMENT";
$MSG['5230'] = "FAQs Categories";
$MSG['5231'] = "New FAQ";
$MSG['5232'] = "Manage FAQs";
$MSG['5233'] = "OTHER CONTENTS";
$MSG['5234'] = "Insert New Category";
$MSG['5235'] = "<b>Note</b>: only categories with no FAQs can be deleted.";
$MSG['5236'] = "FAQs";
$MSG['5237'] = "CAT. ID";
$MSG['5238'] = "FAQ's category";
$MSG['5239'] = "Question";
$MSG['5240'] = "Answer<br>(HTML allowed)";
$MSG['5241'] = "Edit FAQ";
$MSG['5243'] = "Help Index";
$MSG['5244'] = "AUCTIONS MANAGEMENT";
$MSG['5245'] = "Top";
$MSG['5276'] = "Delete Message";
$MSG['5277'] = "Back to Messages List";
$MSG['5278'] = "Edit Message";
$MSG['5280'] = "Years/Months";
$MSG['5281'] = "Historical Report";
$MSG['5282'] = "View current month";
$MSG['5283'] = "Edit FAQs Category";
$MSG['5284'] = "Category Name";
$MSG['5291'] = "Active users";
$MSG['5292'] = "Account never confirmed";
$MSG['5293'] = "Sign up fee not paid";
$MSG['5294'] = "Suspended by the admin";
$MSG['5295'] = "View";
$MSG['5296'] = "All users";
$MSG['5299'] = "Limit submission to";
$MSG['5300'] = " messages sent.";
$MSG['5318'] = "View Platform Statistics";
$MSG['5322'] = "Default country";
$MSG['5321'] = "You can select a default country for your site.<br>It will automatically appear as the selected country in the countries select box throughout the site.";
$MSG['5323'] = "Default country updated";
$MSG['5342'] = "Featured Items";
$MSG['5388'] = "Custom Tags";
$MSG['5389'] = "Tag";
$MSG['5392'] = "You can use the tags below in your e-mail messages texts to add custom contents.";
$MSG['5408'] = "Max. ";
$MSG['5431'] = "Send me a new password";
$MSG['5436'] = "Tools";
$MSG['5438'] = "Platform Statistics for ";
$MSG['5492'] = "items";
$MSG['5493'] = "bid";
$MSG['5494'] = "bid for ";
$MSG['5495'] = "for each ";
$MSG['5506'] = "Positive feedback: ";
$MSG['5507'] = "<font color=red>Negative feedback: </font>";
$MSG['5508'] = "Member since ";
$MSG['5509'] = "Feedback times ";
$MSG['9005'] = "Reserve Price Fee&nbsp;";
$MSG['9006'] = "<b> % of the Reserve price </b>";
$MSG['_0001'] = "Under Maintenance Page";
$MSG['_0002'] = "You can temporary disable the access to your site if necessary.<br>
			In Maintenance mode only one user will have access to it. After you registered a user via <a TARGET=_new HREF=../register.php>the usual users registration page</a>
			, insert below the username. After switching the site to Maintenance mode <a TARGET=_new HREF=../user_login.php>login here</a> to access the site.<br>
			The \"Under Maintenance\" text is usually a custom HTML page (enter the HTML code below).";
$MSG['_0004'] = "Under Maintenance HTML code";
$MSG['_0005'] = "Under Maintenance settings updated";
$MSG['_0006'] = "Switch site to \"Under Maintenance\" mode?";
$MSG['_0008'] = "Banners Administration";
$MSG['_0009'] = "";
$MSG['_0010'] = "BANNERS";
$MSG['_0012'] = "Users Management";
$MSG['_0013'] = "Banner Related Settings";
$MSG['_0014'] = "WeBid banners system retrieves banners on a random basis from the database, after applying the
			filters you set when you inserted the banner.
			<br>The first thing to set is which banner size will be used:";
$MSG['_0015'] = "Any size";
$MSG['_0016'] = "Fixed size (please specify)";
$MSG['_0017'] = "Width";
$MSG['_0018'] = "Height";
$MSG['_0020'] = "Width and height must be integer numbers";
$MSG['_0022'] = "Company";
$MSG['_0024'] = "Manage Banners";
$MSG['_0025'] = "Banners";
$MSG['_0026'] = "Add user";
$MSG['_0028'] = "Delete selected users (banners will be deleted)";
$MSG['_0029'] = "Select banner";
$MSG['_0030'] = "URL";
$MSG['_0031'] = "Text under banner";
$MSG['_0032'] = "ALT text";
$MSG['_0033'] = "<b>Filters</b>";
$MSG['_0035'] = "Keywords";
$MSG['_0036'] = "Accepted formats: GIF, JPG, PNG, SWF";
$MSG['_0037'] = "Complete URL including http://";
$MSG['_0038'] = "Can be left blank";
$MSG['_0039'] = "You have the ability to filter the banners rotations with two different criteria:
			<ul>
			<li><b>Categories</b>: select below one or more categories. The banner will appear only when the selected categories are visible (i.e. browsing categories, auction page)
			<li><b>Keywords</b>: enter one or more keywords (one per line). The banner will only appear in those auctions page where at least one keyword is contained in the item's title or description
			</ul>
			The <b>Categories</b> filter will be applied in the browse categories pages and in the items' pages.<br>
			The <b>Keywords</b> filter will be only applied in the auctions page.<br>
			If none of the filters applied match, a random banner (among those with no filters associated) will be shown.";
$MSG['_0040'] = "Add banner";
$MSG['_0041'] = "<b>New banner</b>";
$MSG['_0042'] = "&nbsp;(required)";
$MSG['_0043'] = "<b>User Banners</b>";
$MSG['_0044'] = "Please insert a valid URL";
$MSG['_0045'] = "Views purchased";
$MSG['_0046'] = "Zero or blank means unlimited views";
$MSG['_0047'] = "%s already exists";
$MSG['_0048'] = "Wrong file type. Allowed formats: GIF, JPG, PNG, SWF";
$MSG['_0049'] = "Views:";
$MSG['_0050'] = "URL:";
$MSG['_0051'] = "Clicks:";
$MSG['_0052'] = "View&nbsp;filters";
$MSG['_0053'] = "<b>Categories</b>";
$MSG['_0054'] = "<b>Keywords</b>";
$MSG['_0055'] = "Edit Banner";
$MSG['_0056'] = "New banner";
$MSG['_0148'] = "Auction relisting";
$MSG['_0151'] = " times";
$MSG['_0153'] = "Relists / <br>Relisted";
$MSG['_0162'] = "You can choose to automatically relist your auction, if no bids have been posted.<br>
			Enter the number of times you want your auction to be relisted (enter zero or leave blank if you don't want the automatic relisting to be applied to this auction).
			<br><font color='red'>Maximum number of allowed relistings: ";
$MSG['_0163'] = "Winners";
$MSG['_0164'] = "Invalid auction ID";
$MSG['_0165'] = "The specified auction does not exist";
$MSG['_0167'] = "Manually relisted";
$MSG['_0168'] = "Manually relisted auctions";

$MSG['2_0001'] = "Classifieds";
$MSG['2_0004'] = "View User's IPs";
$MSG['2_0005'] = "Sign up IP";
$MSG['2_0006'] = "Ban";
$MSG['2_0007'] = "Accept";
$MSG['2_0009'] = "IP Address";
$MSG['2_0012'] = "<FONT COLOR=GREEN><b>Accepted</b></FONT>";
$MSG['2_0013'] = "<FONT COLOR=red><b>Banned</b></FONT>";
$MSG['2_0015'] = "Process Selection";
$MSG['2_0017'] = "IP Addresses";
$MSG['2_0018'] = "IP ADDRESS SEARCH";
$MSG['2_0019'] = "Enter the complete IP address or a part of it.<br>
				Examples:<UL><LI>215.25.0.55<LI>225.76<LI>36.52.125</UL>";
$MSG['2_0020'] = "Banned IP Addresses Management";
$MSG['2_0021'] = "Ban this IP address: ";
$MSG['2_0024'] = "(Complete IP address - example: 185.39.51.63)";
$MSG['2_0025'] = "Manually entered";
$MSG['2_0026'] = "We're sorry but, for one or more reasons, you have been denied access to
				this site.<br>
				If you had any active auctions listed, we have cancelled all bids and
				removed the item(s) from our database.
				<br><br>
				Thank you";
$MSG['2_0032'] = "Auction Extension Settings";
$MSG['2_0033'] = "AUCTIONS EXTENSION";
$MSG['2_0034'] = "Enable Auctions Autoextension?";
$_CUSTOM_0032 = "Auctions Autoextension gives you the ability to automatically extend by <b>X</b> seconds the auctions end time,
				if someone bids in the last <b>Y</b> seconds of the auction lifetime.<br>";
$MSG['2_0035'] = "Extend auction by ";
$MSG['2_0036'] = " seconds if someone bid during the last ";
$MSG['2_0037'] = " seconds";
$MSG['2_0038'] = "Please enter valid numeric values";
$MSG['2_0039'] = "Auction Autoextension Settings Updated";
$MSG['2__0001'] = "Choose language";
$MSG['2__0002'] = "Multilingual support";
$MGS_2__0003 = "<br>The default language is English.<br>
				If you want to enable multilingual support or change the default language you must follow the steps below:
				<UL>
				<LI>If you want to add a new language make a duplicate of language/EN and name it with the
				appropriate name: i.e. if you are translating to french you will need to name the directory FR
				<br>
				The first thing is to define the characters encoding your language requires at the top of the messages file.
				The variable you must edit is <FONT FACE=courier>\$CHARSET</FONT>. UTF-8 encoding should work with almost all the languages.<br>
				Next you'll have to define the document reading direction. The variable to modify is <FONT FACE=courier>\$DOCDIR</FONT>
				and can have two possible values:
				<UL>
				<LI><b>ltr</b> (left-to-right): this is the default and means the text must be read from left to right
				<LI><b>rtl</b> (right-to-left): means the text must be read from right to left (i.e. Arabian, Hebrew, etc)
				</UL>
				Once changed <FONT FACE=courier>\$CHARSET</FONT> and <FONT FACE=courier>\$DOCDIR</FONT> according to the language you are translating into,
				 you will have to translate all the error messages and user interface messages contained in the messages file.
				
				<LI>You will then need the flag(s) GIFs for the languages you are going to use, in the includes/flags directory. 
				Get the flag(s) you need and change the file name(s) to be XX.gif, where XX is the language code for your country language.
				<br>Copy the renamed flag file(s) in the includes/flags/ directory.
				<br><b>Note:</b> for each translation, you need the corresponding XX.gif file in includes/flags/
				<LI>Select the default language below. All the other available languages will be available in the home page (the corresponding flags will be shown).
				</UL>
				";
$MGS_2__0004 = "Default language";
$MGS_2__0005 = "<FONT COLOR=RED><b>Current default language</b></FONT>";
$MSG['2__0016'] = "Starting date";
$MSG['2__0025'] = "Buy it now";
$MSG['2__0027'] = "All";
$MSG['2__0028'] = "Select All";
$MSG['2__0029'] = "You have no messages";
$MGS_2__0030 = " means the entry cannot be deleted because it's in use.";
$MSG['2__0031'] = "Are you sure you want to delete these messages?";
$MSG['2__0037'] = "Submit auction";
$MSG['2__0038'] = "Select your category";
$MGS_2__0039 = "If you lost your password, please enter in your username or e-mail address below.";
$MGS_2__0040 = "Username or e-mail address";
$MGS_2__0041 = "Winning Bid";
$MSG['2__0042'] = "Thumbnails";
$MGS_2__0043 = "WeBid shows three different classes of thumbnails:
				<UL>
				<LI>Auctions Lists Thumbnails (These are the thumbnails appearing in the auctions lists like the categories browse page)
				<LI>Home Page Thumbnails (These are the <I>home page featured items</I> thumbnails appearing the home page)
				<LI>Category Thumbnails (These are the <I>category featured items</I> thumbnails appearing in the auctions lists like the categories browse page)
				</UL>
				You can set the thumbnails width to a different value for each thumbnail class.";
$MGS_2__0044 = "Thumbnails width";
$MGS_2__0045 = " pixels ";
$MGS_2__0046 = "Thumbnails Settings Updated";
$MSG['2__0047'] = "SELECT CATEGORY &gt;&gt;";
$MSG['2__0048'] = "Close Now!";
$MSG['2__0049'] = "Relist now!";
$MSG['2__0050'] = "Sell similar";
$MGS_2__0051 = "Page Width";
$MGS_2__0052 = "This is the width of most external box in your site pages. Can be expressed in pixels or as a percentage of the browser's window.";
$MGS_2__0053 = "pixels";
$MGS_2__0054 = "<b><FONT COLOR=red>Already selected</FONT></b>";
$MSG['2__0056'] = "Suspended auctions";
$MSG['2__0057'] = "Show counters";
$MGS_2__0058 = "You can decide to show some counters in the header of your site's pages.<br>
				There are three different counters available:
				<UL>
				<LI>Active auctions
				<LI>Registered users
				<LI>Online users
				</UL>
				You can enable/disable each counter below";
$MGS_2__0059 = "Online users";
$MGS_2__0060 = "Active auctions";
$MGS_2__0061 = "Registered users";
$MGS_2__0062 = "Counters you want to show";
$MGS_2__0063 = "Counters Settings Updated";
$MGS_2__0064 = "USERS ONLINE";
$MGS_2__0066 = "Enabled";
$MGS_2__0067 = "Disabled";
$MSG['2__0069'] = "Edited in this session.";
$MSG['2__0074'] = "The following auctions have been relisted.";
$MSG['2__0075'] = "Auction Title";
$MSG['2__0076'] = "Total Fees Charged";
$MSG['2__0078'] = ": database updated";
$MSG['2__0079'] = "Database tables created, or updated where necessary";
$MSG['2__0081'] = "If you were coming from bulk uploaded auctions and want to come back,";
$MSG['2__0082'] = "CLICK HERE";
$MSG['2__0083'] = "If you were coming from closed auctions and want to come back,";
$MSG['2__0084'] = "uploaded";
$MSG['25_0001'] = "WINNER";
$MSG['25_0002'] = "SELLER";
$MSG['25_0003'] = "Leave feedback";
$MSG['25_0004'] = "User name";
$MSG['25_0006'] = "Final bid";
$MSG['25_0008'] = "Preferences";
$MSG['25_0009'] = "Graphic Interface";
$MSG['25_0010'] = "Users";
$MSG['25_0011'] = "Advertisement";
$MSG['25_0015'] = "Send Newsletter";
$MSG['25_0018'] = "Contents";
$MSG['25_0023'] = "Statistics";
$MSG['25_0025'] = "Installation Status";
$MSG['25_0026'] = "Batch Process (cron.php)";
$MSG['25_0027'] = "Be sure to set up a cronjob to run cron.php periodically (15 minutes is usually a good time interval).";
$MSG['25_0031'] = "Statistical Resume";
$MSG['25_0032'] = " minutes";
$MSG['25_0033'] = " seconds";
$MSG['25_0035'] = "Time Correction";
$MSG['25_0036'] = "Server Time";
$MSG['25_0037'] = " hours";
$MSG['25_0038'] = "Counters shown in the header:<br>";
$MSG['25_0040'] = "Pages Alignment";
$MSG['25_0041'] = "Shown on Home Page";
$MSG['25_0042'] = "Login Box";
$MSG['25_0043'] = "News Box";
$MSG['25_0044'] = "News Shown";
$MSG['25_0045'] = "Thumbnails Width";
$MSG['25_0048'] = "Other thumbnails: ";
$MSG['25_0049'] = "Newsletter Subscription";
$MSG['25_0055'] = "Registered Active Users";
$MSG['25_0056'] = "Registered Suspended Users";
$MSG['25_0057'] = "Live Auctions";
$MSG['25_0059'] = "Bids on live auctions";
$MSG['25_0063'] = "Today's Accesses";
$MSG['25_0071'] = "Item specifications";
$MSG['25_0074'] = "Resend e-mail";
$MSG['25_0075'] = "Resend Signup Confirmation E-mail";
$MSG['25_0076'] = "Resend E-mail";
$MSG['25_0077'] = "No HTML allowed";
$MSG['25_0078'] = "E-mail sent to ";
$MSG['25_0079'] = "Newsletter";
$MSG['25_0081'] = "My Account";
$MSG['25_0082'] = "Selling";
$MSG['25_0083'] = "Buying";
$MSG['25_0084'] = "Add a new item keyword";
$MSG['25_0085'] = "Remember me";
$MSG['25_0086'] = "By clicking the button below, you commit to pay the full <b id=\"bidcost\">%s</b> thus buying the item from the seller if you are the winning bidder";
$MSG['25_0087'] = "You have been outbid";
$MSG['25_0088'] = "You are the current highest bidder";
$MSG['25_0089'] = "Congratulations, the item is yours. Please pay now";
$MSG['25_0104'] = "Fees Free";
$MSG['25_0107'] = "Auctions Lists Thumbnails";
$MSG['25_0108'] = "Home Page Thumbnails";
$MSG['25_0109'] = "Categories Thumbnails";
$MSG['25_0110'] = "Acceptance Text";
$MSG['25_0111'] = "Acceptance Text Settings Updated";
$MSG['25_0115'] = "Pending auctions";
$MSG['25_0116'] = "Will start";
$MSG['25_0117'] = "Will end";
$MSG['25_0118'] = "Start now!";
$MSG['25_0119'] = "Sold Items";
$MSG['25_0120'] = "Ban users belonging to my Banned Users List";
$MSG['25_0121'] = "Closed on";
$MSG['25_0133'] = "I want to register as";
$MSG['25_0134'] = "<b>Seller</b> (can sell and bid for items)";
$MSG['25_0135'] = "<b>Buyer only</b> (can only bid for items)";
$MSG['25_0136'] = "Requires administrator's approval";
$MSG['25_0137'] = "You must select an account type (seller or buyer)";
$MSG['25_0138'] = "Sellers";
$MSG['25_0139'] = "Buyers";
$MSG['25_0140'] = "Your account is a buyer account. No selling activity is allowed.<br> If you want to switch to a <b>seller account</b> ";
$MSG['25_0141'] = "send a request to the site administrator";
$MSG['25_0142'] = "Request sent to the site's administrator.";
$MSG['25_0143'] = "Your account is a buyer account. No selling activity is allowed.<br> You already sent a request to switch to a <b>seller account</b>: your request is being processed. ";
$MSG['25_0146'] = "Categories Sorting";
$MSG['25_0147'] = "The categories list in the left column of the home page, can be sorted <b>alphabetically</b> or on the number of auctions contained in each category (<b>categories counters</b>).<br>
			Choose below the sorting method you want to have";
$MSG['25_0148'] = "Alphabetically";
$MSG['25_0149'] = "Categories counters";
$MSG['25_0150']= "Categories Sorting Settings Updated";
$MSG['25_0151'] = "Users Authentication";
$MSG['25_0151_a'] = "Users Confirmation Method";
$MSG['25_0152'] = "By default WeBid asks the user password before an auction is submitted or a bid is placed. This is a recommended additional security measure but you can disable the default setting by selection <b>No user authentication</b> below.";
$MSG['25_0152_a'] = "On WeBid each users account must be activated before it can be used.<br>Choose which method you want to use";
$MSG['25_0152_b'] = "The admin must activate each account. You will receive an email each time a new member signs up ready for their account to be reviewed.";
$MSG['25_0152_c'] = "User must activate their own account";
$MSG['25_0152_d'] = "Users account is automatically activated on registration (not recommended)";
$MSG['25_0153'] = "Default (ask for password before submitting an auction)";
$MSG['25_0154'] = "No user authentication";
$MSG['25_0155'] = "Users Authentication Settings Updated";
$MSG['25_0157'] = "Your background image";
$MSG['25_0166'] = "Back to auction";
$MSG['25_0167'] = "icon";
$MSG['25_0168'] = "delete";
$MSG['25_0169'] = "Membership Levels";
$MSG['25_0169a'] = "Check Version";
$MSG['25_0170'] = "Edit, delete or add membership levels using the form below. \"Points\" means up limit (min level is implicit), \"membership\" is the name of the level, \"icon\" is the name of the icon corresponding to the level to be displayed, relative to the \"images/icons/\" directory";
$MSG['25_0171'] = "Points owed";
$MSG['25_0172'] = "membership type";
$MSG['25_0176'] = "CONVERT NOW!";
$MSG['25_0177'] = "for";
$MSG['25_0178'] = "HTML meta Tags";
$MSG['25_0179'] = "To help crawler-based search engines (like Google) to better expose your site, you can use the <b>Meta Description Tag</b> and the <b>Meta Keywords Tag</b>.
			<br>Both will give the search engine additional information besides the one they grab from your site's pages but <b>do not expect to get a good ranking in any search engine just because of Meta Tags!</b>.
			Some search engines ignore Meta Tags at all.
			<br>A good article to learn more about Meta Tags can be found <a HREF=http://searchenginewatch.com/webmasters/article.php/2167931 TARGET=_blank>here</a>.
			<br><br>Leave the field(s) blank if you don't want to use Meta Tags.";
$MSG['25_0180'] = "Meta Description Tag";
$MSG['25_0181'] = "Meta Keywords Tag";
$MSG['25_0182'] = "The Meta Description Tag is usually used to describe your pages in the search results pages search engines show.<br>
				Enter the text which better describes your site below.";
$MSG['25_0184'] = "The Meta Keywords Tag gives some search engines additional information to use to index your site.<br>
				Enter the your keywords below separated by comas (i.e. books, books auctions, book sales).";
$MSG['25_0185'] = "Meta Tags Settings Updated";
$MSG['25_0186'] = "Pictures Upload";
$MSG['25_0187'] = "Enter the maximum allowed size (in Kbytes) of the pictures sellers can upload for each auction.<br>
				<b>Note</b>: this is the standard image associated with an auction, picture gallery settings can be changed <a HREF=picturesgallery.php>here</a>.";
$MSG['25_0188'] = "Auctions notification e-mails";
$MSG['25_0189'] = "As a seller, you can choose to receive one notification e-mail for each auction which closes, or to receive an e-mail once a day reporting all the closed auctions on that day.<br>
				The second option is usually necessary if you have a huge number of auctions.<br>Finally you can also choose not to receive any notification e-mail but this choice is not recommended.";
$MSG['25_0190'] = "Receive <b>one</b> e-mail for each closing auction";
$MSG['25_0191'] = "Receive one cumulative e-mail once a day";
$MSG['25_0192'] = "E-mails notification options updated";
$MSG['25_0193'] = "Do not receive any e-mail";
$MSG['25_0195'] = "You can choose to receive a notification e-mail for each auction you set up or to not receive it.";
$MSG['25_0196'] = "Receive the <b>auction setup confirmation e-mail</b>.";
$MSG['25_0197'] = "Do not Receive the <b>auction setup confirmation e-mail</b>.";
$MSG['25_0199'] = "Closing auctions resume";
$MSG['25_0200'] = "Feedback total: ";
$MSG['25_0201'] = "Reply to this feedback: ";
$MSG['25_0202'] = " reply: ";
$MSG['25_0203'] = " on ";
$MSG['25_0209'] = "Sell under price";
$MSG['25_0210'] = " positive ";
$MSG['25_0211'] = " fair ";
$MSG['25_0212'] = " negative ";
$MSG['25_0214'] = "Search also closed auctions: ";
$MSG['25_0215'] = "Shipping terms";
$MSG['25_0216'] = "Contact the seller";
$MSG['25_0217'] = "Giving anybody the option to contact sellers through your website is not recommended. For this reason WeBid
				gives you the ability to decide if sellers can be contacted by users browsing your site or not.
				<br> Please make you choice below:";
$MSG['25_0218'] = "Any visitor can contact the seller (the ability to contact the seller will be ALWAYS shown)";
$MSG['25_0219'] = "Only logged in users can contact the seller (the ability to contact the seller will be shown only to other users of your site if logged in)";
$MSG['25_0220'] = "Nobody can contact the seller (the ability to contact the seller will NEVER be shown)";
$MSG['25_0222'] = "you save ";
$MSG['25_0223'] = "Feedback you've received";
$MSG['25_0229'] = "Pages: ";

//multi-language months
$MSG['MON_001']="Jan";
$MSG['MON_001E']="January";
$MSG['MON_002']="Feb";
$MSG['MON_002E']="February";
$MSG['MON_003']="Mar";
$MSG['MON_003E']="March";
$MSG['MON_004']="Apr";
$MSG['MON_004E']="April";
$MSG['MON_005']="May";
$MSG['MON_005E']="May";
$MSG['MON_006']="Jun";
$MSG['MON_006E']="June";
$MSG['MON_007']="Jul";
$MSG['MON_007E']="July";
$MSG['MON_008']="Aug";
$MSG['MON_008E']="August";
$MSG['MON_009']="Sep";
$MSG['MON_009E']="September";
$MSG['MON_010']="Oct";
$MSG['MON_010E']="October";
$MSG['MON_011']="Nov";
$MSG['MON_011E']="November";
$MSG['MON_012']="Dec";
$MSG['MON_012E']="December";

$MSG['26_0001'] = "Bids history";
$MSG['26_0002'] = "Theme selection";
$MSG['26_0003'] = "Themes available";
$MSG['26_0004'] = "These are the themes actually installed in your site. Remember that theme change involves also logo and background!";
$MSG['26_0005'] = "Theme Settings Updated";
$MSG['30_0004'] = "Edit Standard Font";
$MSG['30_0005'] = "Edit Error Font";
$MSG['30_0006'] = "Edit Title Font";
$MSG['30_0007'] = "Edit Navigation Font";
$MSG['30_0008'] = "Edit Footer Font";
$MSG['30_0009'] = "The font properties of the fonts used on your site are defined in the CSS file of the active theme.
				<br>You can change them choosing the <B>Edit</B> option below for font type you want to customise.<br>Alternatively you can edit the CSS file with your favourite text editor. We recommend this option only for user with CSS knowledge.";
$MSG['30_0010'] = "Current CSS file: ";
$MSG['30_0011'] = "Some of the colours used by the theme you have selected can be changed below.<br>Choose the <B>Edit</B> option below for the colour you want to change.
				<br>Alternatively you can edit the CSS file with your favourite text editor. We recommend this option only for user with CSS knowledge.";
$MSG['30_0012'] = "Edit Border Colour";
$MSG['30_0013'] = "Table Header Colour";
$MSG['30_0014'] = "This is the background colour of the table headers.";
$MSG['30_0015'] = "Edit Table Header Colour";
$MSG['30_0016'] = "Highlighted Items Background";
$MSG['30_0017'] = "This is the background colour of the highlighted items.";
$MSG['30_0018'] = "Edit Highlighted Items Background";
$MSG['30_0019'] = "This is the colour of the unvisited links.";
$MSG['30_0020'] = "Edit Links Colour";
$MSG['30_0021'] = "This is the colour of the visited links.";
$MSG['30_0022'] = "Edit Visited Links Colour";
$MSG['30_0023'] = "Page Background Colour";
$MSG['30_0024'] = "This is the background colour of the pages.";
$MSG['30_0025'] = "Edit Page Background Colour";
$MSG['30_0026'] = "Container Background Colour";
$MSG['30_0027'] = "This is the background colour of the most external box appearing in all pages.";
$MSG['30_0028'] = "Edit Container Background Colour";
$MSG['30_0029'] = "You can set below the number of categories you want to be shown in the left column of the home page";
$MSG['30_0030'] = "Categories to show: ";
$MSG['30_0031'] = "Clear Cache";
$MSG['30_0032'] = "Delete all the template cache files, you will need to do this each time you edit a template file";
$MSG['30_0033'] = "Cache cleared";
$MSG['30_0049'] = "Newsletter Settings Updated";
$MSG['30_0053'] = "Some free e-mail services have been banned from this website. Please do not enter e-mail addresses belonging to the following domains:";
$MSG['30_0054'] = "Invalid e-mail address: free e-mails are not allowed on this website. Please use a different e-mail address.";
$MSG['30_0055'] = "The newsletter sent through WeBid will be sent automatically in <B>HTML</B>, so, it is necessary to add a tag <CODE>&lt;BR&gt;</CODE> tags for each new line you are going to add. Otherwise, the message will look like a single line of text without format.";
$MSG['30_0060'] = "Winners Address Settings Updated";
$MSG['30_0062'] = "Please enter at least 4 characters";
$MSG['30_0063'] = "Buy it now only?";
$MSG['30_0064'] = "Activate <b>Buy it now only</b> auctions?";
$MSG['30_0065'] = "Enabling the <b>Buy it now only</b> option you'll give your sellers the ability to set up auctions for which it will not be possible to place any bid, but only use the <b>Buy it now</b> feature (fixed price auctions).<br><b>Note:</b> the <b>Buy it now only</b> option will only take effect if <b>Buy it now</b> is enabled.";
$MSG['30_0066'] = "Buy it now only settings updates";
$MSG['30_0067'] = "<B>Buy it now only</B> auction";
$MSG['30_0069'] = "Seller: edit this auction";
$MSG['30_0070'] = "Search only in this category";
$MSG['30_0075'] = "Adult Only Auction?";
$MSG['30_0076'] = "If the content of this auction is orientated towards an adult audience, please select <B>yes</B> below. Adult Only auctions will only be visible to logged in users";
$MSG['30_0080'] = "Payment Options";
$MSG['30_0081'] = "Viewed ";
$MSG['30_0083'] = "Winners address in e-mails";
$MSG['30_0084'] = "You can decide to have the winners address included in the notification e-mail sent to the seller when an auction closes. Just enable or disable this option below.";
$MSG['30_0085'] = "Include winners' address in e-mails?";
$MSG['30_0086'] = "Address: ";
$MSG['30_0087'] = "Are you sure you want to process the selected auctions?";
$MSG['30_0090'] = "Optional";
$MSG['30_0098'] = "&nbsp; = Outbidded";
$MSG['30_0100'] = "<B>Buy it now!</B> auctions";
$MSG['30_0101'] = "<B>Buy it now only</B> auctions";
$MSG['30_0102'] = "Check/Uncheck";
$MSG['30_0160'] = "Edit Background Image Properties";
$MSG['30_0176'] = "View Winners";
$MSG['30_0177'] = "Auction ended";
$MSG['30_0178'] = "&nbsp;&nbsp;No winners found for this auction";
$MSG['30_0179'] = "Winning bid";
$MSG['30_0180'] = "Complete Bids History";
$MSG['30_0181'] = "Message Board";
$MSG['30_0184'] = "The Background Image is the image appearing in the background of your site's pages. You can also set how you prefer the image to repeat (horizontally, vertically, etc).
				<br><B>Note:</B> the image path is relative to the main WeBid installation directory and should be in the form <CODE>url(path/to/image.gif)</CODE><br>
				For example, if you place your background image in the <code>images/</code> directory and the image name is <code>mybackground.gif</code> you should enter <code>url(images/mybackground.gif)</code> in the <B><code>background-image:</code></B> property field.";
$MSG['30_0187'] = "Navigation Bar Background Colour";
$MSG['30_0188'] = "You can set below the colour of the whole navigation bar where the links are shown in the header of your site.";
$MSG['30_0189'] = "Edit Navigation Bar Background Colour";
$MSG['30_0208'] = "Place bid >>";
$MSG['30_0209'] = "Meet the seller";
$MSG['30_0210'] = "*When items relating to these key words are added you will be notified via email";
$MSG['30_0211'] = "You are running an old version you can download the latest version from <a href='http://sourceforge.net/project/showfiles.php?group_id=181393'>here</a>";
$MSG['30_0212'] = "You are running the latest version";
$MSG['30_0213'] = "No feedback needs leaving";
?>