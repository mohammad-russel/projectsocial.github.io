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
    }

    #number,
    #fullname,
    #email,
    #password {
        width: 70%;
        height: 30px;
        padding: 5px;
        border: none;
        border-bottom: 1px solid rgb(92, 92, 92);
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
        font-size: 1.25em;
        font-weight: 700;
        color: white;
        border-radius: 5px;
        padding: 3px;
        background-color: rgb(114, 114, 114);
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
        border: none;
        cursor: pointer;
        background: rgb(0, 62, 128);
    }

    button {
        width: 50%;
        padding: 5px 5px;
        color: rgb(218, 218, 218);
        border-radius: 7px;
        border: none;
        background: rgb(53, 120, 113);
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