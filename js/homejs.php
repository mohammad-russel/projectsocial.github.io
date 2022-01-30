<script>
    function coverpic() {
        if (document.querySelector(".coverpicedit").style.display === "block") {
            document.querySelector(".coverpicedit").style.display = "none";
        } else {
            document.querySelector(".coverpicedit").style.display = "block";
        }
    }

    function profilepic() {
        if (document.querySelector(".userpicedit").style.display === "block") {
            document.querySelector(".userpicedit").style.display = "none";
        } else {
            document.querySelector(".userpicedit").style.display = "block";
        }
    }

    function post() {
        if (document.querySelector(".postpopup").style.display === "block") {
            document.querySelector(".postpopup").style.display = "none";
        } else {
            document.querySelector(".postpopup").style.display = "block";
        }
    }

    function info() {
        if (document.querySelector(".infoedit").style.display === "block") {
            document.querySelector(".infoedit").style.display = "none";
        } else {
            document.querySelector(".infoedit").style.display = "block";
        }
    }

    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    function show(event) {
        if (event.target.files.length > 0) {
            var wsrc = URL.createObjectURL(event.target.files[0]);
            var see = document.getElementById("see");
            see.src = wsrc;

        }
    }

    function cshow(event) {
        if (event.target.files.length > 0) {
            var csrc = URL.createObjectURL(event.target.files[0]);
            var csee = document.getElementById("csee");
            csee.src = csrc;

        }
    }

    function moreclick(id) {
        document.querySelector(".editdelete" + id).style.display = " block";
    }

    function cclick(id) {
        document.querySelector(".editdelete" + id).style.display = " none";
    }

    function comment(id) {
        if (document.querySelector(".commentroom" + id).style.display === "block") {
            document.querySelector(".commentroom" + id).style.display = "none"
        } else {
            document.querySelector(".commentroom" + id).style.display = "block"
        }
    }


    function like(pid) {

        var likecount = $(".likecount" + pid).html()
        likecount++;
        $(".likecount" + pid).html(likecount);
        $.ajax({
            url: "php/like.php",
            type: 'post',
            data: {
                likecount: likecount,
                id: pid
            },
            success: function(data) {


            }
        })

    }

    function dislike(pid) {

        var dislikecount = $(".dislikecount" + pid).html()
        dislikecount++;
        $(".dislikecount" + pid).html(dislikecount);
        $.ajax({
            url: "php/like.php",
            type: 'post',
            data: {
                dislikecount: dislikecount,
                id: pid
            },
            success: function(data) {}
        })

    }
    // var iid = $(".iid").html();
    // $(".csubmit" + iid).on("click", function(e) {

    //     e.preventDefault();
    //     var time = $("#ctime").val();
    //     var text = $("#commentinput").val();
    //     var cauther = $("#comid").val();
    //     var postid = $("#postid").val();
    //     $.ajax({
    //         url: "php/comment.php",
    //         type: "post",
    //         data: {
    //             ctime: time,
    //             comment: text,
    //             comid: cauther,
    //             postid: postid
    //         },
    //         success: function(result) {
    //             alert("ok boss");
    //         }
    //     })
    // })
</script>