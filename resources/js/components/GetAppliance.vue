<template>
    <div>
        <h1>Lista de Eletrodomésticos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Marca</th>
                    <th>Voltagem</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="eletrodomestico in eletrodomesticos" :key="eletrodomestico.id">
                    <td>{{ eletrodomestico.id }}</td>
                    <td>{{ eletrodomestico.name }}</td>
                    <td>{{ eletrodomestico.description }}</td>
                    <td>{{ eletrodomestico.brand_product }}</td>
                    <td>{{ eletrodomestico.voltage }}</td>
                    <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: eletrodomestico.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteEletrodomestico(eletrodomestico.id)">Delete</button>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
        <button @click="goToAddAppliance" class="btn btn-success">
            Adicionar Eletrodoméstico
        </button>
    </div>
</template>

<script>

export default {
        data() {
            return {
                eletrodomestico: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/eletrodomestico/')
                .then(response => {
                    this.eletrodomestico = response.data;
                });
        },
        methods: {
            deleteProduct(id) {
                this.axios
                    .delete(`http://localhost:8000/api/eletrodomestico/${id}`)
                    .then(response => {
                        let i = this.eletrodomestico.map(data => data.id).indexOf(id);
                        this.eletrodomestico.splice(i, 1)
                    });
            }
        }
};
</script>
