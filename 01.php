<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];

    $variables = [
        "0" => [
            "is_shielded" => true,
            "session_id" => "9b78191c-84fd-4ab6-b0aa-19b39f04a6bc",
            "client_mutation_id" => "b0316dd6-3fd6-4beb-aed4-bb29c5dc64b0"
        ]
    ];

    $payload = [
        "variables" => $variables,
        "method" => "post",
        "doc_id" => "1477043292367183",
        "query_name" => "IsShieldedSetMutation",
        "strip_defaults" => false,
        "strip_nulls" => false,
        "locale" => "en_US",
        "client_country_code" => "US",
        "fb_api_req_friendly_name" => "IsShieldedSetMutation",
        "fb_api_caller_class" => "IsShieldedSetMutation",
        "access_token" => $token
    ];

    $api_url = "https://graph.facebook.com/graphql";
    $headers = ['Content-Type: application/json'];

    $options = [
        'http' => [
            'header' => $headers,
            'method' => 'POST',
            'content' => json_encode($payload),
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($api_url, false, $context);
$data = json_decode($response, true);
    
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>GEO - PROFILE GUARD </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <style>
    .scrollbox {
        border-collapse: collapse;
        background-color: #0D0D0D;
        border-spacing: 0;
        overflow-x: scroll;
        display: block;
    }

    body {
        font-family: "Montserrat", sans-serif;
        text-align: center;
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
            <h1 style="color:red; font-size:20px; font-weight:bold;">FB PROFILE GUARD</h1>
            <p>CODES BY GEO SAMA</p>
          </div>
          <input type="text" placeholder="ENTER EAAAU TOKEN" class="input input-bordered" required name="token" style="border-radius: 8px; border:1px solid red; width:300px;" />
          <div>
            <input type="submit" class="btn btn-active" style="border:0px solid grey; width:100px; margin-top:8px;border-radius: 7px; background-color:red; color:white; width:300px;" value="GUARD ON">
          </div>
          <br>

            <?php
            if(isset($data["data"])){
              echo "<div class='alert alert-success' role='alert'>
Profile Guard On Success!
</div>";
          
  

            }
            else{
              echo "<div class='alert alert-danger' role='alert'>
             Unsupported Access Token!
             
              </div>";
            }
            ?>
        
        </div>
      </div>
    </center>
  </form>
</body>
</html>



