<?php



class SmtpClient {



    function SmtpClient($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body) {



        $this->SmtpServer = $SmtpServer;

        $this->SmtpUser = base64_encode($SmtpUser);

        $this->SmtpPass = base64_encode($SmtpPass);

        $this->from = $from;

        $this->to = $to;

        $this->subject = $subject;

        $this->body = $body;



        if ($SmtpPort == "") {

            $this->PortSMTP = 25;

        } else {

            $this->PortSMTP = $SmtpPort;

        }

    }



    function SendMail() {



        if ($SMTPIN = fsockopen($this->SmtpServer, $this->PortSMTP)) {



            // Send EHLO command.

            fputs($SMTPIN, "EHLO " . $this->SmtpServer . "\r\n");

            // fgets() won't work here because hMailServer returns 3 responses.

            $result["Hello"] = stream_get_line($SMTPIN, 1024);



            // Send AUTH LOGIN command.

            fputs($SMTPIN, "AUTH LOGIN\r\n");

            $result["AuthLogin"] = fgets($SMTPIN);



            // Send user name.

            fputs($SMTPIN, $this->SmtpUser . "\r\n");

            $result["User"] = fgets($SMTPIN);



            // Send password.

            fputs($SMTPIN, $this->SmtpPass . "\r\n");

            $result["Pass"] = fgets($SMTPIN);



            // Send MAIL FROM command.

            fputs($SMTPIN, "MAIL FROM: " . $this->from . "\r\n");

            $result["From"] = fgets($SMTPIN);



            // Send RCPT TO command.

            fputs($SMTPIN, "RCPT TO: " . $this->to . "\r\n");

            $result["To"] = fgets($SMTPIN);



            // Send DATA command.

            fputs($SMTPIN, "DATA\r\n");

            $result["Data"] = fgets($SMTPIN);



            // Send data.

            fputs($SMTPIN, "Content-type: text/html; charset=utf-8\r\nTo: " . $this->to . "\r\nFrom: " . $this->from . "\r\nSubject:" . $this->subject . "\r\n\r\n" . $this->body . "\r\n.\r\n");

            $result["Send"] = fgets($SMTPIN);



            // Send QUIT command.

            fputs($SMTPIN, "QUIT\r\n");

            $result["Quit"] = fgets($SMTPIN);



            // Close connection.

            fclose($SMTPIN);

        }

        return $result;

    }

}



?>
