

$(document).ready(function(){

    var hash = window.location.hash;

    if(hash != '') {
        $('.abas li a[href="' + hash + '"]').parent().addClass('ativo');
        if(hash ===  '#consulta'){
            $('#cadastro').hide();
            $('#consulta').show();

        }else if(hash === '#cadastro'){
            $('#consulta').hide();
            $('#cadastro').show();

        }
    } else {
        $('.abas li a[href="#cadastro"]').parent().addClass('ativo');
    }

    $('.abas li .link').click(function(){

        if(hash === ''){

            $('.abas li').removeClass('ativo');
            $(this).parent().addClass('ativo');

            var ancora = $(this).attr('href').replace(hash, '');

            if(ancora ===  '#consulta'){
                $('#cadastro').hide();
                $('#consulta').show();

            }else if(ancora === '#cadastro'){
                $('#consulta').hide();
                $('#cadastro').show();

            }
        }else{
            $('.abas li').removeClass('ativo');
            $(this).parent().addClass('ativo');

            var ancora = $(this).attr('href').replace(hash, '');

            if(ancora ===  '#consulta'){
                $('#cadastro').hide();
                $('#consulta').show();

            }else if(ancora === '#cadastro'){
                $('#consulta').hide();
                $('#cadastro').show();

            }
        }

    });

});

function enviar(){

    $.ajax({
        url:'cad/arquivo.php',
        type:'POST',
        data: $('#formulario').serialize(),
        success: function(data){
            if(data === '1'){
                alert('Gravou');
                document.getElementById("formulario").reset();
            }else if(data === '2'){
                alert('Alterado com sucesso.');
                document.getElementById("formulario").reset();
            }else{
                alert('Error!'+data);
            }
        }
    });

}

function listagem(opcao,codigo){
    $.ajax({
        url:'listar/lista.php',
        type:'GET',
        data:{
            op:opcao,
            pesquisar: codigo
        },
        success:function(data){
            $('#mostrar_dados').html(data);
        }
    });
}

function alterar_estado(codigo, estado, sigla){

    var hash = window.location.hash;

    if(hash === '#consulta'){

        $('.abas li').removeClass('ativo');
        $('.abas li a[href="#cadastro"]').parent().addClass('ativo');

        $('#consulta').hide();
        $('#cadastro').show();

        location.href='#cadastro';

        $('#codigo').val(codigo);
        $('#estado').val(estado);
        $('#sigla').val(sigla);

    }

}

function excluir(codigo){

    if(confirm('Deseja excluir?')){

        $.ajax({
            url:'del/deletar.php',
            type:'POST',
            data:'codigo='+codigo,
            success:function(data){
                if(data === '1'){
                    alert('Foi excluido!');
                    document.getElementById('click_del').click();
                }
            }
        });

    }

}