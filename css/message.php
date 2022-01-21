<style>
    .chatroom {
        height: 100%;
    }
    
    .chathead {
        display: flex;
        align-items: center;
        height: 12%;
        padding: 0px 5px;
        border-bottom: 1px solid rgb(60, 60, 60);
    }
    
    .chathead a {
        max-width: 410px;
        margin: 0px 10px;
        width: 20px;
    }
    
    .chathead i svg {
        width: 100%;
        color: azure;
    }
    
    .chathead .messagerinfo {
        align-items: center;
        display: flex;
        width: 90%;
    }
    
    .chathead .messagerinfo img {
        width: 50px;
        border-radius: 50%;
        margin: 0px 10px;
    }
    
    .chathead .messagerinfo .ua {}
    
    .chathead .messagerinfo .ua h2 {
        font-size: 20px;
        color: beige;
        letter-spacing: 2px;
    }
    
    .chathead .messagerinfo .ua p {
        color: rgb(66, 199, 104);
        letter-spacing: 2px;
        font-size: 17px;
    }
    
    .chatcontent {
        height: 78%;
        overflow: auto;
    }
    
    .chatcontent .messagebox {}
    
    .chatcontent .messagebox .mt {
        margin: 5px 0px;
    }
    
    .chatcontent .messagebox .mt .time {}
    
    .chatcontent .messagebox .mt .time p {
        color: beige;
        letter-spacing: 1px;
        text-align: center;
    }
    
    .chatcontent .messagebox .mt .message {
        padding: 5px 10px;
    }
    
    .chatcontent .messagebox .mt .message p {
        width: max-content;
        padding: 10px;
        font-size: 18px;
    }
    
    .chatcontent .messagebox .mt .r {
        display: flex;
        justify-content: right;
        width: 90%;
        margin-left: 10%;
    }
    
    .chatcontent .messagebox .mt .l {
        display: flex;
        justify-content: left;
        width: 90%;
        margin-right: 10%;
    }
    
    .chatcontent .messagebox .mt .r p {
        background: rgb(0, 120, 167);
        border-radius: 10px 10px 1px 10px;
    }
    
    .chatcontent .messagebox .mt .l p {
        border-radius: 10px 10px 10px 0px;
        background: rgb(234, 234, 234);
    }
    
    .chatfooter {
        display: flex;
        align-items: center;
        padding: 3px 10px;
        height: 10%;
        justify-content: center;
    }
    
    .chatfooter .imglabel {
        width: 40px;
    }
    
    .chatfooter .imglabel i {}
    
    .chatfooter .imglabel i svg {
        cursor: pointer;
        width: 100%;
        color: rgb(0, 213, 121);
    }
    
    .chatfooter textarea {
        margin: 0px 10px;
        width: 90%;
        color: aliceblue;
        height: 80%;
        background: rgb(46, 46, 46);
        border: none;
        border-radius: 15px;
        padding: 8px;
        resize: none;
        outline: none;
    }
    
    .chatfooter textarea::-webkit-scrollbar {
        width: 0px;
    }
    
    .chatfooter .inplabel {
        width: 40px;
    }
    
    .chatfooter .inplabel i svg {
        width: 90%;
        color: rgb(255, 255, 255);
        cursor: pointer;
        height: 50px;
    }
    
    #img,
    #send {
        display: none;
    }
</style>