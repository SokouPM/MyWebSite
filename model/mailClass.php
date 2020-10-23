<?php
class Mail
{
    private $lastname;
    private $firstname;
    private $emailAdress;
    private $object;
    private $message;

    function __construct($lastname, $firstname, $emailAdress, $object, $message)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->emailAdress = $emailAdress;
        $this->object = $object;
        $this->message = $message;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getEmailAdress()
    {
        return $this->emailAdress;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function sendMail($lastname, $firstname, $emailAdress, $object, $message)
    {
            $header = "MIME-Version: 1.0\r\n";
            $header .= 'From:"PrimFX.com"<support@primfx.com>' . "\n";
            $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8bit';

            $mail = [
                "LastName"  => filter_var(ucfirst(strtolower($lastname)), FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                "FirstName" => filter_var(ucfirst(strtolower($firstname)), FILTER_SANITIZE_FULL_SPECIAL_CHARS),     // ucfirst : capitalize the first letter
                "Adress"    => filter_var(strtolower($emailAdress), FILTER_SANITIZE_FULL_SPECIAL_CHARS),            // strtolower : lowercase all letters
                "Object"    => filter_var(ucfirst(strtolower($object)), FILTER_SANITIZE_FULL_SPECIAL_CHARS),        // filter_var : remove html tags
                "Message"   => filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            ];

            $mailText = '
                    <div align="center">
                        <u>Nom de l\'expéditeur :</u> ' . $mail["FirstName"] . " " . $mail["LastName"] . '<br />
                        <u>Courriel de l\'expéditeur :</u> ' . $mail["Adress"] . '<br />
                    </div>
                    <div align="left">
                        <br />
                        ' . nl2br($mail["Message"]) . '
                        <br />
                    </div>
            ';  // nl2br : take line breaks into account

            //mail("marquet_pierre@yahoo.fr", "CONTACT - pierre-marquet.fr", $message, $header);

            return $mailText;

    }
}
