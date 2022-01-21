<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
    }
    
    body {
        background: #000;
    }
    
    .container {
        overflow: hidden;
        margin: auto;
        max-width: 700px;
        background: rgb(21, 21, 21);
        height: 100vh;
    }
    
    header {
        height: 130PX;
        padding: 5px 1px;
        background: rgb(35, 35, 35);
        border-bottom: 1px solid rgb(52, 52, 52);
    }
    
    .header1 {
        padding: 10px 30px;
    }
    
    .header1 .logo h3 {
        border-bottom: 1px solid rgb(79, 79, 79);
        text-align: center;
        font-size: 30px;
        color: rgb(239, 239, 239);
        letter-spacing: 5px;
    }
    
    .header1 .logo h3 span {
        color: rgb(0, 213, 213);
    }
    /* ------------------------ menu ----------------------- */
    
    .header2 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        height: 60px;
    }
    
    .header2 .menu {
        width: 50px;
        background: rgb(60, 60, 60);
        padding: 10px;
        height: 50px;
        border-radius: 50%;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .header2 .menu a i svg {
        width: 100%;
        color: rgb(223, 223, 223);
    }
    
    .header2 .menu a i img {
        width: 50px;
        border-radius: 50%;
    }
    /* ------------------------------------------- */
    /* ----------------------------------------------- */
    
    main {
        height: 100%;
        overflow: auto;
    }
    
    main::-webkit-scrollbar {
        background: #000;
        width: 10px;
    }
    
    main::-webkit-scrollbar-thumb {
        background: rgb(198, 198, 198);
    }
    /* -------------------------------------------- */
    /* ---------------------------------------------- */
    /* -------------------------- story --------------------------- */
    
    .storyroom {
        margin: 7px 0px;
        height: 140px;
        background: rgb(40, 40, 40);
        padding: 5px;
        display: flex;
        align-items: center;
        overflow: auto;
        border: 1px solid rgb(52, 52, 52);
    }
    
    .storyroom::-webkit-scrollbar {
        width: 0px;
        height: 0px;
    }
    
    .storyroom .storybox {
        background: rgb(96, 96, 96);
        height: 95%;
        padding: 10px;
        min-width: 95px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px 10px;
        border-radius: 20PX;
        background-image: url("postimage/post.jpg");
        background-position: center;
        background-repeat: no-repeat;
        z-index: 11px;
        background-size: cover;
    }
    
    .storyroom .storybox img {
        width: 40px;
        margin-bottom: 50px;
        border: 3px solid white;
        border-radius: 50%;
    }
    /* -------------------------------- Post -------------------------- */
    
    .postroom {
        padding: 0px 0px;
    }
    
    .postbox {
        margin: 20px auto;
        max-width: 500px;
        overflow: hidden;
        border-radius: 10px;
        border: 1px solid rgb(69, 69, 69);
    }
    /* ------------------ post head ------------------ */
    
    .postheader {
        background: rgb(28, 28, 28);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 15px;
    }
    
    .autherinfo {
        display: flex;
        align-items: center;
    }
    
    .autherinfo img {
        width: 60px;
        border-radius: 50%;
    }
    
    .autherinfo .info {
        margin-left: 10px;
    }
    
    .autherinfo .info h3 {
        color: rgb(198, 198, 198);
        letter-spacing: 2px;
    }
    
    .autherinfo .info p {
        color: rgb(206, 206, 206);
    }
    
    .editdelete {
        display: none;
        position: relative;
        padding: 10px;
        width: 100%;
        background: rgb(21, 21, 21);
        text-align: center;
    }
    
    .editdelete button {
        width: 100px;
        height: 30px;
        border-radius: 10px;
        border: none;
        font-size: 20px;
        background: rgb(72, 72, 72);
        letter-spacing: 3px;
        font-weight: 600;
        color: rgb(234, 234, 234);
        cursor: pointer;
    }
    
    .more {}
    
    .more i svg {
        cursor: pointer;
        width: 35px;
        color: aliceblue;
    }
    /* ------------------- post content -------------------- */
    
    .postcontent {
        background: rgb(28, 28, 28);
    }
    
    .postcontent .text {
        padding: 5px 15px;
    }
    
    .postcontent .text p {
        color: rgb(169, 169, 169);
        font-size: 1.33rem;
    }
    
    .postcontent .image {}
    
    .postcontent .image img {
        width: 100%;
    }
    /* ---------------------- post footer -------------------- */
    
    .postfooter {
        background: rgb(28, 28, 28);
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0px 10px;
    }
    
    .postfooter a {
        color: beige;
        text-decoration: none;
        height: 100%;
        text-decoration: none;
        height: max-content;
        width: max-content;
    }
    
    .postfooter a .react {
        width: 100px;
        border-radius: 15px;
        background: rgb(42, 42, 42);
        padding: 5px 13px;
        height: 100%;
        justify-content: center;
        display: flex;
        box-shadow: rgb(0, 0, 0) 2px 2px 4px -1px;
        align-items: center;
    }
    
    .postfooter a .react p {
        font-weight: 600;
    }
    
    .postfooter a .react:active {
        box-shadow: rgb(0, 0, 0) inset 2px 2px 4px -1px;
    }
    
    .postfooter a .react i {
        height: 10%;
        cursor: pointer;
        text-align: center;
        padding: 5px;
        border-radius: 12px;
        transition: 0.2s;
    }
    
    .postfooter a .react i svg {
        text-align: center;
        width: 25px;
        color: rgb(201, 201, 201);
    }
    
    .postfooter .like svg:hover {
        color: rgb(29, 132, 0);
    }
    
    .postfooter .dislike svg:hover {
        color: rgb(208, 0, 0);
    }
    
    .postfooter .comment svg:hover {
        color: rgb(0, 152, 149);
    }
    /* ----------------------- comment ----------------------- */
    
    .commentroom {
        display: none;
    }
    
    .commentbox {
        background: rgb(36, 36, 36);
        display: flex;
        align-items: center;
        justify-content: left;
        padding: 10px 8px;
    }
    
    .commentimage {
        width: 50px;
        margin: 0px 10px;
    }
    
    .commentimage img {
        width: 100%;
        border-radius: 50%;
        box-shadow: black 2px 2px 4px -1px;
    }
    
    .commenttext {
        background: rgb(70, 70, 70);
        padding: 10px;
        border-radius: 10px;
        color: rgb(169, 169, 169);
        box-shadow: rgb(0, 0, 0) 2px 2px 4px -1px;
        max-width: 80%;
    }
    
    .commenttext .name {
        margin-bottom: 5px;
        letter-spacing: 1px;
        text-shadow: rgb(63, 63, 63) 0px 3px 3px;
    }
    
    .commenttext p {
        text-shadow: rgb(75, 75, 75) 0px 3px 3px;
    }
    
    .commentinput {
        display: flex;
        padding: 10px;
        justify-content: space-evenly;
        align-items: center;
        background: rgb(26, 26, 26);
    }
    
    .commentinput .userimg img {
        width: 60px;
        border-radius: 50%;
    }
    
    .commentinput textarea {
        width: 70%;
        height: 50px;
        background: rgb(40, 40, 40);
        border: none;
        border-radius: 50px;
        padding: 10px;
        color: rgb(205, 205, 205);
        font-size: 17px;
        outline: none;
        box-shadow: rgb(0, 0, 0) inset 2px 2px 4px -1px;
        resize: none;
        overflow: hidden;
    }
    
    .commentinput a i svg {
        color: rgb(113, 113, 113);
        width: 30px;
    }
    
    .space {
        height: 150px;
    }
    /* -------------------------- responsive ------------------------ */
    /* ------------------------------------------------------------------ */
    
    @media only screen and (max-width: 450px) {
        .container {
            width: 100%;
        }
        header {
            padding-bottom: 0px;
        }
        main::-webkit-scrollbar {
            width: 0px;
        }
    }
</style>