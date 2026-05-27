<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Produtos</h2>
        <a href="<?= BASE_URL ?>/users/create">Novo Cliente</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">CPF</th>
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th colspan="2">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['users'] as $user) { ?>
            <tr>
              <td><?= substr($user['cpf'], 0, 3) ?>******<?= substr($user['cpf'], -2) ?></td>
              <td><?= $user['nome'] ?></td>
              <td><?= $user['email'] ?></td>
              <td>
                <a href="<?= BASE_URL ?>/user/show/<?= $user['cpf'] ?>">Ver</a>
                |
                <a href="<?= BASE_URL ?>/user/edit/<?= $user['cpf'] ?>">Editar</a>
                |             
                <a href="<?= BASE_URL ?>/user/delete/<?= $user['cpf'] ?>">Excluir</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
