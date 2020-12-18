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