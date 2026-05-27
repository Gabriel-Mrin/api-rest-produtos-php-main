<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:100px">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $category) { ?>
            <tr>
              <td><?= $category['id'] ?></td>
              <td><?= $category['nome'] ?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
