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

        $mail = [
            "LastName"  => htmlspecialchars(ucfirst(strtolower($lastname)), ENT_QUOTES, 'UTF-8'),
            "FirstName" => htmlspecialchars(ucfirst(strtolower($firstname)), ENT_QUOTES, 'UTF-8'),      // ucfirst : capitalize the first letter
            "Adress"    => htmlspecialchars(strtolower($emailAdress), ENT_QUOTES, 'UTF-8'),             // strtolower : lowercase all letters
            "Object"    => htmlspecialchars($object, ENT_NOQUOTES),                                     // htmlspecialchars : remove html tags
            "Message"   => htmlspecialchars($message, ENT_NOQUOTES),
        ];

        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"' . utf8_decode(utf8_encode($mail["FirstName"])) . ' ' . utf8_decode(utf8_encode($mail["LastName"])) . '"<' . $mail["Adress"] . '>' . "\n";
        $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
        $header .= 'Content-Transfer-Encoding: 8bit';

        $mailText = '
                    <div align="left">
                        ' . nl2br($mail["Message"]) . '
                        <br />
                    </div>
                    <div align="center">
                        <u>Envoyé depuis https://www.pierre-marquet.fr</u>
                    </div>
            ';  // nl2br : take line breaks into account

        mail("marquet_pierre@yahoo.fr", utf8_decode(utf8_encode($mail["Object"])), $mailText, $header);
    }
}
