<h1>Palestras</h1>
<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Palestrante</th>
        <th>Início</th>
        <th>Fim</th>
    </tr>

    <?php foreach ($palestras as $palestra): ?>
    <tr>
        <td><?php echo $palestra['Palestra']['nome']; ?></td>
        <td><?php echo $palestra['Palestra']['descricao']; ?></td>
        <td><?php echo $palestra['Palestrante']['nome']; ?></td>
        <td><?php echo $palestra['Palestra']['inicio']; ?></td>
        <td><?php echo $palestra['Palestra']['fim']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($palestra); ?>
</table>