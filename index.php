
<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <title>Tela com abas responsivo</title>
    <link rel="stylesheet" type="text/css" href="form.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
</head>

<body>
<div class="corpo_tela">

    <ul class="abas">
        <li><a class="link" href="#cadastro">Cadastro</a></li>
        <li><a class="link" href="#consulta">Consulta</a></li>
    </ul>

<!--    <div id="mostrar"></div>-->

    <div id="conteudo">

        <div id="cadastro">
            <form id="formulario" class="form" >

                <ul class="inicio_lista_form">

                    <input class="inputs" type="hidden" id="codigo" name="codigo" />

                    <li class="lista_form">
                        <label class="labels">
                            Estado
                            <input class="inputs" type="text" id="estado" name="estado" />
                        </label>
                    </li>

                    <li class="lista_form">
                        <label class="labels">
                            Sigla
                            <input class="inputs" type="text" id="sigla" name="sigla" />
                        </label>
                    </li>

                </ul>

                <label>
                    <input class="botao_cadastrar" type="button" value="Enviar" onclick="enviar();" />
                </label>

            </form>
        </div>

        <div id="consulta" style="display: none;">
            <form class="form" method="get" >

                <ul class="inicio_lista_form">

                    <li class="lista_form">
                        <select class="inputs" id="filtro" >
                            <option>Geral</option>
                            <option>Código</option>
                            <option>Descrição</option>
                        </select>
                    </li>

                    <li class="lista_form">
                        <input class="inputs" type="text" id="escolha"   />
                    </li>

                    <li class="lista_form">
                        <input class="botao_buscar" id="click_del" type="button" value="Buscar" onclick="listagem(filtro.selectedIndex, escolha.value);" />
                    </li>

                </ul>

            </form>

            <div id="mostrar_dados"></div>
        </div>

    </div>
</div>
</body>
</html>