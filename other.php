<button onclick="send();">Send Message</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function send() {
        var person = {
              "user": {
                "username": "your_username",
                "password": "your_password"
              },
              "messages": [
                {
                  "numbers": [
                    "2567000000"
                  ],
                  "senderid": "Anything to identify",
                  "messageBody": "Sample text body here"
                }
              ]
            };

            $.ajax({
                url: 'http://geniussmsgroup.com/api/json/messages1/jsonMessagesService',
                type: 'post',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify(person),
                success: function (data) {
                    console.log(data);
                },
                error: function(error){
                    console.log(error);
                }
            });
    }
</script>

<?php 
  $message = "Testing if this is really working well";

  $data= array(
    'user'=> array(
      'username'=>'username',// genius username 
      'password'=>'password' //genius sms password 
      ), 
    'messages'=> array(
      array(
        'numbers'=>array('25670000000'), 
        'messageBody'=>$message, 
        'senderid'=>'SenderID') 
        ) 
      );
  
  // var_dump($data);
  
  //encode the array into json 
  $json_builder =json_encode($data); 
  var_dump($json_builder);
  //use curl to post the the json encoded information 
  // $ch = curl_init('http://geniussmsgroup.com/api/json/messages/jsonMessagesService'); 
  $ch = curl_init('http://geniussmsgroup.com/api/json/messages1/jsonMessagesService'); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
  curl_setopt($ch, CURLOPT_HEADER, 0); curl_setopt($ch, CURLOPT_POST, 1); 
  curl_setopt($ch, CURLOPT_POSTFIELDS, $json_builder); 
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $ch_result = curl_exec($ch); 
  curl_close($ch); 
  //print an array that is json decoded 
  // print_r(json_decode($ch_result,true));

  var_dump($ch_result);
 ?>