<a href="usuario-form"> Novo Usuário </a>
<table border="1">
    <tr>
        <th>
            Nome
        </th>
        <th>
            Idade
        </th>
    </tr>
    <pre>
   <?php foreach ( $usuarios as $usuario ): ?>
    <tr >
        <td>
            <?= $usuario["nome"] ?>
        </td>
        <td>
            <?= $usuario["idade"] ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
