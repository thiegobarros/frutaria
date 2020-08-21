<template>
    <div class="card">
        <div class="card-header">Cadastrar Cliente</div>

        <div class="card-body">
            <form @submit="submit" class="row">
                <div class="form-group col-lg-6">
                    <label for="nome">Nome</label>
                    <input class="form-control" id="nome" name="nome" v-model="nome" placeholder="Nome do cliente">
                </div>
                <div class="form-group col-lg-6">
                    <label for="cpf">CPF</label>
                    <input class="form-control" id="cpf" name="cpf" v-model="cpf" placeholder="CPF do cliente">
                </div>
                <button class="btn btn-primary ml-3">Salvar</button>
            </form>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            nome: '',
            cpf: ''
        }
    },
    methods: {
        submit(e) {
            e.preventDefault()
            axios.post('/client', {
                nome: this.nome,
                cpf: this.cpf
            })
            .then(response => {
                console.log(response)
            })
            .catch(error => {
                console.log(error)
            })
        }
    }
}
</script>
