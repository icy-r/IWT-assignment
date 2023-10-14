<?php

include("header.php");

?>
<style>
    .contact{
        padding: 10px;
        margin: 10px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        height: fit-content;
        width: 100%;
    }
    .from{
        background-color: grey;
        display: flex;
    }
    #form{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid black;
        border-radius: 10px 0 0 10px;
        background-color: rgb(255, 255, 255, 0.3);
    }
    input, select, textarea{
        padding: 10px;
        margin: 10px;
        border: none;
        color:black !important;
        background-color: transparent !important;
    }
    input::placeholder, textarea::placeholder{
        color:black !important;
    }
    button{
        padding: 10px;
        margin: 10px;
        border: none;
        border-radius: 10px 10px 10px 10px;
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        cursor: pointer;
    }
    button:hover{
        background-color: rgb(0, 0, 0);
        color: rgb(255, 255, 255);
    }
    .cinfo{
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 10px;
        border: 1px solid black;
        border-radius: 0px 10px 10px 0; 
        background-color: rgb(255, 255, 255, 0.3);
    }
</style>

<h2>Contact Us</h2>
<div class="contact">
    <div class="form">
        <form action="contact.php" method="post" id="form">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button  > submit </button>
        </form>
    </div>
    <div class="cinfo">
        <h3>Contact Info</h3>
        <p> We are open for any <br>
        suggestions or just to have a chat<p>

        <p><strong>Address:</strong> 123, colombo, 19.<br>
        <strong>Phone:</strong> +94 777 777 777 <br>
        <strong>Email:</strong> abcd@gmail.com<EMAIL> </p>

        
    </div>
</div>

<?php

include("footer.php");

?>