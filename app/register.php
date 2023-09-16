<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Email configuration (Replace with your own values)
$smtp_server = "smtp.gmail.com";
$smtp_username = "ayoscolina2017@gmail.com";
$smtp_password = "utpyvcvgjkvbpeeo";
$from_email = "adesusibammy@gmail.com";
// $from_email = "ayoscolina2017@gmail.com";
$from_name = "TemmyWummex";


// Database configuration (Replace with your own values)
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "online_data";



// Include PHPMailer autoloader
require '../phpmailer/vendor/autoload.php';

    $first_name = isset($_POST['first_name'])? $_POST['first_name'] : '';
    $last_name = isset($_POST['last_name'])? $_POST['last_name'] : '';
    $mobile_no = isset($_POST['mobile_no'])? $_POST['mobile_no'] : '';
    $email_address = isset($_POST['email_address'])? $_POST['email_address'] : '';
    $username = isset($_POST['username'])? $_POST['username'] : '';
    $password = isset($_POST['password'])? $_POST['password'] : '';
    $referral = isset($_POST['myreferral'])? $_POST['myreferral'] : '';

    if (empty($first_name) || empty($last_name) || empty($mobile_no) || empty($email_address) || empty($username) || empty($password)) {
        echo json_encode(array(
            'success' => false,
            'message' => "All fields are required!"
        ));
        exit; // Stop further processing
    }

    $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Change to SMTP::DEBUG_SERVER for debugging
            $mail->isSMTP();
            $mail->Host = $smtp_server;
            $mail->SMTPAuth = true;
            $mail->Username = $smtp_username;
            $mail->Password = $smtp_password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($from_email, $from_name);
            $mail->addAddress($email_address);

            // Email content
            $mail->isHTML(false);
            $mail->Subject = "Registration Successful";
            
            // Compose the message body
            $message = "Hello $first_name $last_name,\n\n";
            $message .= "Your registration was successful. Below are your login details:\n\n";
            $message .= "Username: $username\n";
            $message .= "Password: $password\n\n";
            $message .= "Thank you for registering with us!\n";

            $mail->Body = $message;

             // Hash the password
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

              // Insert registration data into the database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO auths (first_name, last_name, mobile_no, email_address, username, user_password, my_referral) 
    VALUES (:first_name, :last_name, :mobile_no, :email_address, :username, :hashed_password, :referral)");
    
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':mobile_no', $mobile_no);
    $stmt->bindParam(':email_address', $email_address);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':hashed_password', $password_hashed);
    $stmt->bindParam(':referral', $referral);
    $stmt->execute();
            
    if ($mail->send() && $stmt->rowCount() > 0) {
        // Email sent successfully, and registration successful
        $response = array(
            'success' => true,
            'message' => "Registration Successful. Check your registered email address for your login details"
        );
    } else {
        // Email sending or registration failed
        $response = array(
            'success' => false,
            'message' => "An error occurred while registering your account"
        );
    }

        } catch (Exception $e) {
           // Exception occurred
        $response = array(
            "success" => false, 
            "message" => "Error " . $mail->ErrorInfo);    
        }

        // Return JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
?>