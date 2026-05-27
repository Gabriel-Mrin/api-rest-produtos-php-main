<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Descição</th>
              <th scope="col">Preço</th>
              <th scope="col">Estoque</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $product) { ?>
            <tr>
              <td><?= $product['id'] ?></td>
              <td><?= $product['nome'] ?></td>
              <td><?= $product['descricao'] ?></td>
              <td><?= $product['preco'] ?></td>
              <td><?= $product['estoque'] ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
