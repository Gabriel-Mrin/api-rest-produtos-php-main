<h1>Editar Produto</h1>

<form method="POST">

  <input 
    type="text" 
    name="nome"
    value="<?= $product['nome'] ?>"
  >

  <textarea name="descricao"><?= $product['descricao'] ?></textarea>

  <input 
    type="number"
    step="0.01"
    name="preco"
    value="<?= $product['preco'] ?>"
  >

  <input 
    type="number"
    name="estoque"
    value="<?= $product['estoque'] ?>"
  >

  <input 
    type="number"
    name="categoria_id"
    value="<?= $product['categoria_id'] ?>"
  >

  <button type="submit">
    Salvar
  </button>

</form>