<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    
    .container {
        width: 100%;
        height: 100vh;
        background: rgb(109, 109, 109);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .box {
        background: rgb(255, 255, 255);
        width: max-content;
        text-align: center;
        padding: 12px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px -12px;
    }
    
    form {
        width: 100%;
    }
    
    h1 {
        color: rgb(73, 73, 73);
        text-transform: uppercase;
    }
    
    #number,
    #fullname,
    #email,
    #password {
        width: 70%;
        height: 40px;
        padding: 5px;
        font-size: 18px;
        border: none;
        border-bottom: 2px solid rgb(121, 121, 121);
        outline: none;
        align-items: center;
    }
    
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    #file {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }
    
    label {
        width: 60%;
        font-size: 1.25em;
        font-weight: 700;
        color: rgb(230, 230, 230);
        border-radius: 5px;
        text-transform: uppercase;
        padding: 3px;
        background-color: rgb(84, 84, 84);
        display: inline-block;
        margin-bottom: 5px;
    }
    
    #file:focus+label,
    #file+label:hover {
        background-color: green;
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
    
    button {
        width: 50%;
        text-transform: uppercase;
        letter-spacing: 2px;
        padding: 5px 5px;
        color: rgb(218, 218, 218);
        border-radius: 7px;
        border: none;
        height: 30px;
        background: rgb(48, 155, 144);
        cursor: pointer;
    }
    
    a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        font-weight: 600;
    }
    
    @media only screen and (max-width: 450px) {
        .box {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0px;
        }
    }
</style>