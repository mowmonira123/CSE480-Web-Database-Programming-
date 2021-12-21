<?php
class Account{

    private $accountID;
    private $accountbalance;
    private static $count;

    function __construct($id,$balance){
        $this->accountID = $id;
        $this->accountbalance = $balance;
        self::$count += 1;
    }

    function showInformation(){
        echo "<h3> Account ID:   " . $this->accountID ."<br>";
        echo "<h3> Account Balance:   " . $this->accountbalance ."<br>";

    }

    function deposite($amount){
        $this->accountbalance += $amount;
    }

    function withdraw($amount){
        $this->accountbalance -= $amount;
    }

    function showAccountInfo(){
        echo "<h3> Account ID:   " . $this->accountID ."<br>";
        echo "<h3> Account Balance:   " . $this->accountbalance ."<br>";
    }

    function transfermoney($obj, $amount){
        $obj -> accountbalance += $amount;
        $this-> accountbalance -= $amount;
    }

    function createdaccount(){
        echo "<h1> Created Account: ". self::$count . "<br>";
    }


}

    $x = new Account("10616", 10000);
    // $x -> showAccountInfo();
    

    $y = new Account("10717",20000);


    $x -> transfermoney($y , 5000);

    $x -> showAccountInfo();

    $y -> showAccountInfo();
    $y -> createdaccount();

?>