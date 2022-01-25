<style>
    .usercmb {
        background: rgb(33, 33, 33);
        margin-bottom: 20px;
    }

    .usercmb .coverpic {
        width: 98%;
        cursor: pointer;
        margin: auto;
        height: 200px;
        background: rgb(53, 53, 53);
    }

    .usercmb .coverpic img {
        width: 100%;
        object-fit: cover;
        height: 100%;
        cursor: pointer;
    }

    .usercmb .userpic {
        width: 200px;
        height: 200px;
        margin: auto;
        margin-top: -70px;
        border-radius: 50%;
        overflow: hidden;
    }

    .usercmb .userpic img {
        width: 100%;
        object-fit: cover;
        height: 100%;
        cursor: pointer;
    }

    .userpicedit {
        padding: 10px;
        position: relative;
        text-align: center;
        width: 90%;
        text-align: center;
        background: rgb(40, 40, 40);
        margin: auto;
        border: 1px solid rgb(147, 147, 147);
        display: none;
    }

    .userpicedit form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .userpicedit form input {
        height: 30px;
        text-align: center;
        width: 100px;
        font-size: 20px;
    }

    .userpicedit form img {
        text-align: center;
        margin: auto;
    }

    .userpicedit form #img {
        display: none;
    }

    .coverpicedit {
        padding: 10px;
        position: relative;
        text-align: center;
        width: 90%;
        text-align: center;
        background: rgb(40, 40, 40);
        margin: auto;
        border: 1px solid rgb(147, 147, 147);
        display: none;
    }

    .coverpicedit form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .coverpicedit form input {
        height: 30px;
        text-align: center;
        width: 100px;
        font-size: 20px;
    }

    .coverpicedit form img {
        text-align: center;
        margin: auto;
    }

    .coverpicedit form #cimg {
        display: none;
    }

    .namebio {}

    .namebio h2 {
        text-align: center;
    }

    .namebio p {
        width: 50%;
        margin: auto;
        text-align: center;
        font-size: 17px;
        letter-spacing: 2px;
        line-height: 30px;
    }

    .postedit {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px 0px;
        margin: 50px 0px;
        background: rgb(33, 33, 33);
    }

    .postedit .btn a {
        text-decoration: none;
        color: azure;
    }

    .postedit .btn {
        margin: 0px 15px;
        padding: 10px;
        border-radius: 10px;
        box-shadow: black 3px 3px 4px -1px;
        cursor: pointer;
        text-align: center;
        height: 50px;
        display: flex;
        align-items: center;
    }

    .postedit .post {
        background: rgb(10, 78, 79);
    }

    .postedit .story {
        background: rgb(16, 61, 109);
    }

    .postedit .btn:active {
        box-shadow: black inset 3px 3px 4px -1px;
    }

    .userfullinfo {
        color: rgb(198, 198, 198);
        background: rgb(33, 33, 33);
    }

    .userfullinfo .title {
        text-align: center;
    }

    .userfullinfo .title h2 {
        font-size: 18px;
        margin-bottom: 10px;
        letter-spacing: 3px;
    }

    .userfullinfo .userinfos {
        background: rgb(33, 33, 33);
        padding: 15px 0px;
    }

    .userfullinfo .userinfos .inforoom {
        background: rgb(36, 36, 36);
        width: 90%;
        margin: auto;
        padding: 5px 15px;
        border-radius: 10px;
        box-shadow: rgb(0, 0, 0) 3px 2px 10px -3px;
    }

    .userfullinfo .userinfos .inforoom .infobox {
        margin: 20px 0px;
    }

    .userfullinfo .userinfos .inforoom .infobox i {
        display: flex;
        align-items: center;
        box-shadow: black 0px 4px 4px -5px;
        padding: 5px;
        width: 100%;
    }

    .userfullinfo .userinfos .inforoom .infobox i svg {
        width: 35px;
        margin: 0px 15px;
    }

    .userfullinfo .userinfos .inforoom .infobox i span {
        font-size: 20px;
        word-break: break-all;
    }

    .editinfo {
        background: rgb(33, 33, 33);
        padding: 10px 0px;
        padding-bottom: 20px;
    }

    .editinfo a {
        text-decoration: none;
    }

    .postpopup {
        display: none;
        margin: auto;
        text-align: center;
        width: 90%;
        height: 100%;
        padding: 15px 0px;
        background: rgb(70, 70, 70);
        border-radius: 10px;
    }

    .cphead {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .cphead img {
        width: 50px;
        margin: 0px 10px;
        border-radius: 50%;
    }

    #file {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    textarea {
        width: 100%;
        padding: 10px;
        outline: none;
        font-size: 17px;
        background: rgb(30, 30, 30);
        border: none;
        color: rgb(210, 210, 210);
        border-radius: 5px;
        resize: none;
    }

    label {
        width: 60%;
        font-size: 1.25em;
        font-weight: 700;
        color: rgb(230, 230, 230);
        border-radius: 5px;
        text-transform: uppercase;
        padding: 3px;
        background-color: rgb(0, 108, 7);
        display: inline-block;
        margin-bottom: 5px;
        text-align: center;
    }

    #submit {
        width: 50%;
        padding: 5px 5px;
        letter-spacing: 1px;
        color: rgb(218, 218, 218);
        border-radius: 7px;
        font-weight: 600;
        border: none;
        text-transform: uppercase;
        cursor: pointer;
        background: rgb(27, 97, 172);
        height: 35px;
    }

    .editinfo h2 {
        width: 160px;
        margin: auto;
        text-align: center;
        background: rgb(126, 112, 0);
        padding: 10px;
        color: rgb(255, 255, 255);
        border-radius: 10px;
        letter-spacing: 3px;
        cursor: pointer;
        box-shadow: black 3px 3px 4px -1px;
    }

    .editinfo h2:active {
        box-shadow: black inset 3px 3px 4px -1px;
    }

    .infoedit {
        background: rgb(33, 33, 33);
        text-align: center;
        padding: 10px 0px;
        display: none;
        width: 90%;
        margin: auto;
        border-radius: 10px 10px 10px 10px;
        border: 1px solid rgb(159, 159, 159);
    }

    .infoedit h2 {
        color: beige;
        font-size: 23px;
        margin-bottom: 10px;
    }

    .infoedit input,
    select {
        padding: 5px;
        height: 36px;
        margin: 10px 0px;
        width: 80%;
        outline: none;
        font-size: 17px;
        color: beige;
        border: none;
        background: rgb(33, 33, 33);
        border-bottom: 1px solid rgb(138, 138, 138);
    }

    #update {
        background: rgb(155, 8, 79);
        border-bottom: none;
        border-radius: 10px;
        cursor: pointer;
        letter-spacing: 2px;
    }
</style>