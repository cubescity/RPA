<?php
/* MAKE SURE YOU EDIT THE INCLUDED CONFIG FILE AS WELL AS THIS ONE! This file contains some examples of URLs that you may need for databases.
You should replace USER and PASS with your information for these databases.
At the bottom, change the IP addresses to your LOCAL (INSIDE THE LIBRARY) IP addresses and it will not ask for login information for those users.
At the very bottom, you will need to change the link to your library suport link. */

/* This gets data from the URL NO CHANGE */
$s=$_GET["s"];
$b=$_POST["b"];
$p=$_POST["p"];

/* This does a check for numbers only NO CHANGE*/
$b=preg_replace("/[^0-9\-]/","",$b);
$p=preg_replace("/[^0-9]/","",$p);

/* This makes all errors show up! NO CHANGE*/
error_reporting(E_ALL ^ E_NOTICE);

/* This pulls our settings from the config file NO CHANGE*/
require_once 'config.php';

/* This is your list of hidden database URLs and the term you want to use for them
For a user to get to this hidden URL, they will have to sign in with their barcode and pin number. (Unless they are
coming from an IP listed at the bottom of this file)
Example
hidden database url = http://www.brainpopjr.com/user/loginDo.weml?username=USER\&password=PASS
made up term = brain
URL for your patron access = http://YourWebServer.com/rpa.php?s=brain
EDIT THIS! */
$ip = $_SERVER['REMOTE_ADDR'];

	if ($s == "asp") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=ehost&defaultdb=aph&user=USER&password=PASS";

        }elseif ($s == "auto") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=autorefctr&user=USER&password=PASS";

		}elseif ($s == "mango") {
		$dburl = "http://connect.mangolanguages.com/USER/start";

		}elseif ($s == "bio") {
		$dburl = "http://scdiscus.org/sites/URL";

        }elseif ($s == "bloom") {
		$dburl = "http://online.infobaselearning.com/URL";

		}elseif ($s == "blz") {
		$dburl = "http://www.school.eb.com/learningzone";

		}elseif ($s == "brain") {
		$dburl = "http://www.brainpopjr.com/user/loginDo.weml?username=USER\&password=PASS";

		}elseif ($s == "brip") {
		$dburl = "http://infotrac.galegroup.com/itweb/URL";

		}elseif ($s == "bus") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=ehost&defaultdb=buh&user=USER&password=PASS";

		}elseif ($s == "cec") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=ebook&defaultdb=nlebk&user=USER&password=PASS";

		}elseif ($s == "chc") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=chc&user=USER&password=PASS";

		}elseif ($s == "credo") {
		$dburl = "http://www.credoreference.com/";

		}elseif ($s == "cg") {
		$dburl = "http://online.culturegrams.com/index.php?login=NUMBER&orgid=NUMBER";

		}elseif ($s == "ebres") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=ehost&user=USER&password=PASS";

		}elseif ($s == "fcgc") {
		$dburl = "http://online.infobaselearning.com/Direct.aspx?aid=NUMBER";

		}elseif ($s == "bus") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=url&profile=USER&defaultdb=LETTERS";

		}elseif ($s == "gvrl") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?db=GVRL&id=USER";

		}elseif ($s == "b") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?id=USER&db=GBFM";

		}elseif ($s == "hisref") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=hrc&user=USER&password=PASS";

		}elseif ($s == "histrc") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?db=HistRC&id=USER";

		}elseif ($s == "history") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?db=History&id=USER";

		}elseif ($s == "junior") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?id=USER&db=K12J";

		}elseif ($s == "kib") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?id=USER&db=ITKE";

		}elseif ($s == "lat") {
		$dburl = "http://www.learningexpresslibrary3.com/?AuthToken=TOKEN";

		}elseif ($s == "litrc") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=lrc&user=USER&password=PASS";

		}elseif ($s == "lr") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?db=LitRG&id=USER";

		}elseif ($s == "master") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=ehost&defaultdb=f5h&user=USER&password=PASS";

		}elseif ($s == "novk8") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=novpk8&user=USER&password=PASS";

		}elseif ($s == "novelp") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=novplus&user=USER&password=PASS";

		}elseif ($s == "nrc") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?db=NRC&id=USER";

		}elseif ($s == "ovrc") {
		$dburl = "http://infotrac.galegroup.com/itweb/horry_cml?db=OVRC&id=USER";

		}elseif ($s == "povref") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&site=pov&return=y&user=USER&password=PASS";

        }elseif ($s == "salem") {
		$dburl = "http://health.salempress.com/action/remoteAccessActivation?activationCode=USER";

		}elseif ($s == "search") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=sas&user=USER&password=PASS";

		}elseif ($s == "sci") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=scirc&user=USER&password=PASS";

		}elseif ($s == "sbrc") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=sbrc&user=USER&password=PASS";

		}elseif ($s == "srchigh") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=src&user=USER&password=PASS";

		}elseif ($s == "srcmid") {
		$dburl = "http://search.ebscohost.com/login.aspx?authtype=uid&profile=msrc&user=USER&password=PASS";

		}elseif ($s == "sn") {
		$dburl = "http://infoweb.newsbank.com/signin/USER";

		}elseif ($s == "uc") {
		$dburl = "http://USER.universalclass.com/register.htm";

        }elseif ($s == "value") {
		$dburl = "http://www3.valueline.com/vlac/logonreferrer.aspx?refid=ID&lp=/secure/vlispdf/stk5000/index.aspx";

		}elseif ($s == "wda") {
		$dburl = "http://www.world.eb.com";

		}

if ($ip=='LIBRARY-IP-GOES-HERE') {
header("Location: $dburl");
}elseif ($ip=='Another-Library-IP') {
header("Location: $dburl");
}elseif ($ip=='Rest-Are-Examples') {
header("Location: $dburl");
}elseif ($ip=='192.168.1.20') {
header("Location: $dburl");
}elseif ($ip=='192.168.1.20') {
header("Location: $dburl");
}elseif ($ip=='192.168.1.20') {
header("Location: $dburl");
}elseif (strpos($ip, "192.168"))  {
header("Location: $dburl");
}elseif (strpos($ip, "10.250"))  {
header("Location: $dburl");
}


if (empty($_POST)) {



?>
<body bgcolor="lightblue">
<img src="http://horry.lib.sc.us/images/logosmall.png"><BR><BR>
Please login with your barcode and pin number for access<BR>
<i>if you have forgotten your pin number please contact us here </i>--><a href="http://linkhere">Library Support</a>
<form name="input" action="" method="post">
 Barcode#: <input type="text" name="b" /><BR>
 Pin#: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="p" />
 <input type="hidden" name="s" value="<?php $s ?>";><BR>
 <input type="submit" name="submited" value="Submit" />

 </form>


<?php
} else {

		connectnow();

		$query = "select borrower# from borrower_barcode where bbarcode='$b'";
		$result = mssql_query($query);
		$num=mssql_num_rows($result);

		if ($num == 0) {
  		 echo "<BR><BR>We cannot find that barcode in our system";
		}else{

 		$borrowno=mssql_result($result,0,"borrower#");

  		$querypin="select pin# from borrower where borrower#='$borrowno'";
   		$resultpin = mssql_query($querypin);
   		$numpin=mssql_num_rows($resultpin);
   		$pinno=mssql_result($resultpin,0,"pin#");
        	  if ($numpin == 0) {
     			 echo 'Something went wrong. The system can not find your pin#';
     		 } else {

            	 if ($pinno==$p) {

            		 header("Location: $dburl");


            	 } else {
            	     echo "pin does not match";
            	 }
             }
        }

}
?>