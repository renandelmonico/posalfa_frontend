<div class="container">
    <div class="breadcrumb">
        <li>
            <a href="home">Página Inicial</a>
        </li>
        <li>Contato</li>
    </div>

    <h1>Entre em contato</h1>

    <p>Entre em contato através do formulário abaixo ou pelo e-mail renandelmonico@gmail.com ou pelo telefone 0800 16545646</p>

    <form name="contato" method="post" action="https://formspree.io/renandelmonico@gmail.com">
        <!--Depois de usado o PHPMailer foi usado o formspree-->
        <label for="name">Digite seu nome:</label>
        <input type="text" name="name" placeholder="Digite seu nome completo" required="required" class="form-control">

        <label for="_replyto">Digite seu e-mail:</label>
        <input type="email" name="_replyto" placeholder="Digite seu e-mail" required="required" class="form-control">

        <label for="mensagem">Digite sua mensagem:</label>
        <textarea name="mensagem" placeholder="Digite sua mensagem" required="required" class="form-control" rows="5">
        </textarea>

        <br>

        <button type="submit" class="btn btn-success btn-lg pull-right">Enviar</button>
    </form>
</div>