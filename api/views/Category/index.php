<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Categorias</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['categories'] as $category) { ?>
            <tr>
              <td><?= $category['id'] ?></td>
              <td><?= $category['nome'] ?></td>
              <td>
                <a href="<?= BASE_URL ?>/category/show/<?= $category['id'] ?>">Ver</a>
                |
                <a href="<?= BASE_URL ?>/category/edit/<?= $category['id'] ?>">Editar</a>
                |
                <a href="<?= BASE_URL ?>/category/delete/<?= $category['id'] ?>">Excluir</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
