<template>
    <div>
      <h1>Adicionar Eletrodoméstico</h1>
      <form @submit.prevent="addEletrodomestico">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input v-model="eletrodomestico.nome" type="text" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="descricao">Descrição:</label>
          <textarea v-model="eletrodomestico.descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Marca:</label>
            <select class="form-select" v-model="eletrodomestico.marca">
                <option selected>Selecione a Marca do Eletrodoméstico</option>
                <option value="Electrolux">Electrolux</option>
                <option value="Brastemp">Brastemp</option>
                <option value="Fischer">Fischer</option>
                <option value="Samsung">Samsung</option>
                <option value="LG">LG</option>
            </select>
        </div>
        <div class="form-group">
            <label>Voltagem:</label>
            <select class="form-select" v-model="eletrodomestico.tensao">
                <option selected>Selecione a voltagem do Eletrodoméstico</option>
                <option value="220v">220v</option>
                <option value="110v">110v</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </template>

  <script>
  export default {
        data() {
            return {
                eletrodomestico: {}
            }
        },
        methods: {

            addEletrodomestico() {
                this.axios
                    .post('http://localhost:8000/api/eletrodomestico', this.eletrodomestico)
                    .then(response => (
                        this.$router.push({ name: 'home' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        }
    };
  </script>
