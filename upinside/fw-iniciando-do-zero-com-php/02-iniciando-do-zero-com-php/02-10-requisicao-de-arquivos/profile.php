<article style="
    padding: 5px 20px;
    background: #eeeeee;
   border-radius: 4px 4px 4px;
">
    <h1><?= $profile->name; ?> </h1>
    <p>
        Trabalha na <?= $profile->company; ?> <br>
        <a title="Envia E-mail" href="mailto: <?= $profile->email; ?>"> Envia E-mail </a>
    </p>
</article>
