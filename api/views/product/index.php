<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Produtos</h2>
        <a href="<?= BASE_URL ?>/product/create">Novo Produto</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th colspan="2">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['products'] as $product) { ?>
            <tr>
              <td><?= $product['id'] ?></td>
              <td><?= $product['nome'] ?></td>
              <td>
                <a href="<?= BASE_URL ?>/product/show/<?= $product['id'] ?>">Ver</a>
                |
                <a href="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>">Editar</a>
                |             
                <a href="<?= BASE_URL ?>/product/delete/<?= $product['id'] ?>">Excluir</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
