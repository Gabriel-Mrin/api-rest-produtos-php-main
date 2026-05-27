<h1>Novo Produto</h1>

<form method="POST">

  <input 
    type="text" 
    name="nome"
    placeholder="Nome"
  >

  <textarea 
    name="descricao"
    placeholder="Descrição"
  ></textarea>

  <input 
    type="number"
    step="0.01"
    name="preco"
    placeholder="Preço"
  >

  <input 
    type="number"
    name="estoque"
    placeholder="Estoque"
  >

  <input 
    type="number"
    name="categoria_id"
    placeholder="Categoria"
  >

  <button type="submit">
    Cadastrar
  </button>

</form>