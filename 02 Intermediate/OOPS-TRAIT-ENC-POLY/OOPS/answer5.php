<!-- Create an Interface which holds the account number of a user. Inherit the method in the ‘Bank’ and ‘User’ class. -->
<?php
interface AccountNumber
{

    public function accountNumber($number);
    public function info();

}
class Bank implements AccountNumber
{
    private $num;
    public function accountNumber($number)
    {
        $this->num = $number;
    }
    public function info()
    {

        echo "A new Account Created:" . $this->num . "<br>";
    }
}
class User implements AccountNumber
{
    private $num;
    public function accountNumber($number)
    {
        $this->num = $number;
    }
    public function info()
    {
        echo "Your Account is created and you are ready to set up:" . $this->num . "<br>";
    }
}
$account = new User();
$account->accountNumber('673648343');
$account->info();
?>
