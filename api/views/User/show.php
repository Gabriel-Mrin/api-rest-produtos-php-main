<h1>Detalhes do Cliente</h1>

<table class="table">

  <tr>
    <th>CPF</th>
    <td><?= $data['user']['cpf'] ?></td>
  </tr>

  <tr>
    <th>Nome</th>
    <td><?= $data['user']['nome'] ?></td>
  </tr>

  <tr>
    <th>Email</th>
    <td><?= $data['user']['email'] ?></td>
  </tr>

</table>

<a href="<?= BASE_URL ?>/user">
  Voltar
</a>