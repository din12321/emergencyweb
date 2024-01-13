<?php

function GetStr($string, $start, $end) {
    return explode($end, explode($start, $string)[1])[0];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $send_data = [];

    // Parameters to Change
    $send_data['sender_id'] = "PhilSMS";
    $send_data['recipient'] = $_POST['recipient'];
    $send_data['message'] = $_POST['message'];
    $token = "358|VwlnCkZXglQMNcrePbWnJUNJRRRUw5w7UuOOGSe5";
    $parameters = json_encode($send_data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://app.philsms.com/api/v3/sms/send");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Content-Type: application/json",
        "Authorization: Bearer $token"
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $get_sms_status = curl_exec($ch);
   $respo = GetStr($get_sms_status, '"message":"', '",');
    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);

    // Output the response from the API
    echo $respo;
} else {
    // Redirect if accessed directly (optional)
    header("Location: sms.html");
    exit();
}
?>
