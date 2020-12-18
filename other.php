<button onclick="send();">Send Message</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function send() {
        var person = {
              "user": {
                "username": "fredowampz",
                "password": "GNLvfz7wWdAuBxx"
              },
              "messages": [
                {
                  "numbers": [
                    "256794313249"
                  ],
                  "senderid": "FredrickW",
                  "messageBody": "Sample for the Africell thing"
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