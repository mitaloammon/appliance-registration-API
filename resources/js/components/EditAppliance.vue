<template>
    <div>
      <h1>Editar Eletrodoméstico</h1>
      <form @submit.prevent="updateEletrodomestico">
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
            <select class="form-select" v-model="appliance.tensao">
                <option selected>Selecione a voltagem do Eletrodoméstico</option>
                <option value="220v">220v</option>
                <option value="110v">110v</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
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
        created() {
            this.axios
                .get(`http://localhost:8000/api//${this.$route.params.id}`)
                .then((res) => {
                    console.log('hello yes');
                    this.eletrodomestico = res.data;
                });
        },
        methods: {
            updateEletrodomestico() {
                this.axios
                    .patch(`http://localhost:8000/api/eletrodomestico/${this.$route.params.id}`, this.eletrodomestico)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
  </script>
eletrodomestico
