<h1>Palestrantes</h1>
<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
        <th>URL</th>
    </tr>
    <?php foreach ($palestrantes as $palestrante): ?>
    <tr>
        <td><?php echo $palestrante['Palestrante']['nome']; ?></td>
        <td><?php echo $palestrante['Palestrante']['descricao']; ?></td>
        <td><?php echo $palestrante['Palestrante']['url']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($palestrante); ?>
</table>