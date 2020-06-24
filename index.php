<?php

if($_GET['url']!= ''){
    include_once('sessao.php');
    include_once('header_crud.php');
}
switch ($_GET['url']) {
    case 'cidades':
        include_once('cidades.php');
        break;
    case 'proprietario':
        include_once('proprietario.php');
        break;
    case 'veiculos':
        include_once('veiculos.php');
        break;
    case 'revisao':
        include_once('revisao.php');
        break;
    case 'compra':
        include_once('compra.php');
        break;
    case 'vendedor':
        include_once('vendedor.php');
        break;
    case 'cliente':
        include_once('cliente.php');
        break;
    case 'comissao':
        include_once('comissao.php');
        break;
    case 'venda':
        include_once('venda.php');
        break;
    case 'item_venda':
        include_once('item_venda.php');
        break;
    case 'usuarios':
        include_once('usuarios.php');
        break;
    case 'crud':
        include_once('inicial_Crud.php');
        break;
    default:
        include_once('inicial.php');
        break;
}
if($_GET['url'])  include_once('footer_crud.php');
?>
