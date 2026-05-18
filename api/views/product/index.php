<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">
        <h2>Produtos</h2>
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
                <a href="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>">Editar</a>
              </td>
              <td>
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
