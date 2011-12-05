<h2>Formularz kontaktowy</h2>
<form action="/zapytanie_wyslane.html" method="post" id="contact">
    <div>
        <label>Twój email:</label>
        <input type="text" value="" name="userEmail" id="email" />
        <p class="error">&nbsp;</p>
    </div>
    <div>
        <label>Temat:</label>
        <input type="text" value="" name="subject" id="topic" />
        <p class="error">&nbsp;</p>
    </div>
    <div>
        <label>Treść:</label>
        <textarea name="content" id="email_content" ></textarea>
        <p class="error">&nbsp;</p>
    </div>
    <div>
        <label>&nbsp;</label>
        <input type="submit" id="sendEmail" value="Wyślij" />
    </div>
</form>