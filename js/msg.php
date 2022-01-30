<script>
    function myload() {
        document.querySelector(".chatcontent").scrollTop += 1000000000000000;

    }

    function load() {
        var incoming = $("#incoming").val();
        var outgoing = $("#outgoing").val();
        $.ajax({
            url: "php/showmsg.php",
            type: "post",
            data: {
                incoming: incoming,
                outgoing: outgoing
            },
            success: function(data) {
                $(".chatcontent").html(data);
                document.querySelector(".chatcontent").scrollTop += 10000000000000;

            }
        })
    }
    load();


    $("#send").on("click", function(e) {
        e.preventDefault();
        var time = $("#time").val();
        var incoming = $("#incoming").val();
        var outgoing = $("#outgoing").val();
        var message = $("#msg").val();

        $.ajax({
            url: "php/insertmsg.php",
            type: "post",
            data: {
                time: time,
                incoming: incoming,
                message: message,
                outgoing: outgoing
            },
            success: function(data) {
                if (data == 1) {
                    document.querySelector(".chatcontent").scrollTop += 10000000000000;
                    load();
                    $("#msg").val(" ");
                } else {
                    alert("con't save record");
                }
            }
        })

    });
</script>