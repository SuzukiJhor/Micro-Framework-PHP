<style>
    /* Estilos CSS */
    .body {
        font-family: Arial, sans-serif;
        background-color: darkgrey;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .not-found {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        width: 50%;
        height: 50%;

        background-color: #fef4;
        padding: 20px;
        border-radius: 8px;
        /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
    }

    .not-found h1 {
        font-size: 48px;

    }

    .not-found p {
        font-size: 24px;
        margin-top: 50px;
    }

    .notFoundLink {
        text-decoration: none;
        font-weight: bold;
        font-size: 20px;
        display: block;
        margin-top: 60px;
    }
</style>

<div class="body">
    <div class="not-found">
        <h1>404</h1>
        <p>Página Não Encontrada</p>
        <a class='notFoundLink' href="/">Voltar para a Página Inicial</a>
    </div>
</div>