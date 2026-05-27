<h1>Editar Cliente</h1>

<form method="POST">

  <input 
    type="text"
    value="<?= $user['cpf'] ?>"
    disabled
  >

  <input 
    type="text"
    name="nome"
    value="<?= $user['nome'] ?>"
  >

  <input 
    type="email"
    name="email"
    value="<?= $user['email'] ?>"
  >

  <button type="submit">
    Salvar
  </button>

</form>