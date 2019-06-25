<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $origin = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (empty($origin) || empty($subject) || empty($message) || empty($name)) header("Location: ../index.php?message=empty");
    else if (!filter_var($origin, FILTER_VALIDATE_EMAIL)) header("Location: ../index.php?message=invalid");
    else {
      $curlObject = curl_init("https://slack.com/api/chat.postMessage");
      $slackObject = http_build_query([
        "token" => "xoxp-519133556695-517912420004-519482942694-3199e49c1b01e8d5ba3c932da6ec06ab",
        "text" => $subject . "\n \n" . $message . "\n \n" . $origin,
        "channel" => "#portfolio",
      	"username" => $name,
      ]);

      curl_setopt($curlObject, CURLOPT_CUSTOMREQUEST, 'POST');
      curl_setopt($curlObject, CURLOPT_POSTFIELDS, $slackObject);
      curl_setopt($curlObject, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curlObject, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($curlObject);
      curl_close($curlObject);

      header("Location: ../index.php?message=succes");
    }
  }
?>
