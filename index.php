<?php

class User{
    public $userName;
    public $emailID;
    public $phoneNo;
    public $designation;
}

$user1 = new User();
$user1->userName = "arya";
$user1->emailID = "arya.gmail.com";
$user1->phoneNo = "111";
$user1->designation = "CEO";

$user2 = new User();
$user2->userName = "chikki";
$user2->emailID = "chikki.gmail.com";
$user2->phoneNo = "222";
$user2->designation = "washroom cleaner";

$user3 = new User();
$user3->userName = "naman";
$user3->emailID = "naman.gmail.com";
$user3->phoneNo = "333";
$user3->designation = "susu drinker";

$user4 = new User();
$user4->userName = "arihant";
$user4->emailID = "arihant.gmail.com";
$user4->phoneNo = "555";
$user4->designation = "COW";

$user5 = new User();
$user5->userName = "hassan";
$user5->emailID = "hassan.gmail.com";
$user5->phoneNo = "444";
$user5->designation = "coffee maker";

$users = array($user1, $user2, $user3, $user4, $user5);

$q = $_REQUEST["userName"];

$data = "";

if ($q !== "") {
  $q = strtolower($q);
  foreach($users as $user) {
    if ($user->userName == $q){
        $data = "$user->emailID <br>" . "$user->phoneNo <br>" . "$user->designation ";
    }
  }
}

echo "$data";

?>